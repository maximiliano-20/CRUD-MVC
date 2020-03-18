<?php



require_once 'modelo/producto.php';
/**
  * 
  */
 class ProductoControlador
 {

 	public function Mostrar(){


        $producto = new Productos();

        $productos = $producto->Listar();       
 		require_once 'vista/mostrar.php';
 	}



 	public function Crear(){

 		require_once 'vista/crear.php';
 	}




 	public function Agregar(){


 		if (isset($_POST)) {
 	    
 	    $nombre=isset($_POST['nombre']) ? $_POST['nombre']:false;
 		$precio=isset($_POST['precio']) ? $_POST['precio']:false;
 		$unidades=isset($_POST['unidades']) ? $_POST['unidades']:false;


 		$errores=array();


 		if (!empty($nombre)) {
 			# code...
 		}else{

 			$errores['nombre']='El Campo Nombre Esta Vacio';
 		}



 		if (!empty($precio)) {
 			# code...
 		}else{

 			$errores['precio']='El Campo Precio No Esta Disponible';
 		}



 		if (!empty($unidades)) {
 			# code...
 		}else{

 			$errores['unidades']='El Campo Unidades Esta Vacio';
 		}


         if (count($errores)==0) {
        
 		$productos=$producto = new Productos();
 		$productos=$producto->setNombre($_POST['nombre']);
 		$productos=$producto->setPrecio($_POST['precio']);
 		$productos=$producto->setUnidades($_POST['unidades']);
 		$productos=$producto->Insertar();



 		if ($productos) {
 			
 			$_SESSION['completado']='Se Ha Agregado El Producto';
 			 		header('Location:'.url.'producto/mostrar');



 		}else{


 			$_SESSION['error-general']='Fallo';
 			 		header('Location:'.url.'producto/crear');

 		}


         }else{


         	$_SESSION['errores']=$errores;
         	 header('Location:'.url.'producto/crear');

         }


 		

      }




 	}




 	public function Editar(){

 		$producto = new Productos();
 		$productos=$producto->setId($_GET['id']);
 		$productos=$producto->Edicion();


 		require_once 'vista/editar.php';


 	}



 	public function Actualizar(){

 		$productos=$producto = new Productos();
 		$productos=$producto->setId($_POST['id']);
 		$productos=$producto->setNombre($_POST['nombre']);
 		$productos=$producto->setPrecio($_POST['precio']);
 		$productos=$producto->setUnidades($_POST['unidades']);
 		$productos=$producto->Modificar();



 		if ($productos) {

 		$_SESSION['completado']="Se Ha Modificado El Producto";
 		 		header('Location:'.url.'producto/mostrar');


 			
 		}else{

           $_SESSION['error-general']="No Se Modifico El Producto";
            	header('Location:'.url.'producto/editar');


 		}







 	}





 	public function eliminar(){

 			

 		

 		$producto = new Productos();
 		$productos=$producto->setId($_GET['id']);
 		$productos=$producto->Borrar();



 		if ($productos) {
 			
 			$_SESSION['completado']="Se Ha Eliminado El Producto";
 			 		 header('Location:'.url.'producto/mostrar');


 		}else{

 			$_SESSION['error-general']="No Se Elimino El Producto";
 			 	header('Location:'.url.'producto/mostrar');

 		}
             
             





 	}
 	
 	
 } 














 ?>