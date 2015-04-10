
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marca</title>

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
        .btn{
            background: #cc3300;
            color: #fff;
            border: 0;
            border-radius: 0;
            padding: 10px 25px;
            font-size: 12px;
        }
        .caja{
             border: 3px solid #fff;
             width: 150px;
             height: 150px;
             color:#cc3300;
             font-size: 115px;
             font-weight:bold;
        }
        .menu{
            font-family: 'Montserrat', sans-serif;
            list-style: none;
            margin: 20px 0 0 -185px;
            padding: 0;
            position:relative;
            left:50%;
            width: 415px;
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
            border-bottom: 2px solid #cc3300
        }
        a .glyphicon{
            color:#fff;
            font-size: 30px;
        }
    </style>
    <style type="text/css">
      br { clear: both; }
      .cntSeparator {
        font-size: 54px;
        margin: 10px 7px;
        color: #fff;
      }
      .desc { margin: 7px 3px; }
      .desc div {
        float: left;
        font-family: Arial;
        width: 60px;
        margin-right: 0;
        font-size: 10px;
        font-weight: bold;
        color: #fff;
      }
    </style>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll">
    <div class="container" style="background:#cc3300;padding:10px 20px;position:relative">
        <div class="pull-left">
            <img src="/images/marca.png">
        </div>
        <div class="pull-right">
            <img src="/images/twitter.png">&nbsp;&nbsp;
            <img src="/images/fb.png">
        </div>
    </div>
    <div class="container" style="position:relative;text-align: center;">
            <ul class="menu">
                <li><a class="page-scroll" href="#about">HOME</a>
                <li><a class="page-scroll" href="#porra">PORRA</a>
                <li style="border-right:none;"><a class="page-scroll" href="#porra">RESULTADOS</a>
            </ul>
    </div>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="/images/lettering-porra.png" width="60%"><br>
                    <a class="btn btn-default page-scroll" href="#porra">QUIERO JUGAR</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="porra" class="porra-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-2">
                    <img src="/images/real_madrid.png" width="137">
                </div>
                <div class="col-md-4"><br><br><br><br><br>
                Jornada<br><h3>- 00/00/2015 -</h3>
                </div>
                <div class="col-md-2">
                    <img src="/images/atletico.png" style="margin-left:-30px">
                </div>
            </div>
            <div class="row" style="margin-top:20px">
                <div class="col-md-2 col-md-offset-2">
                    <a href="#"><span class="glyphicon glyphicon-triangle-top top-caja1"></span></a>
                    <div class="caja" id="caja1"><span class="numerocaja1">0</span></div>
                    <a href="#"><span class="glyphicon glyphicon-triangle-bottom bottom-caja1"></span></a>
                </div>
                <div class="col-md-4">
                    <div class="led"></div>
                      <div class="desc">
                        <div>&nbsp;</div>
                        <div>Días</div>
                        <div>Horas</div>
                        <div>Minutos</div>
                        <div>Segundos</div>
                      </div> 
                      <br>
                    <img src="/images/vs.png"><br><br>
                </div>
                <div class="col-md-2">
                    <a href="#"><span class="glyphicon glyphicon-triangle-top top-caja2"></span></a>
                    <div class="caja" id="caja2"><span class="numerocaja2">0</span></div>
                    <a href="#"><span class="glyphicon glyphicon-triangle-bottom bottom-caja2"></span></a>
                </div>
            </div>
            <div class="row"><br><br>
                <form id="miporra" method="post" action="/login">
                    <input type="hidden" name="equipo1" id="equipo1">
                    <input type="hidden" name="equipo2" id="equipo2">
                    <a class="btn btn-default enviar" href="#">VALIDAR PORRA</a> 
                </form>   
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/jquery.classyled.min.js"></script>
    <script type="text/javascript">
   
      $(function(){
        // $('#counter').countdown({
        //   image: 'images/digits.png',
        //   startTime: '{{difference}}'
        // });
       $('.led').ClassyLED({
            type: 'countdown',
            format: 'dd:hh:mm:ss',
            color: '#eee',
            backgroundColor: '#000',
            size: 3,
            countTo: "2015:04:25"
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
