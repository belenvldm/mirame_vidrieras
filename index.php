<!DOCTYPE html>
<html lang="es">
<!-- 
/*..
* https://www.belulopezdelmonte.com.ar
* @Belu López del Monte
..*/ 
-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="content/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="content/css/mirame.css">
	<script type="text/javascript" src="content/js/jquery-3.1.1.min.js"></script>
	<meta name="description" content="mirame vidrieras interactivas - ">
	<title>mirame vidrieras interactivas - home</title>
</head>
<body>
	<div id="wrap">
		<canvas id="circle" width="1378" height="768"></canvas>
	</div>
	<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			</div>
			<div class="collapse navbar-collapse" id="menu">
		    	<ul class="nav navbar-nav">
		      		<li class="active"><a href="index.php">home</a></li>
		      		<li><a href="content/secciones/nosotros.php">nosotros</a></li>
		      		<li><a href="content/secciones/servicios.php">servicios</a></li>
		      		<li><a href="content/secciones/proyectos.php">proyectos</a></li>
		      		<li><a href="content/secciones/comencemos.php">comencemos!</a></li>
		      		<li><a href="content/secciones/novedades.php">lo ultimo</a></li>
		      		<li><a href="content/secciones/llamanos.php">llamanos</a></li>
		    	</ul>
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>
		    </div>
	  	</div>
	</nav>

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
				<a id="ver_mas" href="content/secciones/proyectos.php">ver mas</a>
			</div>
		</div>
	</div>
	<?php @require 'content/secciones/home.php'; ?>
	<footer id="footer" class="container-fluid">
		<div class="row">
			<div class="simplificado">
				<div class="col-sm-6 col-md-6 map">
					<h5>mapa del sitio</h5>
				</div>
				<div class="col-sm-6 col-md-6">
					<h5>recibi las ultimas novedades</h5>
				</div>
			</div>
		  	<div class="ampliado">
		        <div class="col-sm-12 col-md-7">
		        	<?php @require 'sitemap.html'; ?>
				</div>
				<div class="col-sm-12 col-md-5">
					<h3>sucribite</h3>
					<form>
						<div class="col-xs-3">
							<label class="sr-only" for="email">Usuario</label>
							<input type="email" class="form-control input-sm" id="email" placeholder="Usuario">
					    </div>
					    <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="content/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="content/js/mirame.js"></script>
	<script type="text/javascript" src="content/js/mouseCircle.js"></script>
</body>
</html>