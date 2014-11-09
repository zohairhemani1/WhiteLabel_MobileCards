<?php

$db_host = "smartcard.db.11683817.hostedresource.com"; 

$db_username = "smartcard";  

$db_pass = "Smartcard786!";  

$db_name = "smartcard"; 

// Run the connection here  

$con = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

mysql_connect("$db_host","$db_username","$db_pass") or die ("Couldnot Connect to Database!"); 
mysql_select_db("$db_name") or die ("No Database!");    

?>