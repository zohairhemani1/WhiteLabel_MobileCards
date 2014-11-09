<?php 



$template = $_GET['template'];

$upgrade = $_GET['upgrade'];



session_start();

if(isset($_SESSION['username']))

{

    $username = $_SESSION['username'];

    include 'headers/_user-details.php';

    

        

        if($_POST)

        {		

			include 'headers/image_upload.php';

			include 'headers/logo_upload.php';

			

			$_fname = $_POST['first_name'];

			$_lname = $_POST['last_name'];

			$_email = $_POST['email'];

			$_jobTitle = $_POST['job'];

			$_office = $_POST['office'];

			$_mobile = $_POST['mobile'];

			$_website = $_POST['website'];

			$_facebook = $_POST['facebook'];

			$_twitter = $_POST['twitter'];

			$_linked = $_POST['linked'];

			$_youtube = $_POST['youtube'];

			$_google = $_POST['googlePlus'];

			$_description = $_POST['description'];

			$_company = $_POST['company'];

			$_video = $_POST['video'];

			$_city = $_POST['city'];

			$_country = $_POST['country'];

			$_state = $_POST['state'];

			$_address = $_POST['address'];

			$_referlink = $_POST['referlink'];
			
			$_gender = $_POST['gender'];
			
			$_zip = $_POST['zip'];

			

			if(isset($profilePic)){

				$_profilePic = $profilePic;

			}

			if(isset($logo)){

				$_logo = $logo;

			}

			

			

			

				if(!isset($_fname) || !isset($_lname) || !isset($_email)  || !isset($_jobTitle) || !isset($_office) || !isset($_mobile) || !isset($_website) ||  !isset($_description)|| !isset($_company) )

				{

					$error = "Please fill all the details. <br>";

					

				}

				elseif(!isset($_profilePic) || $_profilePic == null || empty($_profilePic))

				{

					$error = $error . "Upload Profile Picture. <br>";

					

				}

				elseif(!isset($_logo) || $_logo == null || empty($_logo))

				{

					$error = $error . "Upload Company's LOGO.<br>";

				}

				else

				{

					include 'headers/connect_to_mysql.php';

					

			$query_details = "UPDATE registeration SET fname = '$_fname', lname = '$_lname', email = '$_email', logo = '$_logo', job = '$_jobTitle', office = '$_office', mobile = '$_mobile', website = '$_website', profilePicture = '$_profilePic', facebook = '$_facebook', twitter = '$_twitter', linked = '$_linked', youtube = '$_youtube', google = '$_google', description = '$_description', company = '$_company', video = '$_video', template = '$template', state = '$_state', city = '$_city', zip = '$_zip', country = '$_country', address = '$_address', gender = '$_gender', referlink = '$_referlink' WHERE username like '$username' ";

    		mysqli_query($con,$query_details);

			header("Location: cards/$username");

				}

			

			

		}

	

	

}

else if(!isset($_SESSION['username']) && $upgrade == 1)

{

	header('Location: login.php?upgrade=1');		

}



else

