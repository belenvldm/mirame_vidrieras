<?php 
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	// variables desde el formulario
	$user = $_POST["email"];
	$pass = $_POST["pass"];
	
	// valido la conexion
	if(!mysqli_connect_error()) {
		// valido las variables
		if($user!=null and $pass!=null) {
			// declaro la consulta
			$consulta = "SELECT	* FROM admin WHERE usuario_admin = '$user' and pass_admin = '$pass'";
			// obtengo los resultados desde la conexion y la consulta
			$resultado = mysqli_query($conexion->conectado,$consulta);

			// si existe alguna fila, algun resultado
			if (mysqli_fetch_array($resultado)) {
				header ("Location:../secciones/dashboard.php");
			} else {
				echo "Error de usuario y/o contraseña";
				echo '<a href="../index.php">volver</a>';
			}
		} else {
			echo "Ingrese su usuario y constraseña";
			echo '<a href="../index.php">volver</a>';
		}
	} else {
		echo'Error de Conexión a la base';
		echo '<a href="../index.php">volver</a>';
	}
?>