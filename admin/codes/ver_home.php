<?php
	// traigo el codigo de conexion
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	require_once("$root/admin/codes/conectar_base.php");
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT * FROM home";

		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($fila = mysqli_fetch_array($resultado)) {
			$id = $fila["id_home"];
			$logo = $fila["img_logo"];
			$tituloLogo = utf8_encode($fila["titulo_logo"]);
			$titleLogo = utf8_encode($fila["title_logo"]);
			$titulo = utf8_encode($fila["titulo_home"]);
			$title = utf8_encode($fila["title_home"]);
			$desc = utf8_encode($fila["descripcion_home"]);
			$description = utf8_encode($fila["description_home"]);
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="dashboard.php">Volver</a>';
	}
?>