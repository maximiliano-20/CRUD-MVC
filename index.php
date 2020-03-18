
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>


</body>

<?php 

session_start();
require_once 'controlador/ProductoControlador.php';
require_once 'bd/prametros.php';
require_once 'bd/conexion.php';
require_once 'utilidades/funciones.php';


if (isset($_GET['controlador'])) {
   
   	$nombre_controlador=$_GET['controlador'].'Controlador';

}else {

	echo "No Existe";
}


if (class_exists($nombre_controlador)) {
	

	$controlador = new $nombre_controlador();

if (isset($_GET['accion']) &&   method_exists($controlador, $_GET['accion'])) {
	
	$accion=$_GET['accion'];
	$controlador->$accion();

}else{

	echo "No Existe la Accion ".$_GET['accion'];

     }


  }else{


  	echo "No Existe El Controlador ";
  }







 ?>
 </html>