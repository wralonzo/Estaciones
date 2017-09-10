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
$equipo="SELECT * FROM equipo";
$resequipo=$conexion->query($equipo);
?>  

<html>
	<head>
		<title>EQUIPO</title>
		<link rel="stylesheet" type="text/css" href="css/table.css"/>
	</head>
	<h1>EQUIPO</h1>

	<section>
	<button onclick="window.location='http://127.0.0.1/subestaciones/equipo.html'">Nuevo</button>
		<table class= "table">
			<tr>
				<th>Marca</th>
				<th>Serie</th>
				<th>Tipo</th>
				<th>#Oper</th>
				<th>Marca</th>
				<th>Serie</th>
				<th>Tipo</th>
				<th>#Oper</th>
				<th>Pro_Fase</th>
				<th>Pro_Curva</th>
				<th>Cur_Fase</th>
				<th>Cur_Neutro</th>

			</tr>
			<?php
				while ($registroempleado = $resequipo->fetch_array(MYSQLI_BOTH))
				{
					echo '<tr>
							<td>'.$registroempleado['marca'].'</td>
							<td>'.$registroempleado['seriecotrol'].'</td>
							<td>'.$registroempleado['tipocontrol'].'</td>
							<td>'.$registroempleado['marcacuba'].'</td>
							<td>'.$registroempleado['seriecuba'].'</td>
							<td>'.$registroempleado['tipocuba'].'</td>
							<td>'.$registroempleado['noperaciones'].'</td>
							<td>'.$registroempleado['nopercuba'].'</td>
							<td>'.$registroempleado['protfase'].'</td>
							<td>'.$registroempleado['protnuetro'].'</td>
							<td>'.$registroempleado['curvafase'].'</td>
							<td>'.$registroempleado['curvaneutro'].'</td>
						</tr>';
				}
			?>
		</table>
	</section>
</html>