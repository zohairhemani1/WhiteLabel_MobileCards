<?php

$db_host = "mcard.db.10417420.hostedresource.com"; 

$db_username = "mcard";  

$db_pass = "Hemani786!";  

$db_name = "mcard"; 


mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql"); 
mysql_select_db("$db_name") or die ("no database");    

?>