<?php 
    require_once('bin/conexion/connection.php');
     require_once('bin/includes/generales.php');
    $bd = connection::getInstance()->getDb();

   
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Generales::obtener_titulo_activo($bd);?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!--link href="css/landing-page.css" rel="stylesheet"-->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style type="text/css">
        
        .navbar-inverse {
            background-color: <?php echo Generales::obtener_menu_bg_activo($bd);?>;
            border-color: #080808;
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: <?php echo Generales::obtener_body_bg_activo($bd);?>;
        }

        footer{
            background-color: <?php echo Generales::obtener_footer_bg_activo($bd);?>;
        }
    </style>
</head>

<body>

	 <!-- Navigation -->
    <?php
        include("menu.php");
     ?>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/1900x1080.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/1900x1080.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/1900x1080.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

     <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="">
              <h2 class="titulos">19, 20 y 21 de septiembre de 2018</h2>
              <h3 class="titulos">Centro de Convenciones de la Conmebol. Luque, Paraguay</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    Bienvenidos
                </h1>
            </div>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-8">

                <div style="text-align: justify;"><p>Amigos y colaboradores:</p>

				<p>Los días 19, 20 y 21 de septiembre de 2018, la Bolsa de Valores y Productos de Asunción, tendrá el gran honor de ser anfitrión de la <strong>"45° Asamblea General y Reunión Anual de la Federación Iberoamericana de Bolsas FIAB 2018"</strong>, que tendrá lugar en el Centro de Convenciones de la Confederación Sudamericana de FútboI-CONMEBOL, en la ciudad de Luque de la República del Paraguay.</p>

				<p>Hemos desarrollado un programa de exposiciones basado en experiencias anteriores y en opiniones de experimentados ejecutivos de otras bolsas y especialistas del mundo bursátil. Estamos convencidos que será una excelente oportunidad para seguir beneficiándonos con el intercambio de experiencias y conocimientos.
				Para vuestra mejor comodidad, hemos optado por un hotel de excelentes referencias y ubicación en la ciudad de Luque, a escasos cinco minutos del Aeropuerto lnternacional "Silvio Pettirossi".</p>

				<p>La ciudad de Luque, lindante con la capital de la República, se caracteriza por la comercialización de objetos en plata. En su municipio podrán visitar el atractivo casco histórico, el Museo del Fútbol Sudamericano y un gran número de joyerías. La cercanía a la ciudad de Asunción les facilitará la posibilidad de visitar numerosas opciones de gastronomía, paseos, tiendas de compra, etc. Estos lugares, juntamente con la calidez del pueblo paraguayo, harán de vuestra estadía una experiencia magnífica.</p>

				<p>Los invitamos a participar de este encuentro internacional, con el objetivo de fomentar la cooperación, estrechar los lazos ya existentes y seguir potenciando estos encuentros. Paraguay los espera.</p>

				<p id="presidente"><strong>Rodrigo G. Callizo López Moreira</strong></strong></p>
				<p id="presidente" style="font-weight:400;text-transform:none;">Presidente Ejecutivo </p>
				<p>Bolsa de Valores y Productos de Asunción </p>
				</div>


            </div>
            <div class="col-md-2">
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">Miembros FIAB</h2>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_asuncion.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_baires.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_boliviana.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_caracas.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_colombia.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_dominicana.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_guayaquil.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-fiab img-hover" src="img/miembros/bolsa_asuncion.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row ">
            <div class="col-lg-12">
                <h2 class="page-header text-center">Patrocinadores</h2>
            </div>
            <div class="row testimonials text-center">
	          <div class="col-lg-4">
	            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
	              <img class="img-fluid rounded-circle mb-3" src="img/patrocinadores/testimonials-1.jpg" alt="">
	              
	            </div>
	          </div>
	          <div class="col-lg-4">
	            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
	              <img class="img-fluid rounded-circle mb-3" src="img/patrocinadores/testimonials-2.jpg" alt="">
	             
	            </div>
	          </div>
	          <div class="col-lg-4">
	            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
	              <img class="img-fluid rounded-circle mb-3" src="img/patrocinadores/testimonials-3.jpg" alt="">
	            </div>  
	          </div>


	          <div class="row ">
				<div class="col-md-4 text-center">
                 
            	</div>
            	<div class="col-md-4 text-center">
                    <a class="btn btn-lg btn-primary btn-block"  href="patrocinantes.php">Ver todos</a>
            	</div>

            	<div class="col-md-4 text-center">
                    
                </div>
            </div>
            </div>
	

			
        </div>
        <!-- /.row -->
    
    <!-- Footer -->
    <?php
        include("footer.php");
     ?>  
    </div>
    <!-- /.container -->

    
  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
