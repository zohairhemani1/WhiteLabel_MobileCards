<?php

	$pass = $_GET['pass'];
	$user = $_GET['user'];
	$email = $_GET['email'];


if($_POST)
{

	
	
	include 'headers/connect_to_mysql.php';
	
	
	$query = "SELECT * FROM reset_password WHERE username like '$user'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	
	if($count==1)
	{
		
		$resetKey = $row['resetkey'];
		if($resetKey == $pass)
		{
			
			$password = $_POST['password'];
			$verifyPassword = $_POST['verifyPassword'];
			
			if($password == $verifyPassword)
			{
				
				$query = "UPDATE registeration SET password = '$password' WHERE username = '$user'";
				mysqli_query($con,$query);
				$error = "Password Changed.";
					
			}
			else
			{
				$error = "Password doesnot match.";	
			}
					
			
				
		}
		
		else
		{
			$error = "Your Activation Link is not correct. Go to this link to reset your password link http://www.bizsocialetc.info/forget-password.php";	
		}
		
			
	}
	else
	{
		$error = "Username {$user} Doesnot Exist.";	
	}
	
	
}
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Reset Password</title>
  <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-style.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/libraries/gantry/css/grid-12.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/gantry-core.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/joomla-core.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/community-a.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/community-a-extensions.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/utilities.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/typography.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/demo-styles.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/template.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/template-webkit.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/templates/rt_fresco/css/fusionmenu.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/modules/mod_pwebcontact/css/general/default-bottom.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bizsocialetc.info/modules/mod_pwebcontact/css/default/dark.css" type="text/css" />
  <link rel="stylesheet" href="css/custom.css" type="text/css" />
  <style type="text/css"></style>
  <script src="http://www.bizsocialetc.info/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/media/system/js/core.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/media/system/js/validate.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/plugins/system/rokbox/rokbox.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-config.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/templates/rt_fresco/js/gantry-totop.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/libraries/gantry/js/browser-engines.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/templates/rt_fresco/js/load-transition.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/modules/mod_roknavmenu/themes/fusion/js/fusion.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/modules/mod_pwebcontact/js/mootools.pwebcontact.js" type="text/javascript"></script>
  <script src="http://www.bizsocialetc.info/modules/mod_rokajaxsearch/js/rokajaxsearch.js" type="text/javascript"></script>

  <!--[if lte IE 7]>
<link rel="stylesheet" href="/modules/mod_pwebcontact/css/default/dark-ie.css" type="text/css" />
<![endif]-->
  </head>
  <body  class="mainstyle-community-a backgroundlevel-high font-family-fresco font-size-is-default logo-type-fresco menu-type-fusionmenu typography-style-light col12 option-com-users menu-login">
  <div id="rt-page-surround">
    <div class="main-bg">
      <div class="rt-container">
        <div id="rt-drawer">
          <div class="clear"></div>
        </div>
        
        
        <?php include 'headers/navigation.php';?>
        
        
        <div id="rt-transition" class="rt-hidden">
          <div id="rt-breadcrumbs" class="rt-transparent-bg">
            <div class="rt-block">
              <div class="rt-breadcrumb-surround"> 
                <!-- PWebContact -->
                <div id="pwebcontact164" class="pwebcontact dark default default-bottom " style="" dir="ltr">
                  <div id="pwebcontact164_toggler" class="pwebcontact_toggler pwebcontact164_toggler dark default default-bottom " style="">Contact Us
                    <div class="icon"></div>
                  </div>
                  <div id="pwebcontact164_box" class="pwebcontact_box" style="display:none">
                    <div id="pwebcontact164_container" class="pwebcontact_container">
                      <form action="/index.php?http://bizsocialetc_info/login_php=&amp;Itemid=225" method="post" name="pwebcontact" id="pwebcontact164_form" class="pwebcontact164_form pwebcontact_form form-validate dark default default-bottom ">
                        <div id="pwebcontact164_msg" class="pwebcontact_msg"><img src="/modules/mod_pwebcontact/images/loading.gif" width="16" height="16" border="0" alt="" /></div>
                        <div class="pwebcontact_pretext">
                          <center>
                            <h2> Contact Us </h2>
                          </center>
                          <i><u>Fill out the form below if you have any queries and we will get back to you as soon as possible<b</u></div>
                        <div class="pwebcontact_fields">
                          <div class="pwebcontact_field">
                            <label for="pwebcontact164_name">Name </label>
                            <input type="text" name="name" id="pwebcontact164_name" size="30" class="inputbox" value="" />
                            <div class="pweb_clear"></div>
                          </div>
                          <div class="pwebcontact_field">
                            <label for="pwebcontact164_email" class="required">Email <span class="pwebcontact_asterisk">*</span></label>
                            <input type="text" name="email" id="pwebcontact164_email" size="30" class="inputbox validate-email required" value="" />
                            <div class="pweb_clear"></div>
                          </div>
                          <div class="pwebcontact_field">
                            <label for="pwebcontact164_phone" class="required">Phone <span class="pwebcontact_asterisk">*</span></label>
                            <input type="text" name="phone" id="pwebcontact164_phone" size="30" class="inputbox required" value="" />
                            <div class="pweb_clear"></div>
                          </div>
                          <div class="pwebcontact_field">
                            <label for="pwebcontact164_message" class="required">Message <span class="pwebcontact_asterisk">*</span></label>
                            <textarea cols="50" rows="10" name="message" id="pwebcontact164_message" class="inputbox required"></textarea>
                            <div class="pweb_clear"></div>
                          </div>
                          <div class="pwebcontact_buttons">
                            <label class="inline">
                              <input type="checkbox" name="copy" value="1" />
                              <span>Send a copy to yourself</span></label>
                          </div>
                          <div class="pwebcontact_buttons">
                            <input type="submit" name="Submit" class="button validate" value="Send" />
                            <input type="button" id="pwebcontact164_new" class="button reset" value="New email" style="display:none" />
                          </div>
                        </div>
                        <input type="hidden" name="user_id" value="0"/>
                        <input type="hidden" name="ip" value="42.201.248.93"/>
                        <input type="hidden" name="title" value="Login"/>
                        <input type="hidden" name="referrer" value="http://bizsocialetc.info/index.php?option=com_users&view=reset&Itemid=225"/>
                        <input type="hidden" name="mid" value="164"/>
                        <input type="hidden" name="8a4f2be12645f3768af71696948a5b64" value="1" id="pwebcontact164_token"/>
                      </form>
                    </div>
                    <div id="pwebcontact164_bg" class="pwebcontact_bg"></div>
                  </div>
                </div>
                <script type="text/javascript">
