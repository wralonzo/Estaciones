<?php  
	/*	$conexion=new mysqli("localhost", "root", "", "subestaciones");*/

function Conectarse()  
{  
   if (!($link=mysql_connect("localhost","n_usuario","password")))  
   {  
      echo "Error conectando a la base de datos.";  
      exit();  
   }  
   if (!mysql_select_db("n_base",$link))  
   {  
      echo "Error seleccionando la base de datos.";  
      exit();  
   }  
   return $link;  
}  
?>  # Estaciones
# Estaciones
