<?php
	session_start();
	

	if(isset($_POST['submit'])){
		$username = "carlos";
		$password="123abc";
	}else{
		header("location: index.php")
	}

?>