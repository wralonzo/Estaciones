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
	//recumerar las variables del formulario
	$id=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$ubicacion=$_POST['ubicacion'];
	$entrada=$_POST['entrada'];
	$salida=$_POST['salida'];
	$potenciainst=$_POST['potenciai'];

	$sql="INSERT INTO subestacion VALUES ('$id', '$nombre', '$ubicacion', '$entrada', '$salida', '$potenciainst')";

	$ejecutar=mysql_query($sql);
	//verificar ejecucion
	if(!$ejecutar){
		echo "hubo un error";
	}else{
		echo "Datos guardados correctamente <br><a href='index.html'>Volver</a>";
	}
?>