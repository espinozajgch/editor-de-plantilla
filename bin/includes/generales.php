<?php
	class Generales{

		/*clase que contiene todas las funciones relacionadas a las consultas de la informacion de la empresa*/

		function __construct(){

		}

		/**
		retorna 
		*/
		public static function obtener_titulo($bd){
			
			$consulta = "SELECT titulo FROM generales";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['titulo'];								
	            }
	            else{
	            	
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 


		/**
		retorna 
		*/
		public static function obtener_menu_bg($bd){
			
			$consulta = "SELECT menu_bg FROM generales";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['menu_bg'];								
	            }
	            else{
	            	
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 


		/**
		retorna 
		*/
		public static function obtener_logo_menu($bd){
			
			$consulta = "SELECT menu_logo FROM generales";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['menu_logo'];								
	            }
	            else{
	            	
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_TELEFONO


		/**
		retorna 
		*/
		public static function obtener_body_bg($bd){
			
			$consulta = "SELECT body_bg FROM generales";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['body_bg'];								
	            }
	            else{

	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 

		public static function obtener_footer_bg($bd){
			
			$consulta = "SELECT footer_bg FROM generales";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['footer_bg'];								
	            }
	            else{

	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 


		/**
		retorna 
		*/
		public static function obtener_titulo_activo($bd){
			
			$consulta = "SELECT titulo FROM generales WHERE activa = 1";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['titulo'];								
	            }
	            else{
	            	
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 


		/**
		retorna 
		*/
		public static function obtener_menu_bg_activo($bd){
			
			$consulta = "SELECT menu_bg FROM generales WHERE activa = 1";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['menu_bg'];								
	            }
	            else{
	            	
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 


		/**
		retorna 
		*/
		public static function obtener_logo_menu_activo($bd){
			
			$consulta = "SELECT menu_logo FROM generales WHERE activa = 1";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['menu_logo'];								
	            }
	            else{
	            	
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_TELEFONO


		/**
		retorna 
		*/
		public static function obtener_body_bg_activo($bd){
			
			$consulta = "SELECT body_bg FROM generales WHERE activa = 1";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['body_bg'];								
	            }
	            else{

	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 

		public static function obtener_footer_bg_activo($bd){
			
			$consulta = "SELECT footer_bg FROM generales WHERE activa = 1";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute();
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row['footer_bg'];								
	            }
	            else{

	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION 

		public static function agregar_configuracion($bd, $titulo, $menu_logo, $menu_bg, $body_bg, $footer_bg)
	    {
	        // Sentencia INSERT
	        $consulta = "INSERT INTO generales ( " .
	            " titulo," .
	            " menu_logo,".
	            " menu_bg," .
	            " body_bg," .
	            " footer_bg)" .
	            " VALUES(?,?,?,?,?)";

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($titulo, $menu_logo, $menu_bg, $body_bg, $footer_bg));

		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        } 	
	    }

	    public static function activar_configuracion($bd, $id_configuracion){
	        
	        // Sentencia INSERT
	        $consulta = "UPDATE generales SET" .
	        	" activa = 1 " .
	            " WHERE id_general = ?";
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($id_configuracion));
		        
		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
   		}	

	    public static function desactivar_configuracion($bd, $id_configuracion){
	        
	        // Sentencia INSERT
	        $consulta = "UPDATE generales SET" .
	        	" activa = 0 " .
	            " WHERE id_general = ?";
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($id_configuracion));
		        
		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
   		}	

   		public static function desactivar_configuraciones($bd){
	        
	        // Sentencia INSERT
	        $consulta = "UPDATE generales SET activa = 0 ";

	        try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($id_configuracion));
		        
		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
   		}	

		public static function editar_contacto($bd, $direccion, $telefono, $email, $emailp, $facebook, $twitter, $instagram, $telefonos, $emails, $emailsp, $telefonov, $emailv, $emailvp){
	        // Sentencia INSERT
	        $consulta = "UPDATE tblinfo SET" .
	        	" direccion = ?," .
	        	" telefono = ?," .
	        	" email = ?," .
	        	" emailp = ?," .
	        	" facebook = ?," .
	        	" twitter = ?," .
	            " instagram = ?," .
	            " telefonos = ?," .
	        	" emails = ?," .
	        	" emailsp = ?," .
	        	" telefonov = ?," .
	        	" emailv = ?," .
	        	" emailvp = ?" .
	            " WHERE idinfo = 1";
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($direccion, $telefono, $email, $emailp, $facebook, $twitter, $instagram, $telefonos, $emails, $emailsp, $telefonov, $emailv, $emailvp));
		        
		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    }	

		public static function eliminar_configuracion($bd, $id_configuracion)
	    {
	    	// Sentencia INSERT
	        $consulta = "DELETE FROM generales WHERE id_general = ". $id_configuracion;
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute();
		        

		        if($resultado){

			        return 1;       	
		        }

		        return 0;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    }


		public static function obtener_lista_configuraciones($bd){

				
				$consulta = "SELECT * FROM generales";

		        try {
		            $comando = $bd->prepare($consulta);
		    
		            $comando->execute();
		            $row = $comando->fetchAll(PDO::FETCH_ASSOC);
		    
		            
		            if($row){
		            	$codigo ="";
		                foreach ($row as $generales) {

	              			$codigo.='<tr">';
							//$codigo.='<td><img src="../img/servicios/'. $producto['strimagen'] .'" width="120" height="120" /></td>';
							$codigo.='<td>'. $generales['id_general'] .'</td>';
							$codigo.='<td class="center">'. $generales["titulo"] .'</td>';
							$codigo.='<td class="center">'. $generales["menu_logo"] .'</td>';
							$codigo.='<td class="center">'. $generales["menu_bg"] .'</td>';
							$codigo.='<td class="center">'. $generales["body_bg"] .'</td>';
							$codigo.='<td class="center">'. $generales["footer_bg"] .'</td>';
							$codigo.='<td class="center">';

							if($generales["activa"] == 1){
								$codigo.='<a title="Desactivar" style="cursor:pointer;" onclick="confirmar('. $generales["id_general"] .', '. $generales["activa"] .' );"><span class="glyphicon glyphicon-off" aria-hidden="true" style="color:green"></a>';
							}
							else{
								$codigo.='<a title="Activar" style="cursor:pointer;" onclick="confirmar('. $generales["id_general"] .', '. $generales["activa"] .' );"><span class="glyphicon glyphicon-off" aria-hidden="true" style="color:red"></a> ';
							}
							$codigo.='  <a title="Editar" style="cursor:pointer;" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>  ';

							$codigo.='   <a titile="Eliminar" style="cursor:pointer;" onclick="confirm_eliminar(' . $generales["id_general"] .', 1);"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red"><a/>';
							//$codigo.='<option value="../admin/productos_edit.php?recordId=<?php echo $row_Recordset1['idproducto']; ">EDITAR PRODUCTO</option>
							//$codigo.='<option onclick="javascript:return asegurar();" value="../admin/productos_delete.php?recordId=<?php echo $row_Recordset1['idproducto'];">

							$codigo.='</td>';
							$codigo.='</tr>';                     
		                 }
		                 return $codigo;
														
		            }
		    
		        } catch (Exception $e) {
		            echo $e;
		            return false;
		        }

		}//FIN FUNCION OBTENER_PRODUCTOS
   
}
?>