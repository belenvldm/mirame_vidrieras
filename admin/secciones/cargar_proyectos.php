<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<title>mirame vidrieras interactivas - cargar proyectos</title>
</head>
<body>
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div id="gral" class="row gralAdmin">
			<div class="page-header">
				<h3>cargar proyecto</h3>
			</div>
			<form class="form-horizontal" action="../codes/carga_proy_db.php" method="post">
				<div class="form-group">
					<p class="form-control-static col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">version en español</p>
			    </div>
				<div class="form-group">
					<label class="control-label sr-only" for="tituloProyecto">titulo del proyecto</label>
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
						<input type="text" class="form-control input-sm" id="tituloProyecto" name="tituloProyecto" maxlength="200" title="Se necesita un titulo para el proyecto" required placeholder="titulo del proyecto">
			    	</div>
			    </div>
			    <div class="form-group">
					<label class="sr-only" for="cuerpoProyecto">texto del proyecto</label>
			    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
						<textarea class="form-control input-sm" id="cuerpoProyecto" name="cuerpoProyecto" maxlength="420" required placeholder="texto del proyecto"></textarea>
			    	</div>
			    </div>
			    <div class="form-group">
					<label class="control-label sr-only" for="vidProject">video del proyecto</label>
			    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
						<input type="vidProject" class="form-control input-sm" id="vidProject" name="vidProject" pattern="https?://.+" title="url absoluta para incorporar el video ('https://www.youtube.com/embed/QTYDhnT-W9E')" maxlength="300" required placeholder="video del proyecto">
			    	</div>
			    </div>
			    <div class="form-group">
					<p class="form-control-static col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">version en ingles</p>
			    </div>
				<div class="form-group">
					<label class="control-label sr-only" for="titleProject">title of the project</label>
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
						<input type="text" class="form-control input-sm" id="titleProject" name="titleProject" maxlength="200" title="Se necesita un titulo para el proyecto" required placeholder="title of the project">
			    	</div>
			    </div>
			    <div class="form-group">
					<label class="sr-only" for="bodyProject">text of the project</label>
			    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
						<textarea class="form-control input-sm" id="bodyProject" name="bodyProject" maxlength="420" required placeholder="text of the project"></textarea>
			    	</div>
			    </div>
			    <div class="form-group">
      				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
	    				<button type="submit" class="btn btn-default next">cargar</button>
			    	</div>
			    </div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../../content/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>