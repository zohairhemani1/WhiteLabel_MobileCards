<?php
session_start();
if(isset($_SESSION['name'])){
header("location: admin.html");
}
else{
	header("location: index.html");
}
?>