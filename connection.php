<?php 
	$connection = new mysqli('localhost', 'root', '', 'verifytable');
	if($connection->connect_error){
		die('Cannot connect to database '.$connection->connect_error);
	}
?>