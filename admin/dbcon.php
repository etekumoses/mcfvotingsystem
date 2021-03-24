<?php
	$conn = new mysqli('localhost', 'root', '', 'mcf');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	