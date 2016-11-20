<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<meta name="description" content="mirame vidrieras interactivas - nuestros objetivos, que hacemos y quienes somos">
	<title>mirame vidrieras interactivas - nosotros</title>
	<style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      		width: 70%;
      		margin: auto;
  		}
  	</style>
</head>
<body id="secciones">	
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div class="row" id="gral">
			<div class="col-sm-12 col-md-5">
				<section class="page-header">
					<h1>Nosotros</h1>
				</section>

				<section class="bodySection">
					<p>Quienes somos, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					nuestro objetivos, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					mision, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					vision, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<p>nos esforzamos para lograr los mejores bla blabla blabla blabla blabla blabla blabla blabla bla y por eso nuestro <a id="equipo" href="staff.php">equipo</a> se prepara dia a dia</p>
				</section>
			</div>
			<div class="col-sm-12 col-md-7 gallerySection">
				<div id="galeriaCar" class="carousel slide" data-ride="carousel">  
				  	<!-- <ol class="carousel-indicators">
				    	<li data-target="#galeriaCar" data-slide-to="0" class="active"></li>
				      	<li data-target="#galeriaCar" data-slide-to="1"></li>
				    </ol> -->
				    <div class="carousel-inner" role="listbox">
				    	<div class="item active">
				        	<img src="../bin/img/2.jpg" alt="Chania">
				      	</div>

				      	<div class="item">
				        	<img src="../bin/img/3.jpg" alt="Chania">
				      	</div>  
				    </div>

				    <a class="imgPrev" href="#galeriaCar" role="button" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="imgNext" href="#galeriaCar" role="button" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				</div>
			</div>
		</div>
	</div>
	<?php @require '../footer.php'; ?>
	<?php @require '../js/scripts.php'; ?>
</body>
</html>