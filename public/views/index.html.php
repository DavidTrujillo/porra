<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Participa en la porra de MARCA.com y entrarás a concursar por fantásticos premios">
    <meta name="author" content="">

    <meta property="og:title" content="La porra de la Champions de MARCA.com"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="http://porra.marca.com"/>
    <meta property="og:description" content="Participa en la porra de MARCA.com y entrarás a concursar por muchos premios"/>
    <meta property='og:image' content='http://porra.marca.com/images/porra.png'/>
    <meta property='og:type' content='article'/>

    <title>La porra de Marca.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
         @font-face {
            font-family: 'osp-din';
            src: url('../fonts/OSP-DIN-webfont.eot');
            src: url('../fonts/OSP-DIN-webfont.eot?#iefix') format('embedded-opentype'),
                 url('../fonts/OSP-DIN-webfont.woff2') format('woff2'),
                 url('../fonts/OSP-DIN-webfont.woff') format('woff'),
                 url('../fonts/OSP-DIN-webfont.ttf') format('truetype'),
                 url('../fonts/OSP-DIN-webfont.svg#osp-dindin') format('svg');
            font-weight: normal;
            font-style: normal;

            }   
            @font-face {
            font-family: "din-condensed";
            src: url("../fonts/din-condensed-bold.eot");
            src: url("../fonts/din-condensed-bold.eot#iefix") format("embedded-opentype"),
            url("../fonts/din-condensed-bold.woff") format("woff"),
            url("../fonts/din-condensed-bold.ttf") format("truetype"),
            url("../fonts/din-condensed-bold.svg") format("svg");
            font-weight: normal;
            font-style: normal;
        }
        .h3, h3 {
          font-size: 22px;
          margin-top: 0px;
          letter-spacing: -1.5px;
        }     
        .separator {
          border: 1px solid #fff;
          width: 89%;
          margin: auto;
          margin-top: 61px;
          margin-bottom: 49px;
        }
        .led {
          border: 3px solid;
          width: 77%;
          padding: 5px;
          padding-top: 9px;
          margin-left: 32px;
        }
        div#min {
          width: 67px;
        }
        .capa-porra.jornada {
          padding-top: 8.8em;
        }
        .btn{
            background: #d71b0c;
            color: #fff;
            border: 0;
            border-radius: 0;
            padding: 10px 25px;
            font-size: 12px;
        }
        .caja{
          border: 3px solid #fff;
          width: 160px;
          height: 160px;
          color: #d71b0c;
          font-family: "din-condensed";
          line-height: 1.25;
          font-size: 161px;
          font-weight: bold;
          margin: auto;
          text-shadow: 0 0 13px #FFFACD;
          opacity: .8;
        }
        span.jornada-title {
          margin-left: -71px;
          margin-top: 22px;
          margin-left: -4.6em;
          font-size: 12px;
        }
        .menu{
            font-family: 'Montserrat', sans-serif;
            list-style: none;
            margin: 20px 0 0 -200px;
            padding: 0;
            position:relative;
            left:40%;
            width: 513px;
        }
        .navbar-default{
            background:none;
        }
        .menu a{
            margin:20px 40px;
            font-size: 12px;           
            color: #fff;
            text-decoration: none;
            text-align: center;
        }
        ul.menu li {
            float: left;
            display: block;
            height: 15px;
            border-right: 2px solid #fff;
        }
        .menu>li>a:hover{
            background: none;
            border-bottom: 2px solid #d71b0c;
        }
        a .glyphicon{
            color:#fff;
            font-size: 30px;
        }
        .foot-inferior {
           clear: both;
           text-align: center;
           background: #000;
           font-size: 12px;
        }

        .foot-inferior ul li {
            margin-right: 12px;
            display: inline-block;
            padding: 0;
            margin: 0;
            text-align: center;
            padding-right: 17px;
        }
        .foot-inferior ul {
            margin-bottom: 0px;
            padding-top: 4px;
            padding-bottom: 3px;
        }
        .foot-inferior a {
           clear: both;
           text-align: center;
           color: #5A5A5A;
        }
        ul.legal {
          padding: 0;
          margin: 0;
          list-style: none;
          display: inline-block;
        }
       
        .capa-porra{
            width:33%;
            float: left;
            text-align: center;
            padding-top: 15px;

        }
        .escudo-madrid{
            width: 137px;
        }
        .escudo-atletico{
            width: 210px;
        }
        .vs{
            width: 85px;
            margin-top:11px;
        }
        .desc1 { 
          display: none; 
        }
        .capa-porra.center {
          width: 33%;
          float: left;
          text-align: center;
          padding-top: 15px;
        }
        .porra-section .login {
          padding: 0;
        }
        .col-lg-3{
          width: 25%;
          font-family: arial;
          font-size: 9px;
          text-align: justify;
        }
        .col-lg-11 {
          font-family: arial;
          font-size: 9px;
          text-align: justify;
        }

        @media (min-width: 811px) {    
            .container{
                width:810px;
            }
        }

    </style>
    <style type="text/css">
    br { clear: both; }
    .cntSeparator {
        font-size: 54px;
        margin: 10px 7px;
        color: #fff;
    }
    .desc { 
      margin: 7px 3px;
      margin-bottom: 34px;
      margin-top: 16px;
    }
     

    .desc div {
        float: left;
        font-family: Arial;
        width: 86px;
        margin-right: 0;
        font-size: 10px;
        font-weight: bold;
        color: #fff;
    }
    .iconos, .iconos_home{
        margin:18px;
    }
    .iconos_home{
        display: none;
    }
    .lettering{
        margin: 30px auto;
    }
    .led1{
            display: none;
        }
    @media (max-width:768px){
        .iconos_home{
            display: none;
        }
        .lettering{
            margin-bottom: 50px;
        }
        .circulo{
            display: none;
        } 
        footer{
            display: none; 
        }
        .jornada h3{        
            font-size:14px;
        }
        .porra-section{
            padding-top: 35px;
        }
        .menu{
            left:0;
            margin:20px auto;
            width:auto;
        }
        .menu a{
            margin:20px 20px;
        }
        .desc{
            display: none;
        }

        .desc1 { 
          display: block;
          margin: 0px 0px 0px 40px;
          margin-bottom: 34px;
          margin-top: 16px;
          font-size: 9px;
        }

        .desc1 div {
          float: left;
          font-family: Arial;
          width: 70px;
          margin-right: 0;
          font-size: 10px;
          font-weight: bold;
          color: #fff;
        }
        div#min {
          width: 50px;
        }

        .escudo-madrid{
            width: 76px;
        }
        .escudo-atletico{
            width: 110px;
        }
        .vs{
            width: 53px;
            margin-top:0px;
        }
        .caja{
            width: 110px;
            height: 170px;
        }
        
        .led{
            display: none;
        }
        .led1{
            display: -webkit-inline-box;
            border: 2px solid;
            padding: 5px;
            padding-top: 9px;
            margin-left: 0px;
            margin-top: 0px;
            margin-bottom: 27px;
        }
        .intro-section{
            background: url(/images/fondo-mobile.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .porra-section{
            background: url(/images/fondo1-mobile.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .separator {
          display: none;
          border: 1px solid #fff;
          width: 99%;
          margin: auto;
          margin-top: 10px;
          margin-bottom: 10px;
        }
        span.jornada-title {
          margin-left: -71px;
          margin-top: 22px;
          margin-left: -0.6em;
          font-size: 12px;
        }
        .capa-porra.jornada {
          padding-top: 0em;
        }
        .capa-porra{
            width:33%;
            float: left;
            text-align: center;
            padding-top: 0;
            
        }
        .caja {
          font-size: 95px;
          width: 101px;
          height: 101px;
          line-height: 1.3;
        }
    }
       @media (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2){

            .menu{
                left:5%;
            }
            .lettering {
             margin: 0 auto;
            }
            .desc1 {
              display: block;
              margin: 0px 0px 0px 30px;
              margin-bottom: 34px;
              margin-top: 16px;
              font-size: 9px;
            }
            .porra-section {
              height: 100%;
              padding-top: 7px;
              padding-bottom: 470px;
             }

            .intro-section {
              height: 100%;
              padding-top: 150px;
              padding-bottom: 280px;
             }
             img.premio {
              max-width: 330px; 
            }

    }
    @media (max-device-width: 320px) and (-webkit-min-device-pixel-ratio: 2){

            .menu{
                margin-left: 0;
                display: inline-flex;
            }

            img.premio {
              max-width: 330px; 
            }
            
    }
    </style>
<!-- SiteCatalyst code version: H.26.
Copyright 1996-2013 Adobe, Inc. All Rights Reserved
More info available at http://www.omniture.com -->
<script language="JavaScript" type="text/javascript" src="http://active.cache.el-mundo.net/js/s_code.js"></script>
<script language="JavaScript" type="text/javascript"><!--
/* You may give each page an identifying name, server, and channel on
the next lines. */
s.pageName=""               
s.hier1=""                  
s.channel="porra.marca"             
s.prop1=""                  
s.prop2="home"                  
s.prop3=""                  
s.prop4=""                  
s.prop5=""                  
s.prop6=""                  
s.prop7="marca.com"                 
s.prop29=""                 
s.prop30=""                 
s.prop31=s.channel;         
s.prop32=""                 
s.prop33=""                 
s.prop34=""                 
s.prop45=""                 
s.prop75=""                 
/* Conversion Variables */
s.eVar1=s.channel;          
s.eVar2=s.prop1;            
s.eVar3=s.prop2;            
s.eVar4=s.prop3;            
s.eVar35=s.prop4;           
s.eVar5=s.prop5;            
s.eVar31=s.prop6;           
s.eVar36=s.prop7;           
s.eVar29=s.prop29;          
s.eVar30=s.prop30;          
s.eVar45=s.prop32;          
s.eVar33=s.prop33;          
s.eVar34=s.prop34;          
s.eVar10=s.prop45;          
s.eVar75=s.prop75;          
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript" type="text/javascript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script><noscript><img src="http://metrics.el-mundo.net/b/ss/uevistatest,ueelclub/1/H.26--NS/0"
height="1" width="1" border="0" alt="" /></noscript><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.26. --></head>

<body id="page-top" data-spy="scroll">
    <div class="container" style="background:#d71b0c;padding:10px 20px;position:fixed;left:50%;margin-left:-405px;z-index:1000">
        <div class="pull-left">
            <a href="http://www.marca.com/" target="_blank"><img src="/images/marca.png"></a>
        </div>
        <div class="pull-right">
            <a class="tweet" href="https://twitter.com/share?text=¡Visita la porra de la Champions de Marca y participa por fantásticos premios!"
              data-related="twitterdev"
              data-size="large"
              data-count="none"><img src="/images/twitter.png"></a>&nbsp;&nbsp;
            <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=[URL]&title=[Participa en la porra de MARCA.com y entrarás a concursar por fantásticos premios]"/><img src="/images/fb.png"></a>
        </div>
    </div>
    <div class="container" style="position:relative;text-align: center;padding-top:50px;">
            <ul class="menu">
                <li><a class="page-scroll" href="#about">HOME</a>
                <li><a class="page-scroll" href="#premio">PREMIO</a>
                  <li><a class="page-scroll" href="#porra">PORRA</a>
                <li style="border-right:none;"><a class="page-scroll" href="/bases" style="margin:20px 0px 0px 18px" target="_blank">BASES LEGALES</a>
            </ul>
    </div>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="/images/lettering-porra.png" width="80%" class="lettering"><br>
                    <a class="btn btn-default page-scroll" href="#porra">QUIERO JUGAR</a>
                    <div class="iconos_home">
                        <img src="/images/twitter.png">&nbsp;&nbsp;
                        <img src="/images/fb.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- porra Section -->
    <section id="porra" class="porra-section">
        <div class="container" style="position:relative">
            <div class="desc1">
                        <div id="dia">DÍAS</div>
                        <div id="hora">HORAS</div>
                        <div id="min">MINUTOS</div>
                    </div> 
            <div class="led1"></div>

            <img src="/images/circulo.png" class="circulo" style="position:absolute;left:0;top:0">
            <img src="/images/circulo.png" class="circulo" style="position:absolute;right:0;top:0">
            <div class="row">
                <div class="capa-porra">
                    <img src="/images/real_madrid.png" width="137" class="escudo-madrid">
                </div>
                <div class="capa-porra jornada">
                <span class="jornada-title">JORNADA</span><br><h3>- 14/04/2015 -</h3>
                </div>
                <div class="capa-porra">
                    <img src="/images/atletico.png" style="margin-left:-30px" class="escudo-atletico">
                </div>
            </div>
            <div class="row">
                <div class="capa-porra">
                    <a href="#"><span class="glyphicon glyphicon-triangle-top top-caja1"></span></a>
                    <div class="caja" id="caja1">0</div>
                    <a href="#"><span class="glyphicon glyphicon-triangle-bottom bottom-caja1"></span></a>
                </div>
                <div class="capa-porra center">
                    <div class="desc">
                        <div id="dia">DÍAS</div>
                        <div id="hora">HORAS</div>
                        <div id="min">MINUTOS</div>
                    </div> 
                    <div class="led"></div>
                    
                    <br>
                    <img src="/images/vs.png" class="vs"><br><br>
                </div>
                <div class="capa-porra">
                    <a href="#"><span class="glyphicon glyphicon-triangle-top top-caja2"></span></a>
                    <div class="caja" id="caja2">0</div>
                    <a href="#"><span class="glyphicon glyphicon-triangle-bottom bottom-caja2"></span></a>
                </div>
            </div>
            <div class="separator"></div>
            <div class="row">
                <form id="miporra" method="post" action="/login">
                    <input type="hidden" name="equipo1" id="equipo1">
                    <input type="hidden" name="equipo2" id="equipo2">
                    <a class="btn btn-default enviar" href="#">VALIDAR PORRA</a> 
                </form>   
                <!-- <div class="iconos">
                    <img src="/images/twitter.png">&nbsp;&nbsp;
                    <img src="/images/fb.png">
                </div> -->
            </div>
            <img src="/images/circulo.png" class="circulo" style="position:absolute;left:0;bottom:0">
            <img src="/images/circulo.png" class="circulo" style="position:absolute;right:0;bottom:0">
        </div>
    </section>

    <!-- Premio Section -->
    <section id="premio" class="porra-section premio">
        <div class="container" style="position:relative">
            <img src="/images/circulo.png" class="circulo" style="position:absolute;left:0;top:0">
            <img src="/images/circulo.png" class="circulo" style="position:absolute;right:0;top:0">
            <div class="row">
                <div class="capa-porra premio">
                   <!--  <img src="/images/premio.png" width="137" class="escudo-madrid"> -->
                </div>
                <div class="capa-porra jornada" style="padding-bottom:10em;">
                 <img src="/images/premio.png" class="premio">
                </div>
                <div class="capa-porra">
                    <!-- <img src="/images/atletico.png" style="margin-left:-30px" class="escudo-atletico">
                </div> -->
            </div>
            <div class="row">
               
               
            
            <div class="row">
                
            </div>
            <img src="/images/circulo.png" class="circulo" style="position:absolute;left:0;bottom:0">
            <img src="/images/circulo.png" class="circulo" style="position:absolute;right:0;bottom:0">
        </div>
    </section>

    <footer>
        <div class="foot-inferior">
            <ul>
                <li class="rss"><a title="Suscríbete al RSS" href="http://www.marca.com/deporte/rss/"><span>RSS</span></a></li>
                <li><a title="Ayuda" target="_blank" href="http://www.marca.com/corporativo/ayuda.html">Ayuda</a></li>
                <li><a title="Términos y Condiciones" target="_blank" href="http://www.marca.com/corporativo/aviso-legal.html ">Términos y Condiciones</a></li>
                <li><a title="Política de Privacidad" target="_blank" href="http://www.marca.com/corporativo/proteccion-datos.html">Privacidad</a></li>
                <li><a title="Política de Cookies" target="_blank" href="http://cookies.unidadeditorial.es/">Cookies</a></li>
                <li><a title="Contacto" target="_blank" href="http://www.marca.com/corporativo/contacto.html">Contacto</a></li>
                <li><a title="Nuestro equipo" target="_blank" href="http://www.marca.com/corporativo/el_equipo.html">Nuestro equipo</a></li>
                <li><a title="Venta de contenidos" target="_blank" href="https://www.uesyndication.com">Venta de contenidos</a></li>
                <li><a title="Publicidad" target="_blank" href="http://www.unidadeditorial.com/publicidad">Publicidad</a></li>
            </ul>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/jquery.classyled_new.js"></script>
    <script type="text/javascript">
   
      $(function(){
        // $('#counter').countdown({
        //   image: 'images/digits.png',
        //   startTime: '{{difference}}'
        // });
       $('.led').ClassyLED({
            type: 'countdown',
            format: 'dd:hh:mm',
            color: '#eee',
            backgroundColor: 'none',
            size: 3,
            rounded:2,
            spacing: 0.8,
            countTo: "2015:04:14"
        });

        $('.led1').ClassyLED({
            type: 'countdown',
            format: 'dd:hh:mm',
            color: '#eee',
            backgroundColor: 'none',
            size: 3,
            rounded:2,
            spacing: 0.2,
            countTo: "2015:04:14"
        });


        $(".enviar").click(function(){
            $("#equipo1").val($("#caja1").html());
            $("#equipo2").val($("#caja2").html());
            $("#miporra").submit();
        });
        $(".top-caja1").click(function(){
            num = parseInt($("#caja1").html());
            $("#caja1").html(num+1);
            return false;
        });
        $(".top-caja2").click(function(){
            num = parseInt($("#caja2").html());
            $("#caja2").html(num+1);
            return false;
        });
        $(".bottom-caja1").click(function(){
            num = parseInt($("#caja1").html());
            if(num>0)
                $("#caja1").html(num-1);
            return false;
        });
        $(".bottom-caja2").click(function(){
            num = parseInt($("#caja2").html());
            if(num>0)
                $("#caja2").html(num-1);
            return false;
        });
      });
    </script>
</body>

</html>
