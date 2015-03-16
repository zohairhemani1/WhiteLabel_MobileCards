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

<link rel="stylesheet" href="../css/style2.css" type="text/css" />

<link rel="stylesheet" href="../css/media_queries2.css" type="text/css" />



<link href="../assets_card/css/jquery.bxslider.css" rel="stylesheet" />



<script src="../headers/jquery-1.10.2.js"></script>

<script src="../headers/jquery-1.10.2.min.js"></script>

<script src="../headers/email-validation.js"></script>

</head>



<body>

<div class="container">

  <div class="header">

    <div class="logo2"><a href="#"><img src="../assets/upload/<?php echo $_logo;?>" width="100%" alt="logo" /></a></div>

    <div class="people_img"> 

      <!--<img src="images/people.png" alt="" width="110" />--> 

    </div>

    <div class="clear"></div>

  </div>

  <div class="author">

    <div class="author_detail">

      <h1><?php echo $_fname . " " . $_lname; ?></h1>

      <h2><?php echo $_company; ?></h2>
      
      <!-- <h2><?php echo $_gender; ?></h2> -->

      <ul>

        <li class="mob"><a href="tel:<?php echo $_mobile; ?>"><?php echo $_mobile; ?></a></li>

        <li class="tel"><a href="tel:<?php echo $_office; ?>"><?php echo $_office; ?></a></li>

        <li class="mail"><a href="mailto:<?php echo $_email; ?>"><?php echo $_email; ?></a></li>
        
         <address>
            <p style="margin-left:-5px;"><?php echo $_address; ?><br />
              <?php echo $_city; ?><br/>
              <?php echo $_country; ?> <?php echo $_state; ?><br/>
              <?php echo $_zip; ?>
              
            </p>
        </address>

      </ul>

    </div>

    <div class="author_img"> <img src="../assets/upload/<?php echo $_profilePic;?>" width="150" alt="" /> </div>

    <div class="clear"></div>

    <p><?php echo $_description; ?></p>

  </div>

  <div class="video_sec">

    <div class="video_heading">

      <h3>my social swag</h3>

    </div>

    <div class="video" id="youtube"> 

      <!--<img src="images/vid.jpg" width="464" alt="" />--> 

      <!--<iframe id="ytplayer" class="youtube-player" type="text/html" width="454" height="340" src="https://www.youtube-nocookie.com/embed/3S6A99fff-Q?wmode=opaque&autoplay=1&loop=1&playlist=51FPDecJGM0"  style="max-width:100%;" frameborder="0" allowfullscreen></iframe> -->

      

     <?php echo $_video; ?>

     

     

      <div class="clear"></div>

    </div>

    <div class="clear"></div>

  </div>

  <div class="disclaimer"> 

    

    <!--HTML FOR NEW INPUT BOX-->

    <p class="info_p">*To automatically import my information to your cell

      phone or address book, enter your email address below and press <span>add to contact</span> button.</p>

    <div class="btn_box" style="padding-bottom: 30px;" >

      <form method="post" action="/vcard_example.php?username=<?php echo $username;?>" name="referralForm" onsubmit="return validateForm()">

        <input type="email" id="txt" name="emailReferral" placeholder="Enter Email Address" />

        <input type="submit" value="ADD TO CONTACT" class="add_to_contact" />

      </form>

    </div>

    <!--HTML FOR NEW INPUT BOX ENDS HERE--> 

  </div>

  

  

  

  <div class="banner_box">



            

                <ul class="bxslider" style="position: absolute; left:0;">

                  <li>

                    <center>

                         <a href="http://thesmartercard.com" target="_blank"><img src="/images/sliderimage1.jpg" /></a>

                    </center>

                  </li>

                 <!--<li>

                    <center>

                        <a href="../pricing.php" target="_blank"> <img src="/images/sliderimagetwo.jpg" /> </a>

                    </center>

                  </li>-->

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

  

  

  

  

  

  <div class="footer"> <a  class="main" href="http://<?php echo $_website; ?>" target="_blank" > <?php echo $_website; ?> </a>

    <ul>

      <li><a class="referlink" href="<?php echo $_referlink; ?>" target="_blank">refer link</a></li>

      <li><a class="facebook" target="_blank" href="<?php echo "http://". $_facebook; ?>">facebook</a></li>

      <li><a class="twitter" target="_blank" href="<?php echo "http://". $_twitter; ?>">twitter</a></li>

      <li><a class="google" target="_blank" href="<?php echo "http://". $_googlePlus; ?>">google</a></li>

      <li><a class="linkedin" target="_blank" href="<?php echo "http://". $_linked; ?>">linkedin</a></li>

      <li><a class="youtube" href="<?php echo "http://". $_youtube; ?>">youtube</a></li>

      <div class="clear"></div>

    </ul>

    <div class="clear"></div>

  </div>

</div>

<div class="clear"></div>

</div>

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

<div align="center">Copyright TheSmarterCard 2014. All rights reserved 

</div>

</body>

</html>

