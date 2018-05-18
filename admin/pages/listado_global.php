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
    <link href="../dist/html5imageupload/html5imageupload.css" rel="stylesheet">

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
                        <strong>Lista de Configuraciones</strong>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Logo Menu</th>
                            <th>Menu BG</th>
                            <th>Cuerpo BG</th>
                            <th>Footer BG</th>
                            <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php echo Generales::obtener_lista_configuraciones($bd);?>
                            
                            </tbody>
                            </table>
                 
                        <!-- /.table-responsive -->

                        </div>
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

    <div id="activar" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p><strong>Esta seguro de activar la configuracion actual </strong></p>
            
          </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default" id="confirm_activar">Aceptar</button>
          <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
          </div>
        </div>
      </div>  
    </div>

    <div id="desactivar" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p><strong>Esta seguro de desctivar la configuracion actual </strong></p>
            
          </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default" id="confirm_desactivar">Aceptar</button>
          <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
          </div>
        </div>
      </div>  
    </div>

    <div id="eliminar" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p><strong>Esta seguro de desctivar la configuracion actual </strong></p>
            
          </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default" id="confirm_deliminar">Aceptar</button>
          <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
          </div>
        </div>
      </div>  
    </div>

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

        function confirmar(id, status){
            console.log(status);
           
            if(status == 0){
                $('#activar').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                .one('click', '#confirm_activar', function(e) {
                    activar(id);
                });
            }
            else{
                $('#desactivar').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                .one('click', '#confirm_desactivar', function(e) {
                    desactivar(id);
                });    
            }  
        }

        function activar(id){
            $.ajax({
                data:  {id:id},
                url:   '../../bin/includes/activar_configuracion.php',
                type:  'post',
                success:  function (data) {
                    console.log(data);
                    window.location.href="listado_global.php";
                },
                error: function(data){
                    console.log(data);
                }
            });/**/

        }

        function desactivar(id){
            $.ajax({
                data:  {id:id},
                url:   '../../bin/includes/desactivar_configuracion.php',
                type:  'post',
                success:  function (data) {
                    console.log(data);
                    window.location.href="listado_global.php";
                },
                error: function(data){
                    console.log(data);
                }
            });/**/

        }

        function confirm_eliminar(id){
            console.log(id);

                $('#eliminar').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                .one('click', '#confirm_deliminar', function(e) {
                    eliminar(id);
                });
            
        }

        function eliminar(id){
            $.ajax({
                data:  {id:id},
                url:   '../../bin/includes/eliminar_configuracion.php',
                type:  'post',
                success:  function (data) {
                    console.log(data);
                    window.location.href="listado_global.php";
                },
                error: function(data){
                    console.log(data);
                }
            });/**/

        }


    </script>
</body>

</html>
