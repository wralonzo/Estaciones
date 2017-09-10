
<?php

	$conectar=@mysql_connect('localhost', 'root', '');
	//verificamos la conexion
	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}else{
		$base=mysql_select_db('subestaciones');
		if(!$base){
			echo "No se encontró la base de datos";
		}
	}
	//recuperar las variables del formulario
	$id=$_POST['codigo'];
	$name=$_POST['nombre'];
	$lastname=$_POST['apellido'];
	$address=$_POST['direccion'];
	$email=$_POST['correo'];
	$dpi=$_POST['dpi'];
	$birthdate=$_POST['fecha'];
	//hacemos la sentencia sql
	$sql="INSERT INTO empleado VALUES ('$id', '$name', '$lastname', '$address', '$email', '$dpi', '$birthdate')";
	//ejecutar sentencia
	$ejecutar=mysql_query($sql);
	//verificar ejecucion
	if(!$ejecutar){
		echo "hubo un error";
	}else{
		echo "Datos guardados correctamente <br><a href='empleado.php'>Volver</a>";
	}

?>