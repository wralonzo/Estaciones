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

$empleado="SELECT * FROM empleado";
$resempleado=$conexion->query($empleado);
?>  

<html>
	<head>
		<title>EMPLEADOS</title>
		<link rel="stylesheet" type="text/css" href="css/table.css"/>
		
	</head>
	<h1>EMPLEADOS</h1><br>
	

	<section>
		<button onclick="window.location='http://127.0.0.1/subestaciones/empleado_ingreso.html'">Nuevo</button>
		<form method="POST">
			<table class= "table">
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Correo</th>
					<th>Dpi</th>
					<th>Fecha de nacimiento</th>
					<th>Eliminar</th>
					<th>Modificar</th>
				</tr>
				<?php
					while ($registroempleado = $resempleado->fetch_array(MYSQLI_BOTH))
					{
						echo '<tr>
								<td>'.$registroempleado['codigo'].'</td>
								<td>'.$registroempleado['nombre'].'</td>
								<td>'.$registroempleado['apellido'].'</td>
								<td>'.$registroempleado['direccion'].'</td>
								<td>'.$registroempleado['correo'].'</td>
								<td>'.$registroempleado['dpi'].'</td>
								<td>'.$registroempleado['fecnac'].'</td>
								<td><input type="checkbox" name="eliminar[]" value=""'.$registroempleado['codigo'].'"/></td>
								<td><input type="checkbox" name="modificar[]" value=""'.$registroempleado['codigo'].'"/></td>
							</tr>'; 
					}
				?>
			</table>
		</form>

		
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<input type="submit" name="borrar" value="Elimiar" onclick="reload()" class="btn btn-danger col-md-offset-10"/>
		<input type="submit" name="update" value="Modificar">
		

		<?php

	
		if(isset($_POST['borrar']))
		{
			if(empty($_POST['eliminar[]']))
			{
				echo'Error';
			}
			else
			{
				foreach ($_POST['eliminar'] as $id_borrar) {

					$borrar=$conexion->query("DELETE FROM empleado where dpi='$id_borrar'");
					echo "DELETE FROM empleado where dpi='$id_borrar";

					//$borarempleado=$conexion->query("DELETE  FROM empleado where dpi='$id_borrar'");
				}
			}
		}
		?>
	</section>
</html>