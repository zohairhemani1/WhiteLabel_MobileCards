<?php
	
	include 'headers/connect_to_mysql.php';
	$email_refferal = $_POST['emailReferral'];
	
	$to = $_email;
	$subject = "Congratulations! New Referral Added";
	$headers = "From: info@mobipowerapps.com" . "\r\n" .
	"BCC: vipdre12@gmail.com, zohairhemani1@gmail.com";
	$msg = "Congratulations {$_fname} {$_lname},\n{$email_refferal} has just downloaded your VCARD from http://www.bizsocialetc.info/cards/{$username}. ";
	
	mail($to,$subject,$msg,$headers);
	
	$query = "INSERT INTO referral(username,email) VALUES ('$username','$email_refferal')";
	mysqli_query($con,$query);
	
?>