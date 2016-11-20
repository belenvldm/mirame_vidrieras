<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<meta name="description" content="mirame vidrieras interactivas - proyectos realizados de manera personalizada para nuestros clientes">
	<title>mirame vidrieras interactivas - proyectos</title>
</head>
<body id="secciones">	
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div class="row" id="gral">
			<div class="titleCentral">
			  <h1>nike</h1>
			</div>
			<div class="col-sm-12 col-md-6 videoInfo">
				<div id="posterVideo">
					<a id="linkVideo" href="#">
						<img class="img-responsive" src="../bin/img/2.jpg">
  						<span class="glyphicon glyphicon-play"></span>
					</a>
				</div>
				<div id="videoProject" class="embed-responsive embed-responsive-16by9">
					<iframe id="video" class="embed-responsive-item" src="https://www.youtube.com/embed/xFgvNMN2DiQ?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<p>420 caracteres</p>
			</div>
			<div class="col-sm-12 col-md-6 galeriaProject">
				<div class="row galeria">
		  			<div class="col-sm-6 col-md-6">
				    	<a class="linkImg" data-toggle="modal" href="#myModal">
				      		<img src="../bin/img/2.jpg" class="img-responsive" alt="Cinque Terre">
				    	</a>
				    </div>
				    <div id="myModal" class="modal fade" role="dialog">
  						<div class="modal-dialog">
    						<div class="modal-content">
    							<div class="modal-header">
		        					<button type="button" class="close" data-dismiss="modal">&times;</button>
		        				</div>
						      	<div class="modal-body">
						        	<img src="../bin/img/3.jpg" class="img-responsive" alt="Cinque Terre">
						      	</div>
						      	<div class="modal-footer">
						      		<p>120 caracteres</p>
      							</div>
    						</div>
    					</div>
    				</div>
				</div>
			</div>
			<!-- <div id="paginador">
				<a id="prev" href="index.php?project=< ?php echo $codPrev; ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
				<a id="next" href="index.php?project=< ?php echo $codNext; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div> -->
				<!-- <h1>< ?php echo $title; ?></h1>
				<p>< ?php echo $desc; ?></p> -->
		        <!-- <p>< ?php echo $body; ?></p>
		        <img src="< ?php echo $img; ?>" alt="" title="" id=""> -->
		</div>
	</div>
	<?php @require '../footer.php'; ?>
	<?php @require '../js/scripts.php'; ?>
</body>
</html>