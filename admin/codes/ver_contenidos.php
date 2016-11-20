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
		$consulta = "SELECT * FROM contenidos INNER JOIN secciones ON contenidos.id_seccion = secciones.id_seccion INNER JOIN galerias ON contenidos.id_galeria = galerias.id_galeria";		

		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($fila = mysqli_fetch_array($resultado)) {
			$id = $fila["id_contenido"];
			$titulo = utf8_encode($fila["titulo_contenido"]);
			$title = utf8_encode($fila["title_contenido"]);
			$texto = utf8_encode($fila["cuerpo_contenido"]);
			$txt = utf8_encode($fila["body_contenido"]);
			$nombre = utf8_encode($fila["nombre_seccion"]);
			$galeria = utf8_encode($fila["titulo_galeria"]);
			$estado = $fila["publicar_contenido"];
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>