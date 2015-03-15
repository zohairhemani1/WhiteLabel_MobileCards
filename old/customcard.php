<?php
	
	if($_POST)
	{
		include 'headers/image_upload.php';
		$username = $_POST['username'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$jobTitle = $_POST['jobTitle'];
		$officeNumber = $_POST['officeNumber'];
		$mobileNumber = $_POST['mobileNumber'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$website = $_POST['website'];
		$profilePicture = $_POST['profilePicture'];
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$linked = $_POST['linked'];
		$youtube = $_POST['youtube'];
		$googlePlus = $_POST['googlePlus'];
		$referLink = $_POST['referLink'];
		$facebookLink = $_POST['facebookLink'];
		$twitterLink = $_POST['twitterLink'];
		$linkedLink = $_POST['linkedLink'];
		$youtubeLink = $_POST['youtubeLink'];
		$googlePlusLink = $_POST['googlePlusLink'];
		
		
		
		$email = "info@thesmartercard.com";
		$subject = "New Custom Card";
		$msg = " Username: {$username} \n FirstName: {$first_name}\n LastName: {$last_name}\n Email: {$email}\n JobTitle: {$jobTitle}\n OfficeNumber: {$officeNumber}\n MobileNumber: {$mobileNumber}\n Address: {$address}\n City: {$city}\n Country: {$country}\n State: {$state}\n Website: {$website}\n Profile Picture: {$profilePicture} \n Facebook: {$facebook}\n Twitter: {$twitter}\n Linked: {$linked}\n Youtube: {$youtube}\n Google Plus: {$googlePlus} \n LOGO Link: http://www.thesmartercard.com/assets/upload/{$profilePic}\n Facebook Link: {$facebookLink} \n Twitter Link: {$twitterLink}\n Linked Link: {$linkedLink} \n Youtube Link: {$youtubeLink} \n Google Plus Link: {$googlePlusLink} \n";
		
		$headers = "From: info@thesmartercard.com" . "\r\n" .
				   "CC: zohairhemani1@gmail.com,vipdre12@gmail.com";
			mail($email,$subject,$msg,$headers);
		
		header('Location: thankyou.php');
				
	}
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Super User" />
<meta name="generator" content="Joomla! - Open Source Content Management" />
<title>Custom Form - Smarter Card</title>
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
                  <h2 class="title">Customized Card!</h2>
                </div>
                <div class="module-content">
                  <div id="container" class="container">
                    <div id="site_overlay"></div>
                    <div id="internal_wrap" class="row">
                      <div class="row clearfix">
                        <div class="two-thirds column alpha">
                          <div class="savvybox">
                            <h1>Welcome to Custom Card!</h1>
                            <hr />
                            <p>This quick form allows you to customize your card's according to your needs.</p>
                            
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
                            <form name="register" method="post" action="customcard.php" autocomplete="off" enctype="multipart/form-data">
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
                              
                              <!-- <span class="form_row">

                    <label for="email">Logo</label>

                    <input type="file" id="email" class="info_bubble" style="position:relative;" name="logo" spellcheck="false" value="" />

                                    </span>       --> 
                              
                              <span class="form_row additional_help"> 
                              
                              <!--<label for="username">Company</label> -->
                              
                              <input type="hidden" id="username" name="company" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="Genesis Global Network" />
                              </span>
                              <h3><span class="form_row additional_help">
                                <label for="username">Job Title</label>
                               	<select name="jobTitle">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                
                                <input type="text" id="username" name="jobTitleText" spellcheck="false" class="info_bubble" title="" value="" />
                                
                                
                                
                                </span> <span class="form_row additional_help">
                                <label for="username">Office #</label>
                              
                               	<select name="officeNumber">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                <input type="text" id="username" name="officeNumberText" spellcheck="false" class="info_bubble" title="" value="" />
                                
                                </span> <span class="form_row additional_help">
                                <label for="username">Mobile #</label>
                                
                               	<select name="mobileNumber">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                
                                <input type="text" id="username" name="mobileNumberText" spellcheck="false" class="info_bubble" title="" value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Address</label>
                                
                               	<select name="address">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                
                                <input type="text" id="username" name="addressText" spellcheck="false" class="info_bubble" title="" value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">City</label>
                             
                               	<select name="city">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select> 
                                <input type="text" id="username" name="cityText" spellcheck="false" class="info_bubble" title="" value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Country</label>
                             
                               	<select name="country">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                <input type="text" id="username" name="countryText" spellcheck="false" class="info_bubble" title="" value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">State</label>
                                
                               	<select name="state">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                <input type="text" id="username" name="stateText" spellcheck="false" class="info_bubble" title="" value="" />
                                </span> <span class="form_row additional_help"> 
                                
                                <label for="username">Website</label> 
                                
                               	<select name="website">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                <input type="text" id="username" name="websiteText" spellcheck="false" class="info_bubble" title="" value="" />
                                
                                </span> <span class="form_row additional_help"> 
                                
                                <!-- <label for="username">Youtube Video Link</label> -->
                                
                               
                                </span> <span class="form_row additional_help">
                                <label for="username">Profile Picture  <br/> Will agents / salespeople / memembers be able to add their unique image?</label> <br/>
                                
                               	<select name="profilePicture">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                </span> <span class="form_row additional_help">
                                <label for="username">Facebook <br/>  Will agents / salespeople / memembers be able to promote their unique pages, or only a single corporate FB page?</label>
                               
                               	<select name="facebook">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                </span> <span class="form_row additional_help">
                                <label for="username">Twitter <br/> Will agents / salespeople / memembers be able to promote their unique Twitter accounts, or only a single corporate Twitter account? </label>
                             
                               	<select name="twitter">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                </span> <span class="form_row additional_help">
                                <label for="username">Linked <br/> Will agents / salespeople / memembers be able to promote their unique Linkedin, or only a single corporate Linkedin accounts? </label>
                                
                               	<select name="linked">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                </span> <span class="form_row additional_help">
                                <label for="username">Youtube <br/> Will agents / salespeople / memembers be able to promote their unique Youtube Videos, or only a single corporate Youtube Video? </label>
                               
                               	<select name="youtube">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                </span> <span class="form_row additional_help">
                                <label for="username">Google Plus <br/>  Will agents / salespeople / memembers be able to promote their unique Google Plus, or only a single corporate Google Plusaccounts</label>
                                
                               	<select name="googlePlus">
                                      <option value="yes">YES</option>
                                      <option value="no">NO</option>
                                </select>
                                </span>
                                
                                
                                <br/>
                                <br/>
                                
                                <h2> Please provide us with the following details of your corporate company below: </h2>
                                <h3>This information will be used in your customers card's</h3>
                                </br/>
                                
                                <label for="username">LOGO</label>
                                <input type="file" id="username" name="file" spellcheck="false" class="info_bubble" value="<?php echo $_profilePic; ?>" /><br/>
                                </span> <br/> 
                                
                                <span class="form_row additional_help">
                                <label for="username">Facebook</label>
                                <input type="text" id="username" name="facebookLink" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Twitter</label>
                                <input type="text" id="username" name="twitterLink" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Linked</label>
                                <input type="text" id="username" name="linkedLink" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Youtube</label>
                                <input type="text" id="username" name="youtubeLink" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="" />
                                </span> <span class="form_row additional_help">
                                <label for="username">Google Plus</label>
                                <input type="text" id="username" name="googlePlusLink" spellcheck="false" class="info_bubble" title="Numbers and letters. Can not start with a number." value="" />
                                </span>
                                 
                                <span class="form_row additional_help"> 
                                
                                <!-- if it's an upgraded form -->
                                
                              
                                
                                <!--  <label for="username">Profile</label> -->
                                
                               
                                </span> <span class="form_row"> &nbsp;</span> </h3>
                              <!-- <h3 class="nomarginbottom medmargintop"><strong>What You Need To Do</strong> </h3>
                              <p align="justify"><br />
                                YOU MUST use the correct link: <strong>httpp://yourcompany.com/yourid</strong></p>
                              <p align="justify">Please be sure to click on the links to make sure you put the correct link in the card fields.</p>
                              <p align="justify">On the Smart Video Card: your referral link is on the  Logo, the Image, and the Second Scroll Banner with a Enroll Button, Linked with the h<strong>httpp://yourcompany.com/yourid</strong> and on the Company Icon by the Facebook Icon.</p>
                              <span class="form_row"> </span> <span class="form_row"> &nbsp; </span> --> 
                              <span class="form_row">
                              <input type="submit" value="Continue" id="submit" name="submit" />
                              </span>
                            </form>
                          </div>
                        </div>
                        <div class="one-third column sidebar omega"> <img class="rounded shadowed" src="images/design1.png" alt="" /> </div>
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
