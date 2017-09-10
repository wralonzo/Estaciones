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
	$ubicacion=$_POST['ubicacion'];
	$tension=$_POST['tension'];
	$tipo=$_POST['tipo'];
	//hacemos la sentencia sql
	$sql="INSERT INTO salida VALUES ('$id', '$name', '$tipo', '$ubicacion', '$tension')";
	//ejecutar sentencia
	$ejecutar=mysql_query($sql);
	//verificar ejecucion
	if(!$ejecutar){
		echo "hubo un error";
	}else{
		echo "Datos guardados correctamente <br><a href='index.html'>Volver</a>";
	}

?>
