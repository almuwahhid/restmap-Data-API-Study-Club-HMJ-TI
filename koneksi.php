<?php
	$host		= "localhost";
	$user		= "root";
	$pass		= "";
	$database = 'restmap';

	$h = mysqli_connect($host,$user,$pass,$database);
	mysqli_select_db($h,$database);
?>
