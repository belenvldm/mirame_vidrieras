<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../content/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../content/css/mirame.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<title>mirame vidrieras interactivas - admin</title>
</head>
<body>
	<div id="wrap">
		<canvas id="circle" width="1378" height="768"></canvas>
	</div>
	<div class="container">
		<div id="gral" class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div id="logo">
							<h1>
								<a href="index.php">
									<span>mirame</span>
								</a>
							</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div id="titulo">
							<h2>Vidrieras interactivas</h2>
						</div>
						<div id="desc">
							<p>Agencia dedicada a la creación, diseño e instalación de pantallas interactivas</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<form id="loguin" class="form-horizontal" action="codes/acceso.php" method="post">
					<div class="form-group">
						<label class="control-label sr-only" for="email">usuario</label>
				    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
							<input type="email" class="form-control input-sm" id="email" name="email" required placeholder="Usuario">
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="control-label sr-only" for="pass">password</label>
	      				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
	    					<input type="password" class="form-control input-sm" id="pass" name="pass" pattern=".{8}" title="8 caracteres" required placeholder="Enter password">
	    				</div>
				    </div>
				    <div class="form-group">
	      				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
		    				<button type="submit" class="btn btn-default">ingresar</button>
				    	</div>
				    </div>
				</form>
			</div>
		</div>
	</div>
	<?php @require '../content/secciones/home.php'; ?>
	<script type="text/javascript" src="../content/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../content/js/mouseCircle.js"></script>
</body>
</html>