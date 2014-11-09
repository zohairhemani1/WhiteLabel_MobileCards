<?php
	
	if($_POST)
	
	{
		include 'headers/connect_to_mysql.php';
		include 'headers/client-details.php';
		$email = $_POST['email'];
		$subject = "Forget Username - {$username_client}";
		$headers = "From: {$email_client}" . "\r\n" . "CC: zohairhemani1@gmail.com,vipdre12@gmail.com";
		
		$query = "SELECT username from registeration WHERE email like '$email'";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		$users = array();
		$msg="Username's associated with your email: \n";
		
		if($count >= 1 )
		{
		
			$count = 0;
			while($row = mysqli_fetch_array($result))
			{
					
								
					$users[$count] = $row['username'];
					
					$msg .= $count+1 . " - ". $users[$count]. "\n";
					$count++;
					
					
					
			}
			
			mail($email,$subject,$msg,$headers);
			
			$error = "Your username has been Emailed to you. ";
		}
		
		else
		{
			$error = "There is no username registered via this email.";
		}
		
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Reset Username</title>
  <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
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
  <link rel="stylesheet" href="http://bizsocialetc.info/modules/mod_pwebcontact/css/general/default-bottom.css" type="text/css" />
  <link rel="stylesheet" href="http://bizsocialetc.info/modules/mod_pwebcontact/css/default/dark.css" type="text/css" />
  <link rel="stylesheet" href="css/custom.css" type="text/css" />
  <style type="text/css"></style>
  <script src="http://bizsocialetc.info/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/media/system/js/core.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/media/system/js/validate.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/plugins/system/rokbox/rokbox.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-config.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/templates/rt_fresco/js/gantry-totop.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/libraries/gantry/js/browser-engines.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/templates/rt_fresco/js/load-transition.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/modules/mod_roknavmenu/themes/fusion/js/fusion.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/modules/mod_pwebcontact/js/mootools.pwebcontact.js" type="text/javascript"></script>
  <script src="http://bizsocialetc.info/modules/mod_rokajaxsearch/js/rokajaxsearch.js" type="text/javascript"></script>

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
                        <input type="hidden" name="referrer" value="http://bizsocialetc.info/index.php?option=com_users&view=remind&Itemid=225"/>
                        <input type="hidden" name="mid" value="164"/>
                        <input type="hidden" name="17973fb8a068780a934f79b1d331adf4" value="1" id="pwebcontact164_token"/>
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
                    <div class="remind">
                      <form id="user-registration" action="reset-username.php" method="post" class="form-validate">
                        <p>Please enter the email address associated with your User account. Your username will be emailed to the email address on file.</p>
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
                        <fieldset>
                          <dl>
                            <dt>
                              <label id="jform_email-lbl" for="jform_email" class="hasTip required" title="Email Address::Please enter the email address associated with your User account.&lt;br /&gt; Your username will be emailed to the email address on file.">Email Address:<span class="star">&#160;*</span></label>
                            </dt>
                            <dd>
                              <input type="text" name="email" class="validate-email required" id="jform_email" value="" size="30"/>
                            </dd>
                            <dt></dt>
                            <dd></dd>
                          </dl>
                        </fieldset>
                        <div>
                          <button type="submit" class="validate" style="height:40px;">Submit</button>
                          <input type="hidden" name="17973fb8a068780a934f79b1d331adf4" value="1" />
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
