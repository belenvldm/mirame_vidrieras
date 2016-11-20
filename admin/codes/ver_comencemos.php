<?php
	// traigo el codigo de conexion
	@require "../codes/conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT * FROM preguntas INNER JOIN opciones_preguntas ON preguntas.id_pregunta = opciones_preguntas.id_pregunta";
		
		$resultado = mysqli_query($conexion->conectado,$consulta);

		$idActual = 0;
		$cierre = 0;

		while ($fila = mysqli_fetch_array($resultado)) {
			$id = $fila["id_pregunta"];
			$texto = utf8_encode($fila["texto_pregunta"]);
			$nombre = utf8_encode($fila["nombre_opcion"]);
			$valor = $fila["valor_opcion"];
			$estado = $fila["publicar_pregunta"];

			if ($idActual != $id) {
				echo '<div class="row verContent">';
					echo '<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">';
						echo '<div class="col-xs-12 col-sm-6 col-md-6">';
							echo '<p class="page-header tituloSeccionHome">pregunta</p>';
							echo '<p>'.$texto.'</p>';
				    	echo '</div>';
				    	echo '<div class="col-xs-12 col-sm-6 col-md-6">';
							echo '<p class="page-header tituloSeccionHome">respuesta</p>';
				    $idActual = $id;
			}
							echo '<label class="radio-inline">';
	      						echo '<input type="radio" class="inpRad" name="'.$nombre.'" value="'.$valor.'"> '.$valor;
	      					echo "</label>";

		      	if ($cierre == 2) {
		      			echo '</div>';
		      			echo '<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-0">';
					    	if ($estado == "no") {
								echo '<a href="../codes/publicar_pregunta.php?mod='.$id.'" class="btn btn-success btn-md">publicar</a>';
							} else {
								echo '<a href="../codes/publicar_pregunta.php?mod='.$id.'" class="btn btn-success btn-md">despublicar</a>';
							}
							echo '<a href="../codes/modificar_pregunta.php?mod='.$id.'" class="btn btn-primary btn-md">modificar</a>';
							echo '<a href="../codes/bajar_pregunta.php?baj='.$id.'" class="btn btn-elim btn-md" title="eliminar"><span class="glyphicon glyphicon-remove"></span></a>';
						echo '</div>';
					echo '</div>';
		      		$cierre = -1;
		      	echo '</div>';
		      	}
		      	$cierre++;
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>