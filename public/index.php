<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

function encriptarAES($input) 
{ 
    $size = mcrypt_get_block_size('rijndael-128', 'cbc'); 
    $input = pkcs5_pad($input, $size); 
    $key = 'unaclave'; 
    $td = mcrypt_module_open('rijndael-128', '', 'cbc', ''); 
    $iv = "otraclave";//mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND); 
    mcrypt_generic_init($td, $key, $iv); 
    $data = mcrypt_generic($td, $input); 
    mcrypt_generic_deinit($td); 
    mcrypt_module_close($td); 
    $data = base64_encode($data); 
    return $data; 
} 

function pkcs5_pad ($text, $blocksize) 
{ 
    $pad = $blocksize - (strlen($text) % $blocksize); 
    return $text . str_repeat(chr($pad), $pad); 
} 

function pkcs5_unpad($text) 
{ 
    $pad = ord($text{strlen($text)-1}); 
    if ($pad > strlen($text)) return false; 
    if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) return false; 
    return substr($text, 0, -1 * $pad); 
} 

function desencriptarAES($input) 
{ 
    $size = mcrypt_get_block_size('rijndael-128', 'cbc'); 
    $key = 'unaclave'; 
    $td = mcrypt_module_open('rijndael-128', '', 'cbc', ''); 
    $iv = "otraclave";
    mcrypt_generic_init($td, $key, $iv); 
    $data = mdecrypt_generic($td, base64_decode($input)); 
    mcrypt_generic_deinit($td); 
    mcrypt_module_close($td); 
    $data = pkcs5_unpad($data); 
    return $data; 
} 

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'dbhost' => 'localhost',
        'dbname' => '[]',
        'user' => '[]',
        'password' => '[]',
    ),
));


$app->get('/4dm1n', function ()  use ($app) {
    $sql = "SELECT * FROM usuarios";
    $posts = $app['db']->fetchall($sql);
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=porras.csv");
    header("Pragma: no-cache");
    header("Expires: 0");

    $output = fopen("php://output", "w");

    foreach ($posts as $row)
        fputcsv($output, $row, ',');

    fclose($output);
    exit();
})->bind('dump');

$app->get('/', function () use ($app)  {
    $target = mktime(0, 0, 0, 4, 12, 2015) ;
    $today = time () ;
    $difference =($target-$today) ;
    $result = round($difference / 86400).":".($difference / 3600 % 24).":".($difference / 60 % 60).":".($difference % 60);
    return $app['twig']->render('index.html.php', array(
        'difference' => $result,
    ));
});

$app->get('/bases', function () use ($app)  {
    return $app['twig']->render('bases.html.php');
});

$app->post('/login', function () use ($app)  {
    return $app['twig']->render('login.html.php', array(
        'equipo1' => $_REQUEST["equipo1"],
        'equipo2' => $_REQUEST["equipo2"]
    ));
});

$app->get('/porra', function () use ($app)  {
    $nuevo = false;
    if(isset($_COOKIE['uem_ext'])){
        $desencriptado = desencriptarAES($_COOKIE['uem_ext']);
        $partes = explode("==",$desencriptado);
        $desencriptado= explode("|$|",$partes[1]);
        if(count($desencriptado)>0 && isset($desencriptado[2])){
            $sql = "select * from usuarios where email='".$desencriptado[2]."' and jornada=1";
            $posts = $app['db']->fetchall($sql);
            if(count($posts)==0){
                $nuevo = true;
                $res = explode("-",$_REQUEST["res"]);
                $sql = "insert into usuarios (password, email, equipo1, equipo2, jornada) values (".$desencriptado[1].",'".$desencriptado[2]."','".$res[0]."','".$res[1]."',1)";
                $post = $app['db']->executeUpdate($sql);            
            }
        }
    }

     return $app['twig']->render('thankyou.html.php', array(
        'url' => "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'],
        'equipo1' => $_REQUEST["equipo1"],
        'equipo2' => $_REQUEST["equipo2"],
        'nuevo' => $nuevo
    ));
});


$app->run();
