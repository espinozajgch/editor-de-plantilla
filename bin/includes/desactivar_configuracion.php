<?php

    require_once('../conexion/connection.php');
    require_once('generales.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$bd = connection::getInstance()->getDb();

        $id = $_POST['id'];

        // Tratar retorno
        $retorno = Generales::desactivar_configuracion($bd, $id);
        
        if ($retorno) {
            $estado["estado"] = $retorno;
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