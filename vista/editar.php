<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="<?=url?>css/bootstrap.css">

<body>

    <div class="container">
    <div class="col-md-9">
	<h3>Modificar Productos</h3>
	<form action="<?=url?>producto/actualizar" method="POST">
	<input type="hidden" name="id"  value="<?=$productos->id?>">
	<div class="form-group">
	<label>Nombre del Producto</label>
	<input type="text" name="nombre" class="form-control" value="<?=$productos->nombre?>">
    </div>
    <div class="form-group">
	<label>Precio del Producto</label>
	<input type="text" name="precio" class="form-control" value="<?=$productos->precio?>">
    </div>
    <div class="form-group">
	<label>Unidades</label>
	<input type="number" name="unidades" class="form-control" value="<?=$productos->unidades?>">
    </div>
	<input class="btn btn-info btn-block" type="submit" name="" value="Actualizar">
	</div>
	</div>	
	</form>
</body>
</html>