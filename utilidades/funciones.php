<?php 


Class Funciones{

  

  public static function mostrar($errores,$campo){

  	$alerta='';

  	if (!empty($errores[$campo]) &&  isset($campo)) {
  		
  		$alerta='<pre class="text-danger">'.$errores[$campo].'</pre>';
  	}


  	return $alerta;



  }




public static function borrar(){


	$borrado=false;

	if (isset($_SESSION['completado'])) {
		
		$_SESSION['completado']=null;

		$borrado=true;
	}


	$borrado=false;

	if (isset($_SESSION['errores'])) {
		
		$_SESSION['errores']=null;

		$borrado=true;
	}

   }


}

 ?>