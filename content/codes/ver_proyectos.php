<?php
	// traigo el codigo de conexion
	@require "../../admin/codes/conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$total = array();
	$i = 0;
	$e = 0;

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT proyectos.id_proyecto FROM proyectos WHERE publicar_proyecto = 'si'";
		
		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($f = mysqli_fetch_array($resultado)) {
			$total[$i] = $f["id_proyecto"];
			$i++;
		}

		$todos = count($total) -1;

		if ($todos > 0) {

			if (isset($_GET["idPro"])) {
				$idVer = $total[ $_GET["idPro"] ];
				if ($codPrev == 0) {
					$codPrev = $todos;
				} else {
					$codPrev --;
				}

				if ($codNext == $todos) {
					$codNext = 0;
				} else {
					$codNext ++;
				}
			} else {
				$idVer = $total[0];
				$codPrev = $todos;
				$codNext = 1;
			}

			$consulta2 = "SELECT proyectos.*, usuarios.empresa_usuario, fotos.titulo_foto, fotos.alt_foto, fotos.url_foto, fotos.epigrafe_foto FROM proyectos INNER JOIN usuarios ON proyectos.id_usuario = usuarios.id_usuario INNER JOIN galerias ON proyectos.id_galeria = galerias.id_galeria INNER JOIN fotos ON galerias.id_galeria = fotos.id_galeria WHERE proyectos.id_proyecto = '$idVer'";

			$resultado2 = mysqli_query($conexion->conectado,$consulta2);
			$idActual = 0;
			$cierre = 0;

			while ($fila = mysqli_fetch_array($resultado2)) {
				$id = $fila["id_proyecto"];
				$titulo = utf8_encode($fila["titulo_proyecto"]);
				$txt = utf8_encode($fila["cuerpo_proyecto"]);
				$video = $fila["video_proyecto"];
				$comp = utf8_encode($fila["empresa_usuario"]);
				$estado = $fila["publicar_proyecto"];
				$tituloFoto = utf8_encode($fila["titulo_foto"]);
				$altFoto = utf8_encode($fila["alt_foto"]);
				$urlFoto = $fila["url_foto"];
				$epi = utf8_encode($fila["epigrafe_foto"]);

				if ($idActual != $id) {
					echo '<div class="titleCentral">';
						echo '<a id="prev" href="proyectos.php?idPro='.$codPrev.'">';
							echo '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>';
							echo '<span class="sr-only">Previous</span>';
						echo '</a>';
					  	echo '<h1>'.$titulo.' de '.$comp.'</h1>';
					  	echo '<a id="next" href="proyectos.php?idPro='.$codNext.'">';
							echo '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>';
							echo '<span class="sr-only">Next</span>';
						echo '</a>';
					echo '</div>';
					echo '<div class="col-sm-12 col-md-6 videoInfo">';
						echo '<div id="posterVideo">';
							echo '<a id="linkVideo" href="#">';
								echo '<img class="img-responsive" src="../bin/img/2.jpg">';
		  						echo '<span class="glyphicon glyphicon-play"></span>';
							echo '</a>';
						echo '</div>';
						echo '<div id="videoProject" class="embed-responsive embed-responsive-16by9">';
							echo '<iframe id="video" class="embed-responsive-item" src="'.$video.'?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>';
						echo '</div>';
						echo '<p>'.$txt.'</p>';
					echo '</div>';
					echo '<div class="col-sm-12 col-md-6 galeriaProject">';
						echo '<div class="row galeria">';
					$idActual = $id;
				}
				  			echo '<div class="col-sm-6 col-md-6">';
						    	echo '<a class="linkImg" data-toggle="modal" href="#myModal">';
						      		echo '<img class="img-responsive" src="'.$urlFoto.'" title="'.$tituloFoto.'" alt="'.$altFoto.'">';
						    	echo '</a>';
						    echo '</div>';
					
				if ($cierre == 3) {
					 	echo '</div>';
					echo '</div>';
					$cierre = -1;
				}
				$cierre++;
					    // echo '<div id="myModal" class="modal fade" role="dialog">';
	  						// echo '<div class="modal-dialog">';
	    				// 		echo '<div class="modal-content">';
	    				// 			echo '<div class="modal-header">';
			      //   					echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
			      //   				echo '</div>';
							  //     	echo '<div class="modal-body">';
					    //   			echo '<img class="img-responsive" src="'.$urlFoto.'" title="'.$tituloFoto.'" alt="'.$altFoto.'">';echo '';
							  //     	echo '</div>';
							  //     	echo '<div class="modal-footer">';
							  //     		echo '<p>'.$epi.'</p>';
	      		// 					echo '</div>';
	    				// 		echo '</div>';
	    				// 	echo '</div>';
	    				// echo '</div>';
			}
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>