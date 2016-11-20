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
		$consulta = "SELECT proyectos.id_proyecto, proyectos.titulo_proyecto, proyectos.cuerpo_proyecto, proyectos.publicar_proyecto, usuarios.empresa_usuario FROM proyectos INNER JOIN usuarios ON proyectos.id_usuario = usuarios.id_usuario";
		
		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($fila = mysqli_fetch_array($resultado)) {
			$id = utf8_encode($fila["id_proyecto"]);
			$titulo = utf8_encode($fila["titulo_proyecto"]);
			$txt = utf8_encode($fila["cuerpo_proyecto"]);
			$comp = utf8_encode($fila["empresa_usuario"]);
			$estado = $fila["publicar_proyecto"];

			echo '<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 verPro">'.PHP_EOL;
			echo "<h4>$titulo de $comp</h4>";
			echo "<p class='txt_project'>$txt</p>";
			if ($estado == "no") {
				echo '<a href="../codes/publicar_proyecto.php?mod='.$id.'" class="btn btn-success btn-md">publicar</a>';
			} else {
				echo '<a href="../codes/publicar_proyecto.php?mod='.$id.'" class="btn btn-success btn-md">despublicar</a>';
			}
			echo '<a href="../codes/modificar_proyecto.php?mod='.$id.'" class="btn btn-primary btn-md">modificar</a>';
			echo '<a href="../codes/bajar_proyectos.php?baj='.$id.'" class="btn btn-elim btn-md" title="eliminar"><span class="glyphicon glyphicon-remove"></span></a>';
			echo "</div>";
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>