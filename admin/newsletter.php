<?php
$filelist = glob("*.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>News Letter Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">
	
<script type="text/javascript" src="view.js"></script>
	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-redy.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/view.css" media="all">
	<style type="text/css">
	

	
	  body {
		padding-bottom: 40px;
		
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/
		jquery.mobile-1.0.min.js"></script>
		
		
</head>

<body>
		
	<div class="navbar" style="margin-top:-5px;">
		<div class="navbar-inner">
			<div class="container-fluid">
				
				
				<a class="brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>List Of all Cards</span></a>
				<a class="brand" href="#"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Update an Existing Card</span></a>
				<a class="brand" href="#"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>News Letter Application</span></a>
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> logout</span>
						<span class="caret"></span>
					</a>					
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	
	
	<!-- topbar ends -->
	
	
	
	
	
	
			
			
				<div data-role="page" data-theme="a" style = " position:relative;">
						
						
						
						
                        
                        
               <img id="top" src="img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>News Letter </a></h1>
		<form id="form_503691" class="appnitro"  method="get" action="blast_script.php">
					<div class="form_description">
			<h2>News Letter </h2>
			<p>Enter the required fields and click the send button to send the emails to all the registered users in the database.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Subject </label>
		<div>
			<input id="element_1" name="name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Message </label>
		<div>
			<textarea id="element_2" name="message" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="503691" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit"  />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Designed and Developed By <a href="http://www.fiver.com/geekygeek110">Zohair Hemani</a>
		</div>
	</div>
	<img id="bottom" src="img/bottom.png" alt="">
                        
                        
					</div>
			
			
		
		
		
		<!-- nav bar ends here -->
		
		
	
		
</body>
</html>
