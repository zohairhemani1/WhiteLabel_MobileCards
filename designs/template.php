<?php
    include '../headers/connect_to_mysql.php';    
    include '../headers/_user-details.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_fname . " " . $_lname . " - Biz Social Etc"; ?></title>
<link rel="stylesheet" href="/css/style3.css" type="text/css" />
<link rel="stylesheet" href="/css/media_queries3.css" type="text/css" />
<link href="../assets/css/jquery.bxslider.css" rel="stylesheet" />
<script src="../headers/jquery-1.10.2.js"></script>
<script src="../headers/jquery-1.10.2.min.js"></script>
<script src="../headers/email-validation.js"></script>
</head>

<body>
<div class="container">
  <div class="header">
    <div class="logo"> <a class="referlink" href="<?php echo $_referlink; ?>" target="_blank"> <img src="/assets/upload/<?php echo $_logo;?>" width="391" alt="logo" /> </a> </div>
  </div>
  <div class="content_inner">
    <div class="video_sec">
      <div class="video" id="youtube"> <?php echo $_video; ?> </div>
      <div class="clear"></div>
    </div>
    <div class="contact_info">
      <ul>
        <li><a href="tel:<?php echo $_office; ?>"><img src="/images/phone_ico_design_two.png" width="85" alt="phone" /></a></li>
        <li><a href="tel:<?php echo $_mobile; ?>"><img src="/images/mobile_ico_design_two.png" width="85" alt="phone" /></a></li>
        <li><a href="https://www.google.com/maps/place/<?php echo  "{$_address}+{$_city}+{$_country}+{$_sindh}"; ?>" target="_blank"><img src="/images/map_ico.png" width="85" alt="phone" /></a></li>
        <li><a href="mailto:<?php echo $_email; ?>"><img src="/images/mail_ico_design_two.png" width="85" alt="phone" /></a></li>
        <div class="clear"></div>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="author">
      <div class="author_detail">
        <h1><?php echo $_fname . " " . $_lname; ?></h1>
        <h2><?php echo $_jobTitle; ?></h2>
        <!-- <h2 style="margin-top:-10px;"><?php echo $_gender; ?></h2> -->
        <h3><span class="author_detail_cell"><a href="tel:<?php echo $_office; ?>"><?php echo $_office; ?></a></span></h3>
        <h3><span class="author_detail_office"><a href="tel:<?php echo $_office; ?>"><?php echo $_mobile; ?></a></span></h3>
        <h3><span class="author_detail_email"><a href="mailto:<?php echo $_email; ?>"><?php echo $_email; ?></a></span></h3>
        <address>
        <p><?php echo $_address; ?><br />
          <?php echo $_city; ?><br/>
          <?php echo $_country; ?> <?php echo $_state; ?><br/>
          <?php echo $_zip; ?>
          
        </p>
        </address>
      </div>
      <div class="author_img"> <a class="referlink" href="<?php echo $_referlink; ?>" target="_blank"> <img src="/assets/upload/<?php echo $_profilePic;?>" width="135" alt="author image" /></a> </div>
      <div class="clear"></div>
      <p class="disc"><?php echo $_description; ?> </p>
    </div>
    <p><!-- AWeber Web Form Generator 3.0 -->
