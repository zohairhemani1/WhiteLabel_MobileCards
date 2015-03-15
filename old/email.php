<?php
	
	$subject = "My subject";
	$message = "My Message";
	$from = "testing@gmail.com";
	$mail =  mail("zohairhemani1@gmail.com",$subject,$message,"From: $from\n");
	
	if($mail)
			{
				echo "Email Sent!";
			}
			else
			{
				echo "Email Sending Error! <br>";
			}

?>