<?php
	
	session_start();
	if(!isset($_SESSION['name']))
	{
		header('Location: ../admin.php');
	}
	
	else
	
		{
		
			if(isset($_GET['username']))
			{
				include '../../headers/_user-details.php';
				//include '../../headers/client-details.php';
				$username = $_GET['username'];
				
				
				if($_POST)
				{
					
						
					include '../../headers/connect_to_mysql.php';
					include 'image_upload.php';
					include 'logo_upload.php';
								
					$con = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");
					
					
					$firstname_form = $_POST['first_name'];
					$lastname_form = $_POST['last_name'];
					$email_form = $_POST['email'];
					$logo_form = $_POST['logo'];
					$designation_form = $_POST['jobtitle'];
					$mobile_form = $_POST['mobile'];
					$office_form = $_POST['office'];
					$image_form = $_POST['file'];
					$facebook_form = $_POST['facebook'];
					$twitter_form = $_POST['twitter'];
					$youtube_form = $_POST['youtube'];
					$google_form = $_POST['googleplus'];
					$profile_form = $_POST['profile'];
					$website_form = $_POST['website'];
					$company_form = $_POST['company'];
					$linked_form = $_POST['linked'];
					$video_form = $_POST['video'];
					
					if (!empty($profile_pic)) {
		
						$_profilePic = $profile_pic;
					}
					
					if (!empty($logo_update)) {
					
						$_logo = $logo_update;
					}
		
					
					
					
					
				mysqli_query($con, "UPDATE registeration
				SET fname='$firstname_form', lname='$lastname_form', email='$email_form', logo='$_logo', job='$designation_form',
				mobile='$mobile_form', office='$office_form', profilePicture='$_profilePic', facebook='$facebook_form', twitter='$twitter_form',
				youtube='$youtube_form', google='$google_form', description='$profile_form', website='$website_form', company = '$company_form',
				linked='$linked_form', video = '$video_form', youtube='$youtube_form' WHERE username='$username';");
					
					header ('Location: thankyou.php');
					
						
				}
				
			}
			
			
			else
			
			{
				header ('Location: error.html');	
			}
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update <?php echo $username_client; ?></title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update <?php echo $username_client; ?></a></h1>
		<form id="form_698423" class="appnitro" enctype="multipart/form-data" method="post" action="index.php?username=<?php echo $username;?>">
					<div class="form_description">
			<h2>Update <?php echo $username_client; ?></h2>
			<p>Enter the username of the card that you want to edit, and fill in the fields that you want to update.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Username </label>
		<div>
			<input id="element_1" placeholder="<?php echo $username; ?>" name="username" class="element text medium" type="text" maxlength="255"  /> 
		</div><p class="guidelines" id="guide_1"><small>Enter Username here.</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">First Name </label>
		<div>
			<input id="element_2" name="first_name" class="element text medium" type="text" maxlength="255" value="<?php echo $_fname; ?>"/> 
		</div><p class="guidelines" id="guide_2"><small>Update Firstname</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Last Name </label>
		<div>
			<input id="element_3" name="last_name" class="element text medium" type="text" maxlength="255" value="<?php echo $_lname; ?>"/> 
		</div><p class="guidelines" id="guide_3"><small>Update Lastname</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Company </label>
		<div>
			<input id="element_4" name="company" class="element text medium" type="text" maxlength="255" value="<?php echo $_company; ?>"/> 
		</div><p class="guidelines" id="guide_4"><small>Update Company</small></p> 
		</li>					<li id="li_9" >
		<label class="description" for="element_9">Email </label>
		<div>
			<input id="element_9" name="email" class="element text medium" type="text" maxlength="255" value="<?php echo $_email; ?>"/> 
		</div><p class="guidelines" id="guide_9"><small>Update Email.</small></p> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Logo </label>
		<div>
			<input id="element_10" name="logo" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_10"><small>Update Logo here.</small></p> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Job Title </label>
		<div>
			<input id="element_11" name="jobtitle" class="element text medium" type="text" maxlength="255" value="<?php echo $_jobTitle; ?>"/> 
		</div><p class="guidelines" id="guide_11"><small>Update Job Title.</small></p> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Mobile Phone </label>
		<div>
			<input id="element_12" name="mobile" class="element text medium" type="text" maxlength="255" value="<?php echo $_mobile; ?>"/> 
		</div><p class="guidelines" id="guide_12"><small>Update Mobile Phone</small></p> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Office Phone </label>
		<div>
			<input id="element_13" name="office" class="element text medium" type="text" maxlength="255" value="<?php echo $_office; ?>"/> 
		</div><p class="guidelines" id="guide_13"><small>Update Office Phone</small></p> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Website </label>
		<div>
			<input id="element_14" name="website" class="element text medium" type="text" maxlength="255" value="<?php echo $_website; ?>"/> 
		</div><p class="guidelines" id="guide_14"><small>Update Website</small></p> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Upload Image </label>
		<div>
			<input id="file" name="file" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_15"><small>Updat Image here.</small></p> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Facebook </label>
		<div>
			<input id="element_16" name="facebook" class="element text medium" type="text" maxlength="255" value="<?php echo $_facebook; ?>"/> 
		</div><p class="guidelines" id="guide_16"><small>Update Facebook</small></p> 
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Twitter </label>
		<div>
			<input id="element_17" name="twitter" class="element text medium" type="text" maxlength="255" value="<?php echo $_twitter;?>"/> 
		</div><p class="guidelines" id="guide_17"><small>Update Twitter</small></p> 
		</li>			<li id="li_19" >
		<label class="description" for="element_19">Google Plus </label>
		<div>
			<input id="element_19" name="googleplus" class="element text medium" type="text" maxlength="255" value="<?php echo $_google; ?>"/> 
		</div><p class="guidelines" id="guide_19"><small>Update Google Plus</small></p> 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Linked </label>
		<div>
			<input id="element_20" name="linked" class="element text medium" type="text" maxlength="255" value="<?php echo $_linked; ?>"/> 
		</div><p class="guidelines" id="guide_20"><small>Update Linked here.</small></p> 
		</li>
        
       
        <li id="li_20" >
		<label class="description" for="element_20"> Youtube </label>
		<div>
			<input id="element_20" name="youtube" class="element text medium" type="text" maxlength="255" value="<?php echo $_youtube; ?>"/> 
		</div><p class="guidelines" id="guide_20"><small>Update Youtube Link here.</small></p> 
		</li>
        
        
        
        <li id="li_20" >
		<label class="description" for="element_20"> Video Link </label>
		<div>
			<input id="element_20" name="video" class="element text medium" type="text" maxlength="255" value="<?php echo $_video; ?>"/> 
		</div><p class="guidelines" id="guide_20"><small>Update Youtube Link here.</small></p> 
		</li>
        
        <li id="li_21" >
		<label class="description" for="element_21">Profile </label>
		<div>
			<textarea id="element_21" name="profile" class="element textarea medium"><?php echo $_description; ?></textarea> 
		</div><p class="guidelines" id="guide_21"><small>Update Profile</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="698423" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Developed by <a href = "http://www.mobipowerapps.com"> Mobi Power Apps</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>