<?php 


//MySQLi or PDO
	// connect to databse
	$conn = mysqli_connect('localhost', 'dev', 'dev12345', 'dev_pizza');

	// check connection 
	if(!$conn){
		echo 'connection error: ' . mysqli_connect_error();
	}


 ?>