<?php	
	$hostname="localhost";
	$database="markmana";
	$username="root";
	$password="111111";
	$webconn=mysqli_connect("localhost","root","111111");
	if(!$webconn){
		die('Could not connect:'.mysqli_error());
	}
?>