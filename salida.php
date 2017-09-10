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
$salida="SELECT * FROM salida";
$resalida=$conexion->query($salida);
?>  

<html>
	<head>
		<title>SALIDA</title>
		<link rel="stylesheet" type="text/css" href="css/table.css"/>
	</head>
	<h1>SALIDA</h1>

	<section>
		<button onclick="window.location='http://127.0.0.1/subestaciones/salida.html'">Nuevo</button>
		<table class= "table">
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Ubicacion</th>
				<th>Tension</th>
			</tr>
			<?php
				while ($registroempleado = $resalida->fetch_array(MYSQLI_BOTH))
				{
					echo '<tr>
							<td>'.$registroempleado['codigo'].'</td>
							<td>'.$registroempleado['nombre'].'</td>
							<td>'.$registroempleado['tipo'].'</td>
							<td>'.$registroempleado['ubicacion'].'</td>
							<td>'.$registroempleado['tension'].'</td>
						</tr>';
				}
			?>
		</table>
	</section>
</html>