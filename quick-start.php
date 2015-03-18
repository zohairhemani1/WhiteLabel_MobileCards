<?php 

if ($_GET['template'] != 1)
	{
	$design = "design2.png";
	}
	else 
	{
	$design = "design1.png";
	
	}

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

			$_fname = $_POST['fname'];

			$_lname = $_POST['lname'];

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
			if(!empty($_profilePic) || !empty($_logo)){
			
					include 'headers/connect_to_mysql.php';
			$query_details = "UPDATE registeration SET fname = '$_fname', lname = '$_lname', email = '$_email', logo = '$_logo', job = '$_jobTitle', office = '$_office', mobile = '$_mobile', website = '$_website', profilePicture = '$_profilePic', facebook = '$_facebook', twitter = '$_twitter', linked = '$_linked', youtube = '$_youtube', google = '$_google', description = '$_description', video = '$_video', template = '$template', state = '$_state', city = '$_city', zip = '$_zip', country = '$_country', address = '$_address', gender = '$_gender', referlink = '$_referlink' WHERE username like '$username' ";
		mysqli_query($con,$query_details)
		or die ('error');
			$url = "cards/$username";
		$redirect = 1 ;

			}
			else
			{
				if(empty($_profilePic)){
					$error =  $error . "Upload Profile Picture. <br />";
				}else if(empty($_logo)){
					$error =  $error . "Upload Company's LOGO.<br>";
				}
				echo $error;
			}

	/*if(!isset($_fname) || !isset($_lname) || !isset($_email)  || !isset($_jobTitle) || !isset($_office) || !isset($_mobile) || !isset($_website) ||  !isset($_description)|| !isset($_company) )

				{

					$error = "Please fill all the details. <br>";

					

				}*/
			

			

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
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />    
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
<title>The Smarter Card</title>
   <script>
   if(<?php echo $redirect; ?> == 1){
	window.location.href = '<?php echo $url; ?>';
   }
	</script>
 
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
                           <a href="select-template.php">Select Template</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Add Card</a><span class="divider-last">&nbsp;</span></li>
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
                        <form action="quick-start.php?template=<?php echo $template;?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                             <div class="control-group">
                              <label class="control-label">Username</label>
                           <div class="template" style="right:39px;position:absolute;float:right;">
									<img src="img/<?php echo $design; ?>"/>
    							</div>
                              <div class="controls">
                                 <input required name="username" value="<?php echo $username; ?>" 
                                 placeholder="Enter User Name" type="text" class="span6 " />
                              </div>
                              
                           </div>
                             <div class="control-group">
                              <label class="control-label">First Name</label>
                              <div class="controls">
                                 <input required name="fname" value="<?php echo $_fname; ?>" 
                                 placeholder="Enter First Name" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Last Name</label>
                              <div class="controls">
                                 <input required name="lname" value="<?php echo $_lname; ?>" 
                                 placeholder="Enter Last Name" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Email</label>
                              <div class="controls">
                                 <input required name="email" value="<?php echo $_email; ?>" 
                                 placeholder="Enter Email " type="email" class="span6 " />
                              </div>
                           </div>
                              <div class="control-group">
                              <label class="control-label">Gender</label>
                              <div class="controls">
                                 <label class="radio">
                                 <input type="radio" name="gender" value="Male" <?php echo $male; ?> />
                                 Male
                                 </label>
                                 <label class="radio">
                                 <input type="radio" name="gender" value="Female" <?php echo $female; ?>/>
                                 Female
                                 </label>                               
                              </div>
                           </div>
                        <div class="control-group">
                        <div class="control-group">
                            <label class="control-label">Logo</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?php if($_logo == null){echo "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";}
										else {echo "assets/upload/".$_logo;} ?>" alt="" />
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
                                 <input required name="job" value="<?php echo $_jobTitle; ?>" 
                                 placeholder="Enter Job Title" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Office No</label>
                              <div class="controls">
                                 <input required name="office" value="<?php echo $_office; ?>" 
                                 placeholder="Enter Office No" type="text" class="span6 "onkeypress="return IsNumeric(event);" 
                                 ondrop="return false;" onpaste="return false;" />
 								   <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>

                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Mobile No</label>
                              <div class="controls">
                                 <input required name="mobile" value="<?php echo $_mobile; ?>" 
                                 placeholder="Enter Mobile No" type="text" class="span6 " onKeyPress="return isNumeric(event);" 
                                 ondrop="return false;" onpaste="return false;" />
 								  <span id="error1" style="color: Red; display: none">* Input digits (0 - 9)</span>
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Address</label>
                              <div class="controls">
                                 <input required name="address" value="<?php echo $_address; ?>" 
                                 placeholder="Enter Address" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">City</label>
                              <div class="controls">
                                 <input required name="city" value="<?php echo $_city; ?>" 
                                 placeholder="Enter city" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Country</label>
                              <div class="controls">
                                 <input required name="country" value="<?php echo $_country; ?>" 
                                 placeholder="Enter Country" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">State</label>
                              <div class="controls">
                                 <input required name="state" value="<?php echo $_state; ?>" 
                                 placeholder="Enter State" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Zip</label>
                              <div class="controls">
                                 <input required name="zip" value="<?php echo $_zip; ?>" 
                                 placeholder="Enter Zip" type="text" class="span6 " />
                              </div>
                           </div>
                        <div class="control-group">
                        <div class="control-group">
                            <label class="control-label">Profile Picture</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?php if($_profilePic == null){echo "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";}
										else {echo "assets/upload/".$_profilePic;} ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                               <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                               <span class="fileupload-exists">Change</span>
                               <input type="file" name="file" class="default" /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
								 </div>
                                </div>
                             <div class="control-group">
                              <label class="control-label">Facebook</label>
                              <div class="controls">
                                 <input required name="facebook" value="<?php echo $_facebook?>" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Twitter</label>
                              <div class="controls">
                                 <input required name="twitter" value="<?php echo $_twitter?>" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Linked</label>
                              <div class="controls">
                                 <input required name="linked" value="<?php echo $_linkedin?>" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Youtube</label>
                              <div class="controls">
                                 <input required name="youtube" value="<?php echo $_youtube?>" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Google Plus</label>
                              <div class="controls">
                                 <input required name="googlePlus" value="<?php echo $_google?>" 
                                 placeholder="" type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Youtube Video Link</label>
                              <div class="controls">
                                 <input required name="video" value="<?php echo $_video;?>" 
                                 placeholder="Your Youtbe Video Link " type="text" class="span6 " />
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Company Refer Link</label>
                              <div class="controls">
                                 <input required name="referlink" value="" 
                                 placeholder="Your Company Refer Link" value="<?php echo $_referlink;?>" type="text" class="span6 " />
                              </div>
                           </div>
                     <?php
                         if($_GET['upgrade']==1)
							{
								echo
								" <div class='control-group'>
                        <div class='control-group'>
                            <label class='control-label'>Profile Picture</label>
                            <div class='controls'>
                                <div class='fileupload fileupload-new' data-provides='fileupload'>
                                    <div class='fileupload-new thumbnail' style='width: 200px; height: 150px;'>
                                        <img src='<?php echo $_profilePic; ?>' alt='' />
                                    </div>
                                    <div class='fileupload-preview fileupload-exists thumbnail' style='max-width: 200px; max-height: 150px; line-height: 20px;'></div>
                                    <div>
                               <span class='btn btn-file'><span class='fileupload-new'>Select image</span>
                               <span class='fileupload-exists'>Change</span>
                               <input type='file' name='file' class='default' /></span>
                                        <a href='#' class='btn fileupload-exists' data-dismiss='fileupload'>Remove</a>
                                    </div>
                                </div>
								 </div>
                                </div>
                             <div class='control-group'>
                              <label class='control-label'>Facebook</label>
                              <div class='controls'>
                                 <input required name='facebook' value='<?php echo $_facebook?>' 
                                 placeholder='' type='text' class='span6 ' />
                              </div>
                           </div>
                             <div class='control-group'>
                              <label class='control-label'>Twitter</label>
                              <div class='controls'>
                                 <input required name='twitter' value='<?php echo $_twitter?>' 
                                 placeholder='' type='text' class='span6 ' />
                              </div>
                           </div>
                             <div class='control-group'>
                              <label class='control-label'>Linked</label>
                              <div class='controls'>
                                 <input required name='linked' value='<?php echo $_linkedin?>' 
                                 placeholder='' type='text' class='span6 ' />
                              </div>
                           </div>
                             <div class='control-group'>
                              <label class='control-label'>Youtube</label>
                              <div class='controls'>
                                 <input required name='youtube' value='<?php echo $_youtube?>' 
                                 placeholder='' type='text' class='span6 ' />
                              </div>
                           </div>
                             <div class='control-group'>
                              <label class='control-label'>Google Plus</label>
                              <div class='controls'>
                                 <input required name='googlePlus' value='<?php echo $_google?>' 
                                 placeholder='' type='text' class='span6 ' />
                              </div>
                           </div>
                             <div class='control-group'>
                              <label class='control-label'>Youtube Video Link</label>
                              <div class='controls'>
                                 <input required name='video' value='<?php echo $_video;?>' 
                                 placeholder='Your Youtbe Video Link ' type='text' class='span6 ' />
                              </div>
                           </div>
                             <div class='control-group'>
                              <label class='control-label'>Company Refer Link</label>
                              <div class='controls'>
                                 <input required name='referlink' value='' 
                                 placeholder='Your Company Refer Link' value='<?php echo $_referlink;?>' type='text' class='span6 ' />
                              </div>
                           </div>
							";
							}
                    ?>
                             <div class="control-group">
                              <label class="control-label">Profile</label>
                              <div class="controls">
                      <textarea required name="description"  placeholder="Enter Your Profile " rows="6" type="text" class="span6 "><?php echo $_description; ?></textarea>
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
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
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
      <script src="js/table-editable.js"></script>
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

