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
	$brand=$_POST['marca_control'];
	$control_series=$_POST['serie_control'];
	$control_type=$_POST['tipo_control'];
	$brand_cuba=$_POST['marca_cuba'];
	$cuba_series=$_POST['serie_cuba'];
	$cuba_tipo=$_POST['tipo _cuba'];
	$number_operations=$_POST['numero_control'];
	$number_operations_cuba=$_POST['numero_cuba'];
	$phase_protection=$_POST['protexion_fase'];
	$neutral_progection=$_POST['protexion_neutro'];
	$phase_cuve=$_POST['fase'];
	$neutral_curve=$_POST['fase'];
	//hacemos la sentencia sql
	$sql="INSERT INTO equipo VALUES ('brand', '$control_series', '$control_type', '$brand_cuba', '$cuba_series', '$cuba_tipo',
									'$number_operations','$number_operations_cuba', '$phase_protection', '$neutral_progection', '$phase_cuve', '$neutral_curve')";
	//ejecutar sentencia
	$ejecutar=mysql_query($sql);
	//verificar ejecucion
	if(!$ejecutar){
		echo "hubo un error";
	}else{
		echo "Datos guardados correctamente <br><a href='index.html'>Volver</a>";
	}

?>