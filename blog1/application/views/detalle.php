<!doctype html>

<html lang="es">

	<head>
		<meta name="description" content="Blog en PHP" >
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<meta name="language" content="es" >
		<title><?php $titulo ?></title>
	</head>
		
	<body>
		<section>
			<h1 align="center">PHPblog</h1>
			<h2><?php echo $item->nombre_articulo ?></h2>
			<p><?php echo $item->contenido_articulo ?></p>
			<p><strong>Fecha de publicaci&oacute;n: <?php echo $item->fecha_articulo ?></strong></p>
			<hr>
		</section>
	</body>
	
</html>