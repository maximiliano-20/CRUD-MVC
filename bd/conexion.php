<?php 


/**
 * 
 */
class Conectar
{
	public static function Conexion(){

		$conexion = new  mysqli("Localhost","root","","mvc");


		return $conexion;
		
	}
	
}





 ?>