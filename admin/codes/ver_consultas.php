<?php
	// traigo el codigo de conexion
	@require "../codes/conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$est = $_GET["est"];

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		if ($est == 'pendiente') {
			$consulta = "SELECT consultas.*, usuarios.nombre_usuario, usuarios.empresa_usuario FROM consultas INNER JOIN usuarios ON consultas.id_usuario = usuarios.id_usuario WHERE estado_consulta = '$est'";
		} else if ($est == "finalizada") {
			$consulta = "SELECT consultas.*, usuarios.nombre_usuario, usuarios.empresa_usuario, mensajes.texto_mensaje, mensajes.fch_mensaje, admin.nombre_admin FROM consultas INNER JOIN usuarios ON consultas.id_usuario = usuarios.id_usuario INNER JOIN mensajes ON consultas.id_consulta = mensajes.id_consulta INNER JOIN admin ON mensajes.id_admin = admin.id_admin WHERE estado_consulta = '$est'";
		}

		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($fila = mysqli_fetch_array($resultado)) {
			$id = $fila["id_consulta"];
			$txt = utf8_encode($fila["texto_consulta"]);
			$img = $fila["img_consulta"];
			$fch = $fila["fch_consulta"];
			$estado = $fila["estado_consulta"];
			$usuario = utf8_encode($fila["nombre_usuario"]);
			$comp = utf8_encode($fila["empresa_usuario"]);

			if ($estado == "pendiente") {
				echo '<div class="media">';
					echo '<div class="media-body">';
				    	echo '<h4 class="media-heading">'.$usuario.' de '.$comp.' <small><i>'.$fch.'</i></small></h4>';
				        echo '<p>'.$txt.'</p>';
				   	echo '</div>';
				echo '</div>';
			} else if ($estado = "finalizada") {
				$rsta = utf8_encode($fila["texto_mensaje"]);
				$fchRsta = $fila["fch_mensaje"];
				$admin = utf8_encode($fila["nombre_admin"]);
				$compAdmin = "mirame";

				echo '<div class="media left">';
					echo '<div class="media-body">';
				    	echo '<h4 class="media-heading">'.$usuario.' de '.$comp.' <small><i>'.$fch.'</i></small></h4>';
				        echo '<p>'.$txt.'</p>';
				        echo '<div class="media media-right">';
							echo '<div class="media-body">';
				    			echo '<h4 class="media-heading">'.$admin.' de '.$compAdmin.' <small><i>'.$fchRsta.'</i></small></h4>';
				        		echo '<p>'.$rsta.'</p>';
				   			echo '</div>';
						echo '</div>';
				   	echo '</div>';
				echo '</div>';
			}
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>