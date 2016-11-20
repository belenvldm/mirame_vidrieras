<!DOCTYPE html>
<html lang="es">
<head>
	<?php @require '../head.php'; ?>
	<meta name="description" content="mirame vidrieras interactivas - guia para comenzar el proyecto deseado, personalizacion de la ubicacion, las dimensiones, interaccion y objetivo de la vidriera interactiva">
	<title>mirame vidrieras interactivas - comencemos!</title>
</head>
<body id="secciones">
	<?php @require '../nav.php'; ?>
	<div class="container">
		<div class="row" id="gral">
			<div id="guia">
				<form id="creaUsuario" class="form-horizontal">
					<div class="form-group">
						<label class="control-label sr-only" for="name">nombre</label>
						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
							<input type="text" class="form-control input-sm" id="name" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ']{3,60}" title="Se necesita un nombre" required placeholder="nombre">
				    	</div>
				    </div>
				    <div class="form-group">
						<label class="sr-only" for="ape">apellido</label>
				    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
							<input type="text" class="form-control input-sm" id="ape" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ']{3,60}" title="Se necesita un apellido" required placeholder="apellido">
				    	</div>
				    </div>
				    <div class="form-group">
						<label class="sr-only" for="comp">empresa</label>
				    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
							<input type="text" class="form-control input-sm" id="comp" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ']{3,60}" title="Se necesita un apellido" required placeholder="empresa">
				    	</div>
				    </div>
				    <div class="form-group">
						<label class="control-label sr-only" for="email">mail</label>
				    	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
							<input type="email" class="form-control input-sm" id="email" required placeholder="mail">
				    	</div>
				    </div>
				    <div class="form-group">
	      				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
		    				<button type="button" class="btn btn-default next">Siguiente</button>
				    	</div>
				    </div>
				</form>

				<div class="rsta"></div>

				<form id="preguntas" class="form-horizontal">
					<div class="form-group">
						<p class="form-control-static col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">Pregunta</p>
				    </div>				    
					<div class="form-group">
		    			<label class="radio-inline">
		      				<input type="radio" name="ubi" value="1">Option 1
		    			</label>
		    			<label class="radio-inline">
		      				<input type="radio" name="ubi" value="2">Option 2
		    			</label>
		    			<label class="radio-inline">
		      				<input type="radio" name="ubi" value="3">Option 3
		    			</label>
		    		</div>
		    		<div class="form-group">
	      				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
		    				<button type="button" class="btn btn-default next">Siguiente</button>			    		
				    	</div>
				    </div>
	  			</form>

	  			<?php
	  				$idForm = "preguntas2";
	  				$name = "loc";
	  				$radio1 = "W";
	  				$radio2 = "5";
	  				$radio3 = ")";
	  			?>

	  			<form id="<?php echo $idForm; ?>" class="form-horizontal">
					<div class="form-group">
						<p class="form-control-static col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">Pregunta 2</p>
				    </div>				    
					<div class="form-group">
		    			<label class="radio-inline">
		      				<input type="radio" name="<?php echo $name; ?>" value="<?php echo $radio1; ?>"><?php echo $radio1; ?>
		    			</label>
		    			<label class="radio-inline">
		      				<input type="radio" name="<?php echo $name; ?>" value="<?php echo $radio2; ?>"><?php echo $radio2; ?>
		    			</label>
		    			<label class="radio-inline">
		      				<input type="radio" name="<?php echo $name; ?>" value="<?php echo $radio3; ?>"><?php echo $radio3; ?>
		    			</label>
		    		</div>
		    		<div class="form-group">
	      				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
		    				<button type="submit" class="btn btn-default">finalizar</button>
				    	</div>
				    </div>
	  			</form>
			</div>
		</div>
	</div>
	<?php @require '../footer.php'; ?>
	<?php @require '../js/scripts.php'; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$respuestas = "";

			$('#creaUsuario .next').click(function() {
				$name = $('#name').val();
				$ape = $('#ape').val();
				$comp = $('#comp').val();
				$email = $('#email').val();

				$('#creaUsuario').css('display', 'none');
				$('#preguntas').css('display', 'block');
			});

			$('input:radio').on("click", function() {
				$ubi = $("input[name=ubi]:radio:checked").val();
				$loc = $("input[name=loc]:radio:checked").val();
			});

			$('#preguntas .next').click(function() {				
				$('#preguntas').css('display', 'none');
				$('#preguntas2').css('display', 'block');
			});

			$('#preguntas2').submit(function() {
				$respuestas = "el nombre " + $name + " el apellido " + $ape + " la comp " + $comp + " el mail " + $email + " ubi: " + $ubi + " loc: " + $loc;
				$(".rsta").html($respuestas);
				return false;
			});
		});
	</script>
</body>
</html>