(function($){pwebContact164=new pwebContact({id:"164",basePath:"",charsLimit:0,onEmailSuccess:function(){},layout:"default"});})(document.id);</script> 
                <!-- PWebContact end --> </div>
            </div>
            <div class="clear"></div>
          </div>
          <div id="rt-main" class="mb12">
            <div class="rt-container">
              <div class="rt-grid-12">
                <div class="rt-block component-block">
                  <div class="component-content">
                    <div class="reset">
                      <form id="user-registration" action="reset-password.php?pass=<?php echo $pass;?>&user=<?php echo $user;?>&email=<?php echo $email;?>" method="post" class="form-validate">
                        <p>Please enter a new password below:</p>
                        <?php
	
					if(isset($error)){
					
					echo "<div id='system-message-container'>
								<dl id='system-message'>
								<dt class='error'>Error</dt>
								<dd class='error message' style='width:400px;'>
									<ul>
										<li style='text-align:center;'>$error</li>
									</ul>
								</dd>
								</dl>
							</div>";
					}
					
				?>
                        <fieldset>
                          <dl>
                            <dt>
                              <label id="jform_email-lbl" for="jform_email" class="hasTip required" title="Email Address::Please enter the email address associated with your User account.&lt;br /&gt;A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.">Enter New Password:<span class="star">&#160;*</span></label>
                            </dt>
                            <dd>
                              <input type="text" name="password" id="jform_email" value="" class="validate-username required" size="30"/>
                            </dd>
                            <dt></dt>
                            <dd></dd>
                          </dl>
                        </fieldset>
                        <fieldset>
                          <dl>
                            <dt>
                              <label id="jform_email-lbl" for="jform_email" class="hasTip required" title="">Verify Password: *<span class="star"></span></label>
                            </dt>
                            <dd>
                              <input type="text" name="verifyPassword" id="jform_email" value="" class="validate-username required" size="30"/>
                            </dd>
                            <dt></dt>
                            <dd></dd>
                          </dl>
                        </fieldset>
                        <div>
                          <button type="submit" class="validate" style="height:40px;" >Submit</button>
                          <input type="hidden" name="8a4f2be12645f3768af71696948a5b64" value="1" />
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rt-footer-surround">
      <div class="rt-container">
        <div class="rt-footer-inner">
          <div id="rt-copyright">
            <div class="rt-grid-4 rt-prefix-4 rt-alpha">
              <div class="rt-block"> <span class="copytext">&copy; 2013 - Developed by <a href="http://www.mobipowerapps.com" target="_blank">MobiPowerApps</a></span> </div>
            </div>
            <div class="rt-grid-4 rt-omega"> <a href="#" class="rt-totop"></a> </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
