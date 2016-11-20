<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<title>mirame vidrieras interactivas - dashboard</title>
</head>
<body>
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div id="gral" class="row gralAdmin">
			<div class="page-header">
				<h3>hola belu</h3>
			</div>			
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="opcionesAd">
					<h4>proyectos a mostrar</h4>
					<ul>
						<li><a id="" href="cargar_proyectos.php">cargar</a></li>
	                    <li><a id="" href="mb_proyectos.php">ver proyectos</a></li>
	                </ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="opcionesAd">
					<h4>consultas</h4>
					<ul>
						<li><a id="" href="consultas.php?est=pendiente">pendientes</a></li>
	                    <li><a id="" href="consultas.php?est=finalizada">finalizadas</a></li>
	                </ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="opcionesAd">
					<h4>secciones</h4>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<ul>
			                    <li><a id="" href="home.php">home</a></li>
			                    <li><a id="" href="contenidos.php">nosotros</a></li>
			                    <li><a id="" href="">servicios</a></li>
			                </ul>
			            </div>
			            <div class="col-xs-12 col-sm-6 col-md-6">
							<ul>
			                    <li><a id="" href="">lo ultimo</a></li>
			                    <li><a id="" href="comencemos.php">comencemos!</a></li>
			                    <li><a id="" href="">hablemos</a></li>
			                </ul>
			            </div>
			        </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="opcionesAd">
					<h4>mas</h4>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<h5>web</h5>
							<ul>
								<li><a id="" href="">terminos</a></li>
			                </ul>
			            </div>
						<div class="col-xs-12 col-sm-6 col-md-6">
			                <h5>app</h5>
							<ul>
								<li><a id="" href="">enviar recordatorios</a></li>
			                </ul>
			            </div>
			        </div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../../content/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>