<?php

$sRoot = $_SERVER['DOCUMENT_ROOT'];

include $sRoot. '/smart/headers/connect_to_mysql.php';
include 'client-details.php';

if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
else
{
	$username = $_GET['username'];		
}

$result = mysqli_query($con,"SELECT * FROM registeration
WHERE username like '$username'");


while($row = mysqli_fetch_array($result))

  {
  
    $_fname = $row['fname'];
    $_lname = $row['lname'];
    $_email = $row['email'];
    $_logo = $row['logo'];
    $_jobTitle = $row['job'];
    $_office = $row['office'];
    $_mobile = $row['mobile'];
    $_website = $row['website'];
    $_profilePic = $row['profilePicture'];
    $_facebook = $row['facebook'];
    $_twitter = $row['twitter'];
    $_linked = $row['linked'];
    $_youtube = $row['youtube'];
    $_google = $row['google'];
    $_description = $row['description'];
    $_company = $row['company'];
    $_video = $row['video'];
	$_template = $row['template'];
	$_city = $row['city'];
	$_state = $row['state'];
	$_country = $row['country'];
	$_address = $row['address'];
	$_referlink = $row['referlink'];
	$_gender = $row['gender'];
	$_zip = $row['zip'];
    
  }
  
  /*
  	If user's doesn't fill in social media links, default bizsocial links must appear.
  */
  
  if(empty($_google))
  {
		$_google = "https://plus.google.com/113403331055048268890/posts";
  }
  if(empty($_facebook))
  {
	  $_facebook = "https://www.facebook.com/bizsocialetc";
  }
  if(empty($_twitter))
  {
	  $_twitter = "https://twitter.com/bizsocialetc";
  }
  if(empty($_youtube))
  {
	  $_youtube = "https://www.youtube.com/watch?v=MTMaPw82DYU&feature=youtu.be";
  }
  if(empty($_linked))
  {
	  $_linked = "http://www.linkedin.com/profile/view?id=327048006&trk=nav_responsive_tab_profile";
  }
  
  
  
  
  
  
  function parseLinks($link)
	{
		if(substr($link,0,4) === 'http')
		{
			return $link;
		}
		else
		{
				$link = "http://".$link;
				return $link;
		}
	}
	
	if($_referlink == null)
	{
		$_referlink = "http://www.thesmartercard.com";
	}
	
	$_google = parseLinks($_google);
	$_facebook = parseLinks($_facebook);
	$_twitter = parseLinks($_twitter);
	$_youtube = parseLinks($_youtube);
	$_linked = parseLinks($_linked);
	$_referlink = parseLinks($_referlink);
	
	
  
  

?>