{

	header('Location: login.php');		

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Super User" />
<meta name="generator" content="Joomla! - Open Source Content Management" />
<title><?php echo $username; ?>- Quick Start</title>
<link rel="stylesheet" href="http://bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-style.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/libraries/gantry/css/grid-12.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/gantry-core.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/joomla-core.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/community-a.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/community-a-extensions.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/utilities.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/typography.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/demo-styles.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/template.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/template-webkit.css" type="text/css" />
<link rel="stylesheet" href="http://bizsocialetc.info/templates/rt_fresco/css/fusionmenu.css" type="text/css" />
<link rel="stylesheet" href="css/custom.css" type="text/css" />

<!-- Style sheet of Savy Cards -->

<link rel="stylesheet" href="assets/css/reset.css" />
<link rel="stylesheet" href="assets/css/skeleton.css" />
<link rel="stylesheet" href="assets/css/global.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<style type="text/css"></style>
<script src="http://bizsocialetc.info/media/system/js/mootools-core.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/media/system/js/core.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/media/system/js/caption.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/media/system/js/mootools-more.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/plugins/system/rokbox/rokbox.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-config.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/templates/rt_fresco/js/gantry-totop.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/templates/rt_fresco/js/load-transition.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/modules/mod_roknavmenu/themes/fusion/js/fusion.js" type="text/javascript"></script>
<script src="http://bizsocialetc.info/modules/mod_rokajaxsearch/js/rokajaxsearch.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!-- OVERIDING CSS HERE --->

<style>
.container .two-thirds.column {
	width:580px;
	margin-left:20px;
}
</style>
</head>

<body  class="mainstyle-community-a backgroundlevel-high font-family-fresco font-size-is-default logo-type-fresco menu-type-fusionmenu typography-style-light col12 option-com-content menu-styles">
<div id="rt-page-surround">
  <div class="main-bg">
    <div class="rt-container">
      <div id="rt-drawer">
        <div class="clear"></div>
      </div>
      <?php include 'headers/navigation.php';?>
      <div id="rt-transition" class="rt-hidden">
        <div id="rt-showcase">
          <div class="rt-grid-12 rt-alpha rt-omega">
            <div class="rt-block">
              <div class="module-surround">
                <div class="module-title">
                  <h2 class="title">QuickStart!</h2>
                </div>
                <div class="module-content">
                  <div id="container" class="container">
                    <div id="site_overlay"></div>
                    <div id="internal_wrap" class="row">
                      <div class="row clearfix">
                        <div class="two-thirds column alpha">
                          <div class="savvybox">
                            <h1>Welcome to QuickStart!</h1>
                            <hr />
                            <p>This quick form allows you to provision the basics for your first <?php echo $username_client;?>!</p>
                            <?php

				

				if(isset($error)){

				

				echo "<div id='system-message-container' style='width:400px; margin-left:10px;'>

							<dl id='system-message'>

							<dt class='error'>Error</dt>

							<dd class='error message'>

								<ul>

									<li>$error</li>

								</ul>

							</dd>

							</dl>

						</div>";

				}

	

			?>
                            <hr />
                            <form name="register" method="post" action="quick-start.php?template=<?php echo $template;?>" autocomplete="off" enctype="multipart/form-data">
                              <span class="form_row additional_help">
                              <label for="username">Username</label>
                              <input type="text" id="username" name="username" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $username; ?>" />
                              </span> <span class="form_row">
                              <label for="first_name">First Name</label>
                              <input type="text" id="first_name" name="first_name" spellcheck="false" value="<?php echo $_fname; ?>" />
                              </span> <span class="form_row">
                              <label for="last_name">Last Name</label>
                              <input type="text" id="last_name" name="last_name" spellcheck="false" value="<?php echo $_lname; ?>" />
                              </span> <span class="form_row">
                              <label for="email">Email</label>
                              <input type="text" id="email" class="info_bubble" style="position:relative;" title="eg: name@email.com" name="email" spellcheck="false" value="<?php echo $_email; ?>" />
                              </span>
                              <label for="email">Gender</label>
                              <select name="gender">
                              	<option value="Male"> Male </option>
                                <option value="Female"> Female </option>
                              </select>
                              
                              <span class="form_row">

                    <label for="email">Logo</label>

                    <input type="file" id="email" class="info_bubble" style="position:relative;" name="logo" spellcheck="false" value="" />

                              </span>  
                              
                              <span class="form_row additional_help"> 
                              
                              <!--<label for="username">Company</label> -->
                              
                              <input type="hidden" id="username" name="company" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="The Smarter Card" />
                              </span>
                              <h3><span class="form_row additional_help">
                                <label for="username">Job Title</label>
                                <input type="text" id="username" name="job" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_jobTitle; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Office #</label>
                                <input type="text" id="username" name="office" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_office; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Mobile #</label>
                                <input type="text" id="username" name="mobile" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_mobile; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Address</label>
                                <input type="text" id="username" name="address" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_address; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">City</label>
                                <input type="text" id="username" name="city" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_city; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Country</label>
                                <input type="text" id="username" name="country" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_country; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">State</label>
                                <input type="text" id="username" name="state" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_state; ?>" />
                                </span> 
                                
                                <span class="form_row additional_help">
                                <label for="username">Zip</label>
                                <input type="text" id="username" name="zip" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_zip; ?>" />
                                </span>
                                
                                <span class="form_row additional_help"> 
                                
                                <!-- <label for="username">Website</label> -->
                                
                                <input type="hidden" id="username" name="website" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="www.thesmartercard.com" />
                                </span>  <span class="form_row additional_help">
                                <label for="username">Profile Picture</label>
                                <input type="file" id="username" name="file" spellcheck="false" class="info_bubble" value="<?php echo $_profilePic; ?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Facebook</label>
                                <input type="text" id="username" name="facebook" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_facebook;?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Twitter</label>
                                <input type="text" id="username" name="twitter" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_twitter;?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Linked</label>
                                <input type="text" id="username" name="linked" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_linked;?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Youtube</label>
                                <input type="text" id="username" name="youtube" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_youtube;?>" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Google Plus</label>
                                <input type="text" id="username" name="googlePlus" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_google;?>" />
                                </span>
                                
                                <span class="form_row additional_help"> 
                                
                              <label for="username">Youtube Video Link</label>
                                
                                <input type="text" id="username" name="video" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="<?php echo $_video;?>" />
                                </span>
                                
                                 <span class="form_row additional_help">
                                <label for="username">Company Refer Link</label>
                                <input type="text" id="username" name="referlink" spellcheck="false" class="info_bubble" value="<?php echo $_referlink;?>" placeholder="Enter your Company Refer Link" />
                                </span> <span class="form_row additional_help"> 
                                
                                <!-- if it's an upgraded form -->
                                
                                <?php

								

							if($_GET['upgrade']==1)

							{

								echo "<span class='form_row additional_help'>

                                <label for='username'>Profile Picture</label>

                                <input type='file' id='username' name='file' spellcheck='false' class='info_bubble' value='<?php echo $_profilePic; ?>' /></span>

								

								<span class='form_row additional_help'>

                                <label for='username'>Facebook</label>

                                <input type='text' id='username' name='facebook' spellcheck='false' class='info_bubble' title='Numbers and letters. Can not start with a number.' value='https://www.facebook.com/GenesisGlobalNetworkSA' />

                                </span> <span class='form_row additional_help'>

                                <label for='username'>Twitter</label>

                                <input type='text' id='username' name='twitter' spellcheck='false' class='info_bubble' title='Numbers and letters. Can not start with a number.' value='https://twitter.com/genesisglobalbz' />

                                </span> <span class='form_row additional_help'>

                                <label for='username'>Linked</label>

                                <input type='text' id='username' name='linked' spellcheck='false' class='info_bubble' title='Numbers and letters. Can not start with a number.' value='https://www.linkedin.com/' />

                                </span> <span class='form_row additional_help'>

                                <label for='username'>Youtube</label>

                                <input type='text' id='username' name='youtube' spellcheck='false' class='info_bubble' title='Numbers and letters. Can not start with a number.' value='http://youtu.be/MF85_XI7BsM' />

                                </span> <span class='form_row additional_help'>

                               <label for='username'>Google Plus</label>

                                <input type='text' id='username' name='googlePlus' spellcheck='false' class='info_bubble' title='Numbers and letters. Can not start with a number.' value='https://plus.google.com/115201670001081131210/posts' />

                                </span>";

							}

							

							

							?>
                                
                                 <label for="username">Profile</label> 
                                
                                <textarea rows="" cols="" name="description" id="profile" class="info_bubble" 
                                style = "width: 300px; height:100px;" ><?php echo $_description; ?></textarea>
                                </span> <span class="form_row"> &nbsp;</span> </h3>
                              <h3 class="nomarginbottom medmargintop"><strong>What You Need To Do</strong> </h3>
                              <p align="justify"><br />
                                YOU MUST use the correct link: <strong>http://yourcompany.com/yourid</strong></p>
                              <p align="justify">Please be sure to click on the links to make sure you put the correct link in the card fields.</p>
                              <p align="justify">On the Smart Video Card: your referral link is on the  Logo, the Image, and the Second Scroll Banner with a Enroll Button, Linked with the <strong>http://yourcompany.com/yourid</strong> and on the Company Icon by the Facebook Icon.</p>
                              <span class="form_row"> </span> <span class="form_row"> &nbsp; </span> <span class="form_row">
                              <input type="submit" value="Continue" id="submit" name="submit" />
                              </span>
                            </form>
                          </div>
                        </div>
                        <div class="one-third column sidebar omega"> <img class="rounded shadowed" src="images/design<?php echo $template;?>.png" alt="" /> </div>
                      </div>
                    </div>
                  </div>
                  <div id="info_bubble"></div>
                  <div id="site_overlay_container"></div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
