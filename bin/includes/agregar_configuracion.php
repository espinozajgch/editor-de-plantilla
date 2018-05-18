<?php

    require_once('../conexion/connection.php');
    require_once('generales.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$bd = connection::getInstance()->getDb();

        $titulo = $_POST['titulo'];
        $menu_logo = $_POST['menu_logo'];
        $menu_bg = $_POST['menu_bg'];
        $body_bg = $_POST['body_bg'];
        $footer_bg = $_POST['footer_bg'];

        // Tratar retorno
        $retorno = Generales::agregar_configuracion($bd, $titulo, $menu_logo, $menu_bg, $body_bg, $footer_bg);
        
        if ($retorno) {
            $estado["estado"] = 1;
            $estado["mensaje"] = "Configuracion Guardada";
            // Enviar objeto json de la meta
           echo json_encode($estado);
           // echo "1";
        } else {
            // Enviar respuesta de error general
            echo json_encode(
                array(
                    'estado' => '0',
                    'mensaje' => 'Su configuracion no fue guardada, intenta nuevamente'
                ));
            //echo "0";
        }/**/
}
?>