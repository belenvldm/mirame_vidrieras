<!-- < ?php
	$resultado['logo'] = "http://localhost/develop/mirame_final/content/bin/img/logo-mirame.png";
?>
<script>
	$logo = "< ?php echo $resultado['logo']; ?>";
	$(document).ready(function() {
		$("#logo").css('background-image', 'url('+ $logo +')');
	});
</script> -->

<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<title>mirame vidrieras interactivas - ver home</title>
</head>
<body>
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div id="gral" class="row gralAdmin">
			<div class="page-header">
				<h3>home</h3>
			</div>
			<?php @require '../codes/ver_home.php'; ?>
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<div class="row verHome">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">logo</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="logoImg" id="logoImg">
								<img class="img-responsive" src="<?php echo $logo; ?>">
							</div>
				    	</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">titulo logo</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p><?php echo $tituloLogo; ?></p>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">title logo</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p><?php echo $titleLogo; ?></p>
				    	</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 linkMod">
						<a href="../codes/modificar_proyecto.php?logo=<?php echo $id; ?>" class="btn btn-primary btn-md">modificar</a>
					</div>
				</div>
				<div class="row verHome">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">titulo home</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p><?php echo $titulo; ?></p>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">title home</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p><?php echo $title; ?></p>
				    	</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0">
				    	<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">descripcion home</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p><?php echo $desc; ?></p>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-12">
							<p class="page-header tituloSeccionHome">description home</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p><?php echo $description; ?></p>
				    	</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 linkMod">
						<a href="../codes/modificar_home.php?texto=<?php echo $id; ?>" class="btn btn-primary btn-md">modificar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../../content/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>