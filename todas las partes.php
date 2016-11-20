<!-- 
/*..
* https://www.belulopezdelmonte.com.ar
* @Belu López del Monte
..*/ 
-->
<!-- < ?php
	if(isset($_GET["changelang"]:
		$_SESSION["lang"] = $_GET["changelang"];
	} else if (!isset($_SESSION["lang"])) {
		$_SESSION["lang"] = "es";
	}
?> -->
<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require 'content/head.php'; ?>
	<meta name="description" content="Mirame vidrieras interactivas - ">
	<title>mirame vidrieras interactivas - </title>
</head>
<body>
	<?php @require 'content/nav.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		  	<div class="col-sm-12 col-md-6">
		  		<div class="row">
		  			<div class="col-sm-6 col-md-4">
				    	<a href="content/bin/img/2.jpg" class="thumbnail">
				      		<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p> 
				      		<img src="content/bin/img/2.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
				    	</a>
				    </div>
		  			<div class="col-sm-6 col-md-4">
				    	<a href="content/bin/img/3.jpg" class="thumbnail">
				      		<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p> 
				      		<img src="content/bin/img/3.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
				    	</a>
				    </div>
		  			<div class="col-sm-6 col-md-4">
				    	<a href="content/bin/img/5.jpg" class="thumbnail">
				      		<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p> 
				      		<img src="content/bin/img/5.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
				    	</a>
				    </div>
		  			<div class="col-sm-6 col-md-4">
				    	<a href="content/bin/img/9.jpg" class="thumbnail">
				      		<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p> 
				      		<img src="content/bin/img/9.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
				    	</a>
				  	</div>
				</div>
				<img src="content/bin/img/2.jpg" class="img-responsive" alt="Cinque Terre">
		  	</div>
		</div>

		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Header</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		  	<!-- titulos 
		  	<div class="page-header">
		  		<h1>Nosotros</h1>
			</div> -->
			<!-- prev/next projects
			<ul class="pager">
			  	<li><a href="#">Previous</a></li>
			  	<li><a href="#">Next</a></li>
			</ul> -->
		  	<!-- video responsive
		  	<div class="embed-responsive embed-responsive-16by9">
		  		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
			</div> -->
			<!-- FORM GUIA 
			<form>
				<div class="form-group">
					<p class="form-control-static">Pregunta</p>
			    </div>
				<div class="form-group">
	    			<label class="radio-inline">
	      				<input type="radio" name="optradio">Option 1
	    			</label>
	    			<label class="radio-inline">
	      				<input type="radio" name="optradio">Option 2
	    			</label>
	    			<label class="radio-inline">
	      				<input type="radio" name="optradio">Option 3
	    			</label>
	    		</div>
	    		<button type="button" class="btn btn-default">Siguiente</button>
    			<button type="submit" class="btn btn-default">Submit</button>
  			</form> -->



			<!-- FORM ADMIN 
			<form>
				<div class="col-xs-3">
					<label class="sr-only" for="email">Usuario</label>
					<input type="email" class="form-control input-sm" id="email" placeholder="Usuario">
			    </div>
			    <div class="col-xs-3">
			    	<label class="sr-only" for="pwd">Password:</label>
    				<input type="password" class="form-control input-sm" id="pwd" name="" pattern=".{6,8}" placeholder="Enter password">
			    </div>
			    <button type="submit" class="btn btn-default">Submit</button>
			</form> -->
	</div>
	<?php @require 'content/footer.php'; ?>
	<?php @require 'content/js/scripts.php'; ?>
</body>
</html>