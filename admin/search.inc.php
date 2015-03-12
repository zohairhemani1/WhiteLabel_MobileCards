<?php

if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];

if(!empty($search_text)){
	
	include '../headers/connect_to_mysql.php';
	
	if(@mysql_connect($db_host,$db_username,$db_pass)){
		if(@mysql_select_db($db_name)){
		  $query = "SELECT username FROM registeration WHERE username LIKE '$search_text%'";
		  $query_run = mysql_query($query);
		  while($query_row = mysql_fetch_assoc($query_run)){
			 $name = $query_row['username'];
			 echo "<br>";
			 echo "<a href='../cards/$name' id='search-result' target='_blank'> $name </a>";
		  }
		  
		}
	}

}

}

?>