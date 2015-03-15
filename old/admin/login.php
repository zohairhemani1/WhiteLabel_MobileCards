<?php

include '../headers/connect_to_mysql.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * from users WHERE username like '$username' and password like '$password'";

$result  = mysql_query($query);
$count=mysql_num_rows($result);

while($row = mysql_fetch_array($result)){
		$user = $row['username'];
		$pass = $row['password'];
		//echo $user . "<br>";
		//echo $pass . "<br>";
		
}

if($count==1){
	
	//echo "Login Successfull";
	
	session_start();
	$_SESSION['name'] = $username;
	$_SESSION['password'] = $password;
	header("Location: admin.php");
	
} else{
	
	echo "Invalid Credentials.";
		
}
	
?>