<?php
	include 'headers/connect_to_mysql.php';
	include 'headers/logo.php';
	$logo_image = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";		
	$profile_image = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";



if(isset($_GET['app_id']))
{
		$app_id=  $_GET['app_id'];
		$formAction = "?&app_id=$app_id";
		$query = "SELECT * FROM app where app_id = $app_id ";
		$result = mysqli_query($con,$query);	
		$row = mysqli_fetch_array($result)
		or die ('error3');
		$app_name = $row['app_name'];
		$logo = $row['logo'];
		$cover = $row['cover'];
		$about_us = $row['about_us'];
	if($logo != null || $profile != null)
		{
			$logo_image = "img/logo/{$logo}";		
		
		}
		else
		{
			$logo_image = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";		
			$profile_image = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";		
	
		}

	if($_POST)
	{
		$app_id=  $_GET['app_id'];
		$app_name = $_POST['app_name'];
		$about_us = $_POST['about_us'];
		$query = "UPDATE app SET  app_name = '$app_name',about_us = '$about_us', logo = '$logo', cover = '$cover' WHERE app_id = '$app_id'";
		$result = mysqli_query($con,$query);
		header("Location: app.php?update=true");
	}
}	
else 
{
	if($_POST)
	{
		$app_name = $_POST['app_name'];
		$about_us = $_POST['about_us'];
		$query_inserting = "INSERT INTO app(app_name,about_us,logo,cover)
		VALUES ('$app_name','$about_us','$logo','$cover')";
		mysqli_query($con,$query_inserting)
		or die('error while inserting app');
		header("Location: app.php?insert=true");	
	}	
}

if ($_GET['template'] != 1)
	{
		$design = "design2.png";
	}
	else 
	{
		$design = "design1.png";
	}

?>

<!doctype html>
<html>
<head>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />    
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />   
   <link rel="stylesheet" type="text/css" href="css/custom.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="css/highlight.css" />
   <link rel="stylesheet" type="text/css" href="css/main.css" />

<title>The Smarter Card</title>

</head>