<style type="text/css">
#af-form-864893877 .af-body .af-textWrap, #af-form-864893877 .af-body .af-selectWrap{width:98%;display:block;float:none;}
#af-form-864893877 .af-body input.text, #af-form-864893877 .af-body textarea{background-color:#FFFFFF;border-color:#919191;border-width:1px;border-style:solid;color:#000000;text-decoration:none;font-style:normal;font-weight:normal;font-size:12px;font-family:Verdana, sans-serif;}
#af-form-864893877 .af-body input.text:focus, #af-form-864893877 .af-body textarea:focus{background-color:#FFFAD6;border-color:#030303;border-width:1px;border-style:solid;}
#af-form-864893877 .af-body label.previewLabel{display:block;float:none;text-align:left;width:auto;color:#000000;text-decoration:none;font-style:normal;font-weight:normal;font-size:12px;font-family:Verdana, sans-serif;}
#af-form-864893877 .af-body{padding-bottom:15px;padding-top:15px;background-repeat:no-repeat;background-position:inherit;background-image:none;color:#000000;font-size:11px;font-family:Verdana, sans-serif;}
#af-form-864893877 .af-quirksMode{padding-right:10px;padding-left:10px;}
#af-form-864893877 .af-standards .af-element{padding-right:10px;padding-left:10px;}
#af-form-864893877 .buttonContainer input.submit{background-color:#c20606;background-image:url("http://forms.aweber.com/images/forms/pointer/alert/button.png");color:#FFFFFF;text-decoration:none;font-style:normal;font-weight:normal;font-size:14px;font-family:Verdana, sans-serif;}
#af-form-864893877 .buttonContainer input.submit{width:auto;}
#af-form-864893877 .buttonContainer{text-align:center;}
#af-form-864893877 button,#af-form-864893877 input,#af-form-864893877 submit,#af-form-864893877 textarea,#af-form-864893877 select,#af-form-864893877 label,#af-form-864893877 optgroup,#af-form-864893877 option{float:none;position:static;margin:0;}
#af-form-864893877 div{margin:0;}
#af-form-864893877 form,#af-form-864893877 textarea,.af-form-wrapper,.af-form-close-button,#af-form-864893877 img{float:none;color:inherit;position:static;background-color:none;border:none;margin:0;padding:0;}
#af-form-864893877 input,#af-form-864893877 button,#af-form-864893877 textarea,#af-form-864893877 select{font-size:100%;}
#af-form-864893877 select,#af-form-864893877 label,#af-form-864893877 optgroup,#af-form-864893877 option{padding:0;}
#af-form-864893877,#af-form-864893877 .quirksMode{width:100%;max-width:289px;}
#af-form-864893877.af-quirksMode{overflow-x:hidden;}
#af-form-864893877{background-color:#FFFFFF;border-color:transparent;border-width:1px;border-style:solid;}
#af-form-864893877{display:block;}
#af-form-864893877{overflow:hidden;}
.af-body .af-textWrap{text-align:left;}
.af-body input.image{border:none!important;}
.af-body input.submit,.af-body input.image,.af-form .af-element input.button{float:none!important;}
.af-body input.text{width:100%;float:none;padding:2px!important;}
.af-body.af-standards input.submit{padding:4px 12px;}
.af-clear{clear:both;}
.af-element label{text-align:left;display:block;float:left;}
.af-element{padding:5px 0;}
.af-form-wrapper{text-indent:0;}
.af-form{text-align:left;margin:auto;}
.af-quirksMode .af-element{padding-left:0!important;padding-right:0!important;}
.af-usaddress input{margin-bottom:5px;}
.af-usaddress{padding:6px 0;}
.lbl-right .af-element label{text-align:right;}
body {
}
</style>
<form method="post" class="af-form-wrapper" accept-charset="iso-8859-1" action="http://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="864893877" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist3530712" />
<input type="hidden" name="redirect" value="http://thesmarter.com/thankyou.html" id="redirect_3e6556e77fa149ecdbfb911e84cf1840" />

