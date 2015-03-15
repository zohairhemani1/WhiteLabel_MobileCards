<?php

$db_host = "mobilecards.db.11683817.hostedresource.com"; 

$db_username = "mobilecards";  

$db_pass = "Hemani786!";  

$db_name = "mobilecards"; 

// Run the connection here  

mysql_connect("$db_host","$db_username","$db_pass") or die ("Couldnot Connect to Database!"); 
mysql_select_db("$db_name") or die ("No Database!");    

?>