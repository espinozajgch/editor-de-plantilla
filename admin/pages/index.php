<?php 
    require_once('../../bin/conexion/connection.php');
    require_once('../../bin/includes/generales.php');
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

    <title>FIAB DASHBOARD</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="../dist/html5imageupload/demo.html5imageupload.css" rel="stylesheet">

    <!-- Morris Charts CSS >
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet"-->

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

    <div id="wrapper">

    <!-- Navigation -->
    <?php
        include("menu.php");
     ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
            </div>
            <!-- /.row -->
            <div class="row">

                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Configuracion Global</strong>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
    

                            <form id="guardar_conf">
                            <div class="col-md-7 col-sm-8 col-xs-12">
                            <h3>Titulo</h3>
                                <div class="form-group">
                                
                                    <label for="titulo">Ingrese el titulo de la pagina</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" value="" tabindex="5">
                                </div>
                               
                            </div>
    
                            <div class="col-md-7 col-sm-8 col-xs-12">
                            <hr>
                                <h3>Header (Menu)</h3>
                                <label for="titulo">Logo (Tamaño 200 x 70 px)</label>
                                <div class="form-group">
                                
                                    <div id="retrievingfilename" class="html5imageupload" data-width="288" data-height="100" data-originalsize="false"  data-ghost="false" data-url="../../bin/includes/canvas.php"  >
                                    <input type="file" name="thumb" />
                                    </div>
                                     
                                    <input type="hidden" id="strimagen" name="strimagen"  value="">
                                </div>
                                

                                <div class="form-group">
                                
                                    <label for="titulo">Background</label>
                                    
                                    <div id="cp1" class="input-group colorpicker-component" title="Using input value">
                                      <input id="menu_bg" name="menu_bg" type="text" class="form-control" value="#fff"/>
                                      <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-7 col-sm-8 col-xs-12">
                             <hr>
                                <h3>Cuerpo</h3>
                                <div class="form-group">
                                
                                    <label for="titulo">Background</label>
                                    
                                    <div id="cp2" class="input-group colorpicker-component" title="Using input value">
                                      <input id="body_bg" name="body_bg" type="text" class="form-control" value="#fff"/>
                                      <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-7 col-sm-8 col-xs-12">
                            <hr>
                                <h3>Footer (Pie de Pagina)</h3>
                                <div class="form-group">
                                
                                    <label for="titulo">Background</label>
                                    
                                    <div id="cp3" class="input-group colorpicker-component" title="Using input value">
                                      <input id="footer_bg" name="footer_bg" type="text" class="form-control" value="#fff"/>
                                      <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                            <hr>
                                 <button type="button" id="btnguardar" class="btn btn-info btn-cons">Guardar</button>
                            </div>

                            </form>
    
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                    <!-- /.panel -->

                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript >
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../dist/colorpicker/bootstrap-colorpicker.min.js"></script>    
    <script src="../dist/html5imageupload/html5imageupload.js"></script>   

    
    <script>
        $(function () {
            $('#cp1').colorpicker();
        });

        $(function () {
            $('#cp2').colorpicker();
        });

        $(function () {
            $('#cp3').colorpicker();
        });


        $('.html5imageupload').html5imageupload();

        $("#btnguardar").click(function(e){
            e.preventDefault();
            console.log("prueba" + $("img").attr("name"))

            titulo = $("#titulo").val();
            menu_logo = $("img").attr("name");
            menu_bg = $("#menu_bg").val();
            body_bg = $("#body_bg").val();
            footer_bg = $("#footer_bg").val();

            //$("#guardar_conf").serialize()

            $.ajax({
                data:  {titulo : titulo, menu_logo : menu_logo, menu_bg : menu_bg, body_bg : body_bg, footer_bg : footer_bg},
                url:   '../../bin/includes/agregar_configuracion.php',
                type:  'post',
                success:  function (data) {
                    console.log(data);
                    //window.location.href="listado_global.php";
                },
                error: function(data){
                    console.log(data);
                }
            });/**/
        });

        

    </script>
</body>

</html>
