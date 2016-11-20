<?php
	// traigo el codigo de conexion
	@require "conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$usuarioProyecto = "1"; //$_POST["usuarioProyecto"];
	$tituloProyecto = $_POST["tituloProyecto"];
	$cuerpoProyecto = $_POST["cuerpoProyecto"];
	$vidProject = $_POST["vidProject"];
	$titleProject = $_POST["titleProject"];
	$bodyProject = $_POST["bodyProject"];
	$galeria = "1";//$_POST["galeria"];
	$admin = "2";//$_POST["admin"];
	$estado = "no";


	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "INSERT INTO proyectos (id_usuario, titulo_proyecto, cuerpo_proyecto, video_proyecto, title_proyecto, body_proyecto, id_galeria, id_admin, publicar_proyecto) VALUES ('$usuarioProyecto', '$tituloProyecto', '$cuerpoProyecto', '$vidProject', '$titleProject', '$bodyProject', '$galeria', '$admin', '$estado')";
		
		if(mysqli_query($conexion->conectado,$consulta)){
			echo "El alta se realizo correctamente";
			echo '<a href="../secciones/dashboard.php">Volver</a>';
		} else {
			echo "Existio un error, vuelva a intentarlo mas tarde";
			echo '<a href="../secciones/cargar_proyectos.php">Volver</a>';
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
		echo '<a href="../secciones/dashboard.php">Volver</a>';
	}
?>