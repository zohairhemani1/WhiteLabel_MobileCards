<?php
	
	include 'headers/client-details.php';

	if($_POST)
	{
	
		include 'headers/connect_to_mysql.php';
		
		
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['c_password'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$activationKey = md5(microtime().rand());    // Generating Random Activation Key and inserting in database 
		//$subject = "Please verify your new account at {$username_client}";
		//$message = "Thank you for registering for {$username_client} Beta!\nPlease click the link below to activate your account.\nClick here to activate your account.\n{$domain_client}/account-activation.php?activate=$activationKey\nClicking on this link will lead you to a page that verifies your successful registration, and will provide a link for customizing your very first {$username_client}!\n\nYour Username Is: {$username}\nYour Password Is: {$password}\n\nTo view and/or share your card, go to {$domain_client}/cards/{$username}\n\n If you have any questions, please email {$username_client} at {$email_client}";
		
		
		$query_username = "SELECT * FROM registeration WHERE username like '$username'";
		$result_username = mysqli_query($con,$query_username);
		$count = mysqli_num_rows($result_username);
		
		
		if($password != $confirmPassword)
		{
				$error = "Password Doesn't Match";
		}
		
		elseif($count!=0)
		{
			$error = "Username Already Exists";
		}
		elseif(!(filter_var($email, FILTER_VALIDATE_EMAIL)))
		{
				$error = "Email Address Not Valid";
		}
		
		elseif(!isset($_POST['agreement']))
		{
			$error = "You must agree to our terms and conditions.";
		}
		
		
		else
		{
		
		
			$query = "INSERT INTO registeration(fname,lname,password,email,username,activationKey) VALUES('$firstName','$lastName','$password','$email','$username','$activationKey')";
			$result = mysqli_query($con,$query);
			//$headers = "From: {$email_client}" . "\r\n";
			//mail($email,$subject,$message,$headers);
			
			header('Location: login.php');		
		
			
		}	
		
		
	}

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" slick-uniqueid="3"><head></head><body class="mainstyle-community-a backgroundlevel-high font-family-fresco font-size-is-default logo-type-fresco menu-type-fusionmenu typography-style-light col12 option-com-content menu-styles">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="Super User">
<meta name="generator" content="Joomla! - Open Source Content Management">
<title>Register</title>
<link rel="stylesheet" href="http://www.bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-style.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/libraries/gantry/css/grid-12.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/gantry-core.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/joomla-core.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/community-a.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/community-a-extensions.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/utilities.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/typography.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/demo-styles.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/template.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/template-webkit.css" type="text/css">
<link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/fusionmenu.css" type="text/css">
<link rel="stylesheet" href="css/custom.css" type="text/css" />

<!-- Style sheet of Saaainnnnvvvvvy Cards -->

<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/skeleton.css">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/main.css">

<!-- Ends here csss s . c--->

<style type="text/css"></style>
<script src="http://www.bizsocialetc.info/media/system/js/mootools-core.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/media/system/js/core.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/media/system/js/caption.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/media/system/js/mootools-more.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/plugins/system/rokbox/rokbox.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-config.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/templates/rt_fresco/js/gantry-totop.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/templates/rt_fresco/js/load-transition.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/modules/mod_roknavmenu/themes/fusion/js/fusion.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/modules/mod_rokajaxsearch/js/rokajaxsearch.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<div id="rt-page-surround">
  <div class="main-bg">
    <div class="rt-container">
      <div id="rt-drawer">
        <div class="clear"></div>
      </div>
      
      
      <?php include 'headers/navigation.php';?>
      
      
      
      
      <div id="rt-transition" class="rt-visible">
        <div id="rt-showcase">
          <div class="rt-grid-12 rt-alpha rt-omega">
            <div class="rt-block">
              <div class="module-surround">
                <div class="module-title">
                  <h2 class="title">Get your Card</h2>
                </div>
                <div class="module-content">
                  <div id="container" class="container">
                    <div id="site_overlay"></div>
                    <div id="internal_wrap" class="row">
                      <div class="row clearfix">
                        <div class="two-thirds column alpha">
                          <div class="savvybox">
                            <h1>Registering is Simple!</h1>
                         
                            <hr>
                            
                            
                            <p>
                           	
                            Once you have created your <?php echo $username_client;?>, you can send to all of your friends and social media contacts. Have fun sharing all day long – All in one place!!
                            
                            
                           </p>
                            
                            
                            
                            <?php
	
								if(isset($error)){
								
								echo "<div id='system-message-container'>
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
                            
                            
                            
                            
                            
                            
                           <!-- <p> <?php echo $username_client;?> is currently in OPEN BETA. If you run across any bugs or usability issues, please use the "Feedback" link at the bottom of any page or card to let us know. We absolutely LOVE hearing from our users because it's the only way we can improve the product so it becomes everything you want it to be!</p> -->
                           
                           
                           	
                            <hr>
                            <form name="register" method="post" action="register.php" autocomplete="off">
                              <span class="form_row">
                                                            <label for="first_name">First Name</label>
                              <input type="text" id="first_name" name="first_name" spellcheck="false" value="">
                              </span> <span class="form_row">
                              <label for="last_name">Last Name</label>
                              <input type="text" id="last_name" name="last_name" spellcheck="false" value="">
                              </span> <span class="form_row">
                              <label for="email">Email</label>
                              <input type="text" id="email" class="info_bubble" style="position:relative;" title="eg: name@email.com" name="email" spellcheck="false" value="">
                              </span> <span class="form_row">
                              <label for="password">Set Password</label>
                              <input type="password" id="password" class="info_bubble" title="Minimum 6 characters, Case-sensitive" name="password" value="">
                              </span> <span class="form_row">
                              <label for="c_password">Confirm Password</label>
                              <input type="password" id="c_password" name="c_password" value="">
                              </span> <span class="form_row"> &nbsp; </span> <span class="form_row additional_help">
                              <label for="username">Username:</label>
                              <?php echo $domain_client;?>
                              <input type="text" id="username" name="username" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="">
                              </span>
                              <p style="padding: 0;"><b>Example:</b> david, davidsmith, abcplumbing</p>
                              <p style="padding: 0;">Your username is your identifier on  and <strong>cannot be changed once you have set it</strong>.</p>
                              <span class="form_row"> &nbsp; </span> <span class="form_row">
                              <input type="checkbox" name="agreement" id="agreement">
                              I am over 13 years of age AND I agree with the <a href="assets/terms-conditions.doc" target="_blank"> Mobi Power Card Terms of Use and Privacy Policy</a>. </span> <span class="form_row"> &nbsp; </span> <span class="form_row">
                              <input type="submit" value="Continue" id="submit" name="submit">
                              </span>
                            </form>
                          </div>
                        </div>
                        <div class="one-third column sidebar omega"> <img class="rounded shadowed" src="images/design1.png" alt=""> </div>
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


<div id="rokbox-overlay" class="rokbox-overlay" style="opacity: 0; display: none; position: absolute; top: 0px; left: 0px; cursor: pointer; background-color: rgb(0, 0, 0); z-index: 65550;"></div><div id="rokbox-wrapper" class="rokbox-clean" style="position: absolute; z-index: 65555; opacity: 0; display: none; top: 376px; left: 760px;"><div id="rokbox-top" class="rokbox-left"><div class="rokbox-right"><div class="rokbox-center"></div></div></div><div id="rokbox-middle" class="rokbox-left"><div class="rokbox-right"><div class="rokbox-center"><a id="rokbox-close" href="#"><span>[x] close</span></a></div></div></div><div id="rokbox-bottom" class="rokbox-left"><div class="rokbox-right"><div class="rokbox-center"></div></div></div><div class="clr"></div></div></body></html>