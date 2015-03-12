<?php

include '../headers/connect_to_mysql.php';

$superpass = "Hemani786!";
$username = $_POST['username'];
$password = $_POST['password'];
$verifypassword = $_POST['verifypassword'];

if($password!=$verifypassword){
	echo "Password doesnot match.";	
}
else if ($superpass!= $_POST['superpassword']){
	echo "Super password invalid.";
}
else{
	$con=mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
	$query = "INSERT INTO users VALUES('$username','$password')";
	$result = mysqli_query($con,$query);
	echo "New user successfully registered";
}


?>