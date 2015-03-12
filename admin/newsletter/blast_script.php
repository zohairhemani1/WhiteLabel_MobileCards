<?php

include_once 'connect_to_mysql.php';


$free = $_POST['free'];
$deluxe = $_POST['deluxe'];
$premium = $_POST['premium'];

echo $free . " Card Selected <br>";
echo $deluxe . " Card Selected <br>";
echo $premium . " Card Selected<br>";


$sql = mysql_query("SELECT Email FROM registeration WHERE Card = '$free' OR Card = '$deluxe' OR Card = '$premium'");
$numRows = mysql_num_rows($sql); // Added for "End Campaign Check" at the bottom of this file
$subject = $_POST['subject'];
$mail_body = $_POST['message'];
$headers = "From: info@teamliberty.info" . "\r\n" .
"CC: vipdre12@gmail.com";






while($row = mysql_fetch_array($sql)){
	$username = $row['username'];
	$name = $row["Name"];
	$email = $row["Email"];
    $mail_result = mail($email, $subject, $mail_body,$headers);
	
	if ($mail_result) {
		//mysql_query("UPDATE users SET recieved='1' WHERE email='$email' LIMIT 1");
		echo "Email sent to {$email} <br>";
	} else {
			   echo 'Failed To send {$email}';
	}
}
?>


<?php

if ($numRows == 0) { 
	 
	 $subj = "Newsletter campaign succesfully ended";
	 $body = "The current newsletter campaign has ended. Everyone has recieved the newsletter";
     mail("zohairhemani1@gmail.com", $subj, $body);
	
}

?>
