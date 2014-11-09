<?php

include 'headers/connect_to_mysql.php';	
include 'headers/_user-details.php';
include 'headers/client-details.php';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0 maximum-scale=1.0" />
<title><?php echo $_fname . " " . $_lname . " - $username_client;"; ?></title>

<style>
	
	.wrapper
	{
		position:absolute;
		height:100%;
		width:100%;
		border:none;	
	}
	
	body
	{
		margin:0px;	
	}
	
</style>

</head>

<body>

 <iframe class="wrapper" src="../designs/template<?php echo $_template; ?>.php?username=<?php echo $username; ?>"></iframe>

</body>
</html>
