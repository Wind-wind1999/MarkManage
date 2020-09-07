<?php	
	$hostname="localhost";
	$database="markmana";
	$username="root";
	$password="111111";
	$webconn=mysqli_connect($hostname,$username,$password);
	if(!$webconn){
		die('Could not connect:'.mysqli_error());
	}
?>