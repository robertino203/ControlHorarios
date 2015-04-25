<!doctype html>

<html lang="es">

	<head>
		<meta name="description" content="Blog en PHP" >
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<meta name="language" content="es" >
		<title><?php $titulo ?></title>
	</head>
		
	<body>
		<h1 align="center">PHPblog</h1>
		<?php 
			foreach($articulos as $item):
				$url = 'articulo/' . $item->id_articulos . '/'; 
				$url .= $item->nombre_articulo;
		?>
		<h2>
		<?php 
			echo anchor($url, $item->nombre_articulo); 
		?>
		</h2>
		<p><strong>Fecha de publicaci&oacute;n: <?php echo $item->fecha_articulo ?></strong></p>
		<p><?php echo $item->contenido_articulo ?></p>
		<hr>
		<?php 
			endforeach;
		?>
	</body>
	
</html>
