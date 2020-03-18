<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="<?=url?>css/bootstrap.css">

<body>
    <div class="container">
    <div class="col-md-9">
    <h3>Agregar un Producto</h3>    
	<form action="<?=url?>producto/agregar" method="POST">
    <div class="form-group">
    <label>Ingrese El Nombre</label>    
    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    <?php echo isset($_SESSION['errores']) ? Funciones::mostrar($_SESSION['errores'],'nombre') : '' ?>
   </div>
    <div class="form-group"> 
    <label>Precio</label>
    <input type="text" name="precio" class="form-control" placeholder="Precio">
    <?php echo isset($_SESSION['errores']) ? Funciones::mostrar($_SESSION['errores'],'precio') : ''?>
    </div>
    <div class="form-group">
    <label>Unidades del Producto</label>
    <input type="number" name="unidades" class="form-control" placeholder="Unidades">
    <?php echo isset($_SESSION['errores']) ? Funciones::mostrar($_SESSION['errores'],'unidades'): '' ?>
    </div>
    <input type="submit" name="" class="btn btn-info btn-block" value="Agregar">
	</form>
    <?php Funciones::borrar(); ?>
  </div>
</div>
</body>
</html>