<input type="hidden" name="meta_adtracking" value="oncard1" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email,custom Phone,custom US Address (ZIP Code)" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-864893877" class="af-form"><div id="af-body-864893877"  class="af-body af-standards">
<div class="af-element">
<label class="previewLabel" for="awf_field-64842777">Name: </label>
<div class="af-textWrap">
<input id="awf_field-64842777" type="text" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element">
<label class="previewLabel" for="awf_field-64842778">Email: </label>
<div class="af-textWrap"><input class="text" id="awf_field-64842778" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element">
<label class="previewLabel" for="awf_field-64842779">Phone:</label>
<div class="af-textWrap"><input type="text" id="awf_field-64842779" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element">
<label class="previewLabel" for="awf_field-64842780zip">ZIP Code:</label>
<div class="af-textWrap"><input id="awf_field-64842780zip" type="text" class="text" name="custom US Address (ZIP Code)" tabindex="503" /></div> 
<div class="af-clear"></div></div>
<div class="af-element buttonContainer">
<input name="submit" id="af-submit-image-864893877" type="image" class="image" style="background: none; max-width: 100%;" alt="Submit Form" src="http://forms.aweber.com/images/forms/pointer/alert/button.png" tabindex="504" />
<div class="af-clear"></div>
</div>
</div>
</div>
<div style="display: none;"><img src="http://forms.aweber.com/form/displays.htm?id=HGwsHJzMHOzs" alt="" /></div>
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-864893877")) {
                document.getElementById("af-form-864893877").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-864893877")) {
                document.getElementById("af-body-864893877").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-864893877")) {
                document.getElementById("af-header-864893877").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-864893877")) {
                document.getElementById("af-footer-864893877").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>

<!-- /AWeber Web Form Generator 3.0 -->&nbsp;</p>
    <div class="disclaimer">
      <p class="info_p">*To automatically import my information to your cell
        
        
        
      phone or address book, enter your email address below and press <span>add to contact</span> button.</p>
      <div class="btn_box">
        <form method="post" action="/vcard_example.php?username=<?php echo $username;?>" name="referralForm" onsubmit="return validateForm()">
          <input type="email" id="txt" name="emailReferral" placeholder="Enter Your Email Address" />
          <input type="submit" value="ADD TO CONTACTS" id="sbmt" />
        </form>
      </div>
    </div>
    <div class="banner_box">
      <ul class="bxslider" style="position: absolute; left:0;">
        <li>
          <center>
            <a href="http://thesmartercard.com" target="_blank"><img src="/images/sliderimage1.jpg" /></a>
          </center>
        </li>
        
        <!-- <li>



                    <center>



                        <img src="/images/sliderimagethree.jpg" />



                    </center>



                  </li>



                  <!-- <li>



                    <center>



                        <img src="/images/sliderimagethree.jpg" />



                    </center>



                  </li>



                  <li>



                    <center>



                        <img src="/images/sliderimagefour.jpg" />



                    </center>



                  </li>



                  <li>



                    <center>



                        <img src="/images/sliderimagefive.png" />



                    </center>



                  </li> -->
        
      </ul>
    </div>
    <div class="footer"> <a  class="main" href="<?php echo $_referlink; ?>" target="_blank"><?php echo $_referlink; ?></a>
      <ul>
        <li><a class="referlink" href="<?php echo $_referlink; ?>" target="_blank">refer link</a></li>
        <li><a class="facebook" href="<?php echo $_facebook; ?>" target="_blank">facebook</a></li>
        <li><a class="twitter" href="<?php echo $_twitter; ?>" target="_blank">twitter</a></li>
        <li><a class="google" href="<?php echo $_google; ?>" target="_blank">google</a></li>
        <li><a class="linkedin" href="<?php echo $_linked; ?>" target="_blank">linkedin</a></li>
        <li><a class="youtube" href="<?php echo $_youtube; ?>" target="_blank">youtube</a></li>
        <div class="clear"></div>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <!--content_inner-->
  
  <div class="clear"></div>
</div>
<div align="center"> 
  <script>



	



	$('#youtube').html(function(i, html) {



	



		return html.replace(/(?:http:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g, '<iframe width="454" height="340"  style = "max-width:100%;" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>');



	



	});







  </script> 
  <script src="/assets/js/jquery.bxslider.min.js"></script> 
  <script type="text/javascript">



    



    $('.bxslider').bxSlider({



      auto: true,



      autoControls: false,



      infiniteLoop: true



    });



  </script> 
  Copyright TheSmarterCard 2014. All rights reserved </div>
</body>
</html>