<body>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php
include 'headers/menu-top-navigation.php'; 
?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->

                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                     Design Card
                     <small>Make your own Card</small>
                  </h3>
                  <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="desing.php">Select Template</a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Add Card</a><span class="divider">&nbsp;</span>
                       </li>
                      </ul>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM widget-->   
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Welcome to QuickStart!</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                         </span>
                     </div>
                     <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="insert_app.php<?php echo $formAction; ?>" method="post" class="form-horizontal">
                             <div class="control-group">
                              <label class="control-label">Username</label>
                           <div class="template" style="right:39px;position:absolute;float:right;">
									<img src="img/<?php echo $design; ?>"/>
    							</div>
                              <div class="controls">
                                 <input required name="" value="<?php echo $app_name; ?>" 
                                 placeholder="Enter User Name" type="text" class="span6 " />
                              </div>
                              
                           </div>
                             <div class="control-group">
                              <label class="control-label">First Name</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $app_name; ?>" 
                                 placeholder="Enter First Name" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Last Name</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $app_name; ?>" 
                                 placeholder="Enter Last Name" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Email</label>
                              <div class="controls">
                                 <input required name="email" value="<?php echo $email; ?>" 
                                 placeholder="Enter Email " type="email" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Gender</label>
                              <div class="controls">
                                 <select class="span6 chosen" name="app_id" data-placeholder="Select Your Gender" tabindex="1">
                                    <option value='Male'>Male</option>
									<option value='Female'>Female</option>
                                 </select>
                                 </div>
                                 </div>
                        <div class="control-group">
                        <div class="control-group">
                            <label class="control-label">Logo</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?php echo $logo_image; ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                               <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                               <span class="fileupload-exists">Change</span>
                               <input type="file" name="logo" class="default" /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
								 </div>
                                </div>
                             <div class="control-group">
                              <label class="control-label">Job Title</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $job; ?>" 
                                 placeholder="Enter Job Title" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Office No</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $office; ?>" 
                                 placeholder="Enter Office No" type="text" class="span6 "onkeypress="return IsNumeric(event);" 
                                 ondrop="return false;" onpaste="return false;" />
 								   <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>

                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Mobile No</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $mobile; ?>" 
                                 placeholder="Enter Mobile No" type="text" class="span6 " onkeypress="return isNumeric(event);" 
                                 ondrop="return false;" onpaste="return false;" />
 								  <span id="error1" style="color: Red; display: none">* Input digits (0 - 9)</span>
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Address</label>
                              <div class="controls">
                                 <input required name="app_name" value="<?php echo $address; ?>" 
                                 placeholder="Enter Address" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">City</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $city; ?>" 
                                 placeholder="Enter city" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Country</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $country; ?>" 
                                 placeholder="Enter Country" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">State</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $state; ?>" 
                                 placeholder="Enter State" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Zip</label>
                              <div class="controls">
                                 <input required name="" value="<?php echo $zip; ?>" 
                                 placeholder="Enter Zip" type="text" class="span6 " />
                              </div>
                           </div>
                        <div class="control-group">
                        <div class="control-group">
                            <label class="control-label">Profile Picture</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?php echo $profile_image; ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                               <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                               <span class="fileupload-exists">Change</span>
                               <input type="file" name="logo" class="default" /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
								 </div>
                                </div>
                             <div class="control-group">
                              <label class="control-label">Facebook</label>
                              <div class="controls">
                                 <input required name="facebook" value="https://www.facebook.com/bizsocialetc" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Twitter</label>
                              <div class="controls">
                                 <input required name="twitter" value="https://twitter.com/bizsocialetc" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Linked</label>
                              <div class="controls">
                                 <input required name="linked" value="http://www.linkedin.com/profile/view?id=327048006&trk=nav_responsive_tab_profile" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Youtube</label>
                              <div class="controls">
                                 <input required name="youtube" value="https://www.youtube.com/watch?v=MTMaPw82DYU&feature=youtu.be" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Google Plus</label>
                              <div class="controls">
                                 <input required name="" value="https://plus.google.com/113403331055048268890/posts" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Youtube Video Link</label>
                              <div class="controls">
                                 <input required name="" value="" 
                                 placeholder="Your Youtbe Video Link " type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Company Refer Link</label>
                              <div class="controls">
                                 <input required name="" value="" 
                                 placeholder="Your Company Refer Link" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Profile</label>
                              <div class="controls">
                      <textarea required name="about_us" placeholder="Enter Your Profile " rows="6" type="text" 
                      class="span6 "></textarea>
                              </div>
                           </div>
                            <div class="controls">
                           <h3>What You Need To Do</h3>
                            YOU MUST use the correct link: <b>http://yourcompany.com/yourid</b><br /><br />
                            Please be sure to click on the links to make sure you put the correct link in the card fields.<br /><br />
                            On the Smart Video Card: your referral link is on the Logo, the Image, and the Second Scroll <br />
                            Banner with a Enroll Button, Linked with the <b>http://yourcompany.com/yourid</b> and on the<br /> Company Icon by the Facebook Icon.
    						</div>
                <div class="form-actions clearfix">
				<input type="submit"  class="btn btn-success " />
                   </div>
                              </form>
                            <!-- END FORM-->

                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>

            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  <?php  
	include 'headers/footer.php';
	?>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->

 
   <script src="js/jquery-1.8.2.min.js"></script>    
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>   
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
      		<script>
         var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) 
		{
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 37 && keyCode <= 65 )  || specialKeys.indexOf(keyCode) != -1)            
			document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
		}
		</script>
 <script>
 var specialKeys1 = new Array();
        specialKeys1.push(8); //Backspace
        function isNumeric(e) 
		{
			var keyCode1 = e.which ? e.which : e.keyCode1
            var ret1 = ((keyCode1 >= 37 && keyCode1 <= 65) || specialKeys1.indexOf(keyCode1) != -1);
            document.getElementById("error1").style.display = ret1 ? "none" : "inline";
            return ret1;
		}
		</script>
</body>
</html>

