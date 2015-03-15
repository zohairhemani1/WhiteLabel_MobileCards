<?php

include_once '../../../headers/connect_to_mysql.php';

$sql = mysql_query("SELECT Email FROM registeration");
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
	$numRows = $numRows - 1;
	
	if ($mail_result) {
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
