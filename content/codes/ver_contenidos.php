<?php
	// traigo el codigo de conexion	
	require_once("../../admin/codes/conectar_base.php");
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT * FROM contenidos INNER JOIN secciones ON contenidos.id_seccion = secciones.id_seccion INNER JOIN galerias ON contenidos.id_galeria = galerias.id_galeria INNER JOIN fotos ON galerias.id_galeria = fotos.id_galeria";

		$resultado = mysqli_query($conexion->conectado,$consulta);
		$idActual = 0;
		$cierre = 0;

		while ($fila = mysqli_fetch_array($resultado)) {
			$id = $fila["id_contenido"];
			$titulo = utf8_encode($fila["titulo_contenido"]);
			$title = utf8_encode($fila["title_contenido"]);
			$texto = utf8_encode($fila["cuerpo_contenido"]);
			$txt = utf8_encode($fila["body_contenido"]);
			$nombre = utf8_encode($fila["nombre_seccion"]);
			$galeria = utf8_encode($fila["titulo_galeria"]);
			$estado = $fila["publicar_contenido"];
			$tituloFoto = utf8_encode($fila["titulo_foto"]);
			$altFoto = utf8_encode($fila["alt_foto"]);
			$urlFoto = $fila["url_foto"];

			if ($idActual != $id) {
				echo '<div class="col-sm-12 col-md-5">';
					echo '<section class="page-header">';
						echo '<h1>'.$titulo.'</h1>';
					echo '</section>';

					echo '<section class="bodySection">';
						echo '<p>'.$texto.'</p>';
					echo '</section>';
				echo '</div>';
				echo '<div class="col-sm-12 col-md-7 gallerySection">';
					echo '<div id="galeriaCar" class="carousel slide" data-ride="carousel">  ';
					    echo '<div class="carousel-inner" role="listbox">';
				$idActual = $id;
			}

						if ($cierre == 0) {
							echo '<div class="item active">';
					        	echo '<img class="img-responsive" src="'.$urlFoto.'" title="'.$tituloFoto.'" alt="'.$altFoto.'">';
					      	echo '</div>';
						}

						if ($cierre > 0) {
							echo '<div class="item">';
					        	echo '<img class="img-responsive" src="'.$urlFoto.'" title="'.$tituloFoto.'" alt="'.$altFoto.'">';
					      	echo '</div>';
					    }
					if ($cierre == 3) {
					    echo "</div>";

					    echo '<a class="imgPrev" href="#galeriaCar" role="button" data-slide="prev">';
					      echo '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>';
					      echo '<span class="sr-only">Previous</span>';
					    echo '</a>';
					    echo '<a class="imgNext" href="#galeriaCar" role="button" data-slide="next">';
					      echo '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>';
					      echo '<span class="sr-only">Next</span>';
					    echo '</a>';
						echo "</div>";
					echo "</div>";
					$cierre = -1;
					}
				$cierre++;
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>