<?php

	$id=$_GET['id'];

	$mysqli=new mysqli('localhost', 'root', '', 'school');
	
	$query="DELETE FROM c_routine WHERE id=$id";
	
	$result=$mysqli->query($query, MYSQLI_STORE_RESULT);

	header("Location:show_routine.php");
	die();

?>