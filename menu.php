 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/<?php echo Generales::obtener_logo_menu_activo($bd);?>" class="imgLogo"></a>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="organizadores.php">Organizadores</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programa<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="programa.php">Programa de la Reunion</a>
                            </li>
                            <li>
                                <a href="#">Programa para Acompañantes</a>
                            </li>
                            <li>
                                <a href="#">Programa Post Evento</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informacion General<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Ciudad Sede</a>
                            </li>
                            <li>
                                <a href="patrocinantes.php">Patrocinantes</a>
                            </li>
                            <li>
                                <a href="#">Alojamiento</a>
                            </li>
                            <li>
                                <a href="#">Transporte</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="contacto.php">Contactos</a>
                    </li>
                     <li>
                        <a href="#">Inscripciones</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>