<?php
	
	include 'headers/connect_to_mysql.php';
	$activationKey = $_GET['activate'];
	$query = "UPDATE registeration SET active = '1' WHERE activationKey = '$activationKey'";
	mysqli_query($con,$query);
	
	header('Location: login.php?active=success');
	
?>