<?php

		if($_POST)
		{
			include 'headers/connect_to_mysql.php';
			include 'headers/client-details.php';
			$error=1;
			$name = $_POST['name'];
			$email_contact = $_POST['email'];
			$email = $email_client;
			$subject_contact = $_POST['subject'];
			$subject = "New Message! - {$username_client}";
			$message_contact = $_POST['message'];
			$message_email = "Name: {$name} \nEmail: {$email}\nSubject:{$subject_contact} \nMessage: {$message_contact}";
			
				$headers = "From: {$email_client}" . "\r\n" .
					   "CC: zohairhemani1@gmail.com,vipdre12@gmail.com";
				mail($email,$subject,$message_email,$headers);
		}
		
		if($_POST['checkbox'] == 1)
		{
			mail($email_contact,$subject,$message_email,$headers);
		}
		
		

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="generator" content="Joomla! - Open Source Content Management" />
<title>Contact Us</title>
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
<link rel="stylesheet" href="css/custom.css" type="text/css" />
<style type="text/css">
.rt-container .rt-grid-8 {
	width:900px;
}
</style>
<script src="http://www.bizsocialetc.info/media/system/js/mootools-core.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/media/system/js/core.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/media/system/js/mootools-more.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/plugins/system/rokbox/rokbox.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/plugins/system/rokbox/themes/clean/rokbox-config.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/templates/rt_fresco/js/gantry-totop.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/templates/rt_fresco/js/load-transition.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/modules/mod_roknavmenu/themes/fusion/js/fusion.js" type="text/javascript"></script>
<script src="http://www.bizsocialetc.info/modules/mod_rokajaxsearch/js/rokajaxsearch.js" type="text/javascript"></script>
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
        <div id="rt-main" class="mb8-sa4">
          <div class="rt-container">
            <div class="rt-grid-8">
              <div class="rt-block component-block">
                <div class="component-content">
                  <?php
                	
					if(isset($error))
					{
						echo "<div id='system-message-container'>
								<dl id='system-message'>
								<dd class='message message'>
									<ul>
										<li>Thank you for your email.</li>
									</ul>
								</dd>
								</dl>
								</div>";					}
					
				?>
                  <div class="contact">
                    <dl class="tabs" id="contact-slider">
                      <dt style="display:none;"></dt>
                      <dd style="display:none;"> </dd>
                      <dt class="tabs display-form open" style="cursor: pointer;"><span>
                        <h3><a href="contact.php">Contact Form</a></h3>
                        </span></dt>
                      <!--<dt class="tabs display-misc closed" style="cursor: pointer;"><span>
                          <h3><a href="javascript:void(0);">Other information</a></h3>
                          </span></dt> -->
                    </dl>
                    <div class="current">
                      <dd class="tabs" style="display: none;">
                        <div class="contact-image"> <img src="/images/logo_biz.png" alt="Contact-image" align="middle"> </div>
                        <p class="contact-position">Biz Social Etc Help Desk</p>
                        <div class="contact-address"> <span class="jicons-icons"> <img src="/media/contacts/images/con_address.png" alt="Address: "> </span>
                          <address>
                          <span class="contact-street"> Atlantic Avenue<br>
                          New Smyrna Beach </span> <span class="contact-suburb"> Florida </span> <span class="contact-state"> WA </span> <span class="contact-postcode"> 32169 </span> <span class="contact-country"> United States of America </span>
                          </address>
                        </div>
                        <div class="contact-contactinfo">
                          <p> <span class="jicons-icons"> <img src="/media/contacts/images/con_tel.png" alt="Phone: "> </span> <span class="contact-telephone"> (888) 781-6481 </span> </p>
                          <p> <span class="jicons-icons"> <img src="/media/contacts/images/con_fax.png" alt="Fax: "> </span> <span class="contact-fax"> 1.772.530.0444 </span> </p>
                          <p> <span class="jicons-icons"> <img src="/media/contacts/images/con_mobile.png" alt="Mobile: "> </span> <span class="contact-mobile"> +1 555-555-5555 </span> </p>
                          <p> <span class="jicons-icons"> </span> <span class="contact-webpage"> <a href="http://www.bizsocialetc.info" target="_blank"> http://www.bizsocialetc.info</a> </span> </p>
                        </div>
                        <p></p>
                      </dd>
                      <dd class="tabs" style="display: block;">
                        <div class="contact-form">
                          <form id="contact-form" action="contact.php" method="post" class="form-validate">
                            <fieldset>
                              <legend>Send an email. All fields with an * are required.</legend>
                              <dl>
                                <dt>
                                  <label id="jform_contact_name-lbl" for="jform_contact_name" class="hasTip required" title="">Name<span class="star">&nbsp;*</span></label>
                                </dt>
                                <dd>
                                  <input type="text" name="name" id="jform_contact_name" value="" class="required" size="30" aria-required="true" required="required">
                                </dd>
                                <dt>
                                  <label id="jform_contact_email-lbl" for="jform_contact_email" class="hasTip required" title="">Email<span class="star">&nbsp;*</span></label>
                                </dt>
                                <dd>
                                  <input type="email" name="email" class="validate-email required" id="jform_contact_email" value="" size="30" aria-required="true" required="required">
                                </dd>
                                <dt>
                                  <label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasTip required" title="">Subject<span class="star">&nbsp;*</span></label>
                                </dt>
                                <dd>
                                  <input type="text" name="subject" id="jform_contact_emailmsg" value="" class="required" size="60" aria-required="true" required="required">
                                </dd>
                                <dt>
                                  <label id="jform_contact_message-lbl" for="jform_contact_message" class="hasTip required" title="">Message<span class="star">&nbsp;*</span></label>
                                </dt>
                                <dd>
                                  <textarea name="message" id="jform_contact_message" cols="50" rows="10" class="required" aria-required="true" required="required"></textarea>
                                </dd>
                                <dt>
                                  <label id="jform_contact_email_copy-lbl" for="jform_contact_email_copy" class="hasTip" title="">Send copy to yourself</label>
                                </dt>
                                <dd>
                                  <input type="checkbox" name="checkbox" id="jform_contact_email_copy" value="">
                                </dd>
                                <dt></dt>
                                <dd>
                                  <button class="button validate" type="submit">Send Email</button>
                                  <input type="hidden" name="option" value="com_contact">
                                  <input type="hidden" name="task" value="contact.submit">
                                  <input type="hidden" name="return" value="">
                                  <input type="hidden" name="id" value="1:contact-us">
                                  <input type="hidden" name="77aa963bced3f8e981e00c6bc2189afa" value="1">
                                </dd>
                              </dl>
                            </fieldset>
                          </form>
                        </div>
                      </dd>
                      <dd class="tabs" style="display: none;">
                        <div class="contact-miscinfo">
                          <div class="jicons-icons"> <img src="/media/contacts/images/con_info.png" alt="Other information: "> </div>
                          <div class="contact-misc">
                            <p>Email us if you have any queries and we will get back to you as soon as possible.</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </dd>
                    </div>
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
            <div class="rt-block"> <span class="copytext">&copy; 2013 - Developed by Mobi Power Apps</span> </div>
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
