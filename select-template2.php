<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/adminlab/gallery.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:56:34 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Gallery</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />

	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php
include 'headers/menu-top-navigation.php'; 
?>			
<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
                        <!-- BEGIN THEME CUSTOMIZER-->
                        <div id="theme-change" class="hidden-phone">
                            <i class="icon-cogs"></i>
                            <span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
                            </span>
                        </div>
                        <!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->				    			
						<h3 class="page-title">
							Gallery
							<small>simple gallery</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Components</a><span class="divider">&nbsp;</span></li>
                            <li><a href="#">Gallery</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
					<!--BEGIN:BODY-->	
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN GALLERY MANAGER PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-camera-retro"></i>Gallery</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<!-- BEGIN GALLERY MANAGER PANEL-->
									<div class="row-fluid">
										<div class="span4">
											<h5> Category 1</h5>
										</div>
										<div class="span8">
											<div class="pull-right">
												<select data-placeholder="Select Category" class="chosen" tabindex="-1" id="inputCategory">
													<option value="0"></option>
													<option value="1">All</option>
													<option value="1">Category 1</option>
													<option value="1">Category 2</option>
													<option value="1">Category 3</option>
													<option value="1">Category 4</option>
												</select>
												<select data-placeholder="Sort By" class="chosen input-small" tabindex="-1" id="inputSort">
													<option value="0"></option>
													<option value="1">Date</option>
													<option value="1">Author</option>
													<option value="1">Title</option>
													<option value="1">Hits</option>
												</select>
												<div class="clearfix space5"></div>
											</div>
										</div>
									</div>
									<!-- END GALLERY MANAGER PANEL-->
									<hr class="clearfix" />
									<!-- BEGIN GALLERY MANAGER LISTING-->
									<div class="row-fluid">
										<div id="image1" class="span2">
											<div class="thumbnail">
												
                                                <div class="item">
						<p><a href="quick-start.php?template=1"><div style="font-size:14px">Click here for your<br>
                             White Template BIZ</div> </a></p>
                                                    <a class="fancybox-button" data-rel="fancybox-button" title="White Template Bizz" href="img/design1.png">
                                                        <div class="zoom">
															<img src="img/design1.png" style="width:200px;height:290px" alt="design1" />
															<div class="zoom-icon"></div>
														</div>
													</a>
												</div>
                                                
											</div>
										</div>
										<div id="image2" class="span2">
											<div class="thumbnail">
												<div class="item">
						<p><a href="quick-start.php?template=2"><div style="font-size:14px">Click here for your<br>
                             Vlue Template BIZ</div> </a></p>
													<a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="img/design2.png">
														<div class="zoom">
															<img src="img/design2.png" alt="design2" />
															<div class="zoom-icon"></div>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									</div>
									<!-- END GALLERY MANAGER LISTING-->
									<!-- BEGIN GALLERY MANAGER PAGINATION-->

									<!-- END GALLERY MANAGER PAGINATION-->
								</div>
							</div>
							<!-- END GALLERY MANAGER PORTLET-->
						</div>
					</div>
					<!--END:BODY-->
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
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.blockui.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>	
	<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/adminlab/gallery.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:57:43 GMT -->
</html>