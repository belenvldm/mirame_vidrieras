<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<title>mirame vidrieras interactivas - ver contenidos</title>
</head>
<body>
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div id="gral" class="row gralAdmin">
			<?php @require '../codes/ver_contenidos.php'; ?>
			
			<div class="page-header">
				<h3>seccion <?php echo $nombre ?></h3>
			</div>
			<div class="row verContent">
				<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="page-header tituloSeccionHome">titulo seccion</p>
						<p><?php echo $titulo; ?></p>
			    	</div>
			    	<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="page-header tituloSeccionHome">title seccion</p>
						<p><?php echo $title; ?></p>
			    	</div>
			    </div>
			    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="page-header tituloSeccionHome">contenido seccion</p>
						<p><?php echo $texto; ?></p>
			    	</div>
			    	<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="page-header tituloSeccionHome">content seccion</p>
						<p><?php echo $txt; ?></p>
			    	</div>
			    </div>
			    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="page-header tituloSeccionHome">galeria en la seccion</p>
						<p><?php echo $galeria; ?></p>
			    	</div>
			    </div>
			    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 linkMod">
				    <?php 
				    	if ($estado == "no") {
							echo '<a href="../codes/publicar_contenido.php?mod='.$id.'" class="btn btn-success btn-md">publicar</a>';
						} else {
							echo '<a href="../codes/publicar_contenido.php?mod='.$id.'" class="btn btn-success btn-md">despublicar</a>';
						}
				    ?>
					<a href="../codes/modificar_contenido.php?cont=<?php echo $id; ?>" class="btn btn-primary btn-md">modificar</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../../content/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>