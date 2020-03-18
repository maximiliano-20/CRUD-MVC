<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="<?=url?>css/bootstrap.css">

<body>

  <div class="container mt-4">
  	<h3 class="text-center">Lista de Productos</h3>
  	<a class="btn btn-info mb-3" href="<?=url?>producto/crear">Insertar Productos</a>
  	<?php if (isset($_SESSION['completado'])): ?>
  	<div class="alert alert-success text-center"><?=$_SESSION['completado']?></div>	
  	<?php endif ?>
	<table class="table table-bordered">	
		<th>Nombre de Producto</th>
		<th>Precio del Producto</th>
		<th>Unidades del Producto</th>
		<th>Acciones</th>

        <tr>
        	<?php while ($producto=$productos->fetch_object())  : ?>
        	<td><?=$producto->nombre?></td>
        	<td><?=$producto->precio?></td>
        	<td><?=$producto->unidades?></td>
        	<td>
        		<a class="btn btn-warning text-light" href="<?=url?>producto/editar&id=<?=$producto->id?>">Actualizar</a>
                <a class=" btn btn-danger text-light" href="<?=url?>producto/eliminar&id=<?=$producto->id?>">Eliminar</a>

        	</td>
        </tr>
	   <?php endwhile; ?>
	   <?php Funciones::borrar();  ?>
	</table>
  </div>
</body>
</html>