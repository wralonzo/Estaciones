<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="subestaciones";
$conexion = new mysqli($host, $usuario, $contraseña, $base);
/*if(conexion_connect_errno){
	die ("fallo la conexion:(".$conexion ->mysqli_conect_errno()")".$conexion ->mysqli_conect_error())
}*/

/////consulta
$subestacion="SELECT * FROM subestacion";
$resubestacion=$conexion->query($subestacion);
?>  

<html>
	<head>
		<title>SUBESTACION</title>
		<link rel="stylesheet" type="text/css" href="css/table.css"/>
	</head>
	<h1>SUBESTACION</h1>

	<section>
		<button onclick="window.location='http://127.0.0.1/subestaciones/subestacion.html'">Nuevo</button>
		<table class= "table">
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Ubicacion</th>
				<th>Etrada</th>
				<th>Salida</th>
				<th>Potencia</th>
				
			</tr>
			<?php
				while ($registrosalida = $resubestacion->fetch_array(MYSQLI_BOTH))
				{
					echo '<tr>
							<td>'.$registrosalida['codigo'].'</td>
							<td>'.$registrosalida['nombre'].'</td>
							<td>'.$registrosalida['ubicacion'].'</td>
							<td>'.$registrosalida['entrada'].'</td>
							<td>'.$registrosalida['salida'].'</td>
							<td>'.$registrosalida['potencia'].'</td>
						</tr>';
				}
			?>
		</table>
	</section>
</html>