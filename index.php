<?php 

	//MySQLi or PDO
	// connect to databse
	$conn = mysqli_connect('localhost', 'dev', 'dev12345', 'dev_pizza');

	// check connection 
	if(!$conn){
		echo 'connection error: ' . mysqli_connect_error();
	}
	
	// write query for all pizza's
	$sql = 'SELECT title, ingredients,id FROM pizzas';
	
	// make query and get result
	$result = mysqli_query($conn, $sql);
	
	// fetch resulting rowsas an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	// free result from memory
	mysqli_free_result($result);
	
	// close connection to database
	mysqli_close($conn);
	
	print_r($pizzas);
?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php') ?>
	
	<?php include('templates/footer.php') ?>
	

</html>