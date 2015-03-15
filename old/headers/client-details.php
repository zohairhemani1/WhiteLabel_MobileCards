<?php
	
	
	include 'connect_to_mysql.php';
	
	$query = "SELECT * FROM clients LIMIT 1";
	$result = mysqli_query($con,$query);
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	$username_client = $row['username'];
	$domain_client = $row['domain'];
	$name_client = $row['business'];
	$business_client = $row['business'];
	$office_client = $row['office'];
	$mobile_client = $row['mobile'];
	$email_client = $row['email'];
	$logo_client = $row['logo'];
	$youtube_client = $row['youtube'];
	$dir_client = $row['dir'];
	
	
	
?>