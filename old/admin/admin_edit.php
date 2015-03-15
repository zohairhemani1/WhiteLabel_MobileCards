<?php
session_start();
if(!isset($_SESSION['name'])){
header("location: index.html");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Mobi Power - Total Cards</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="My M Card, Free , Deluxe, Premium Mobile Cards">
	<meta name="author" content="Muhammad Usman">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-redy.css" rel="stylesheet">
    
 
    
    
        
	<style type="text/css">
	

	
	  body {
		padding-bottom: 40px;
		
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	  
	  
	  
	  #tfheader{
		background-color:#c3dfef;
	}
	#search{
		position:absolute;
		padding:20px;
		margin-top:-10px;
		left:75%;
	}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.submitButton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
		margin-top:-8px;
	}
	.submitButton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.submitButton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
	
	
	
	.ui-li .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li{
		margin-left:40%;
		font-size:14px;
	}
	  
	  #results{
		  position:absolute;
		  left:77%;
		  margin-top:40px;
		  z-index:1;
		  background:#4D4D4D;
		  width:230px;
		 -webkit-border-bottom-right-radius: 4px;
		 -webkit-border-bottom-left-radius: 4px;
		 -moz-border-radius-bottomright: 4px;
		 -moz-border-radius-bottomleft: 4px;
		  border-bottom-right-radius: 4px;
		  border-bottom-left-radius: 4px;
		  border-bottom:#C2003D 3px solid;
		  margin-left:-10px;
	  }	
	  
	  #search-result{
			font-size:20px;
			text-decoration:none;
			color:#CCC; 
			border-bottom:#AA8C8C 1px solid;
			margin-left:10px;
			font-family:cursive;
	  }
	  
	  .delete{
			
	  }
	  
	  .ui-icon ui-icon-arrow-r ui-icon-shadow{
		  background:#000;
		  background-image:none;
	  }
	  
	  .ui-btn ui-btn-up-b ui-btn-icon-notext ui-btn-corner-all ui-shadow{
			  background:#000;
			 	background-image:none;
	  }
	  
	  .ui-li-link-alt .ui-btn-inner{
			background-image:url(img/delete.png);  
	  }
	  
	  
	  
	  
	</style>
	
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/
		jquery.mobile-1.0.min.js"></script>
		
		
</head>

<body>
		
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				
				
				<a class="brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>List Of all Cards</span></a>
				<a class="brand" href="../dashboard/" target="_blank"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Update an Existing Card</span></a>
				<a class="brand" href="../dashboard/newsletter/form.html" target="_blank"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>News Letter Application</span></a>
                <a class="brand" href="report_csv.php" target="_blank"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Export Database</span></a>
                
                <!-- Search Box -->
                
                       <div id="searchbox">
                             
                            <form id="search" name = "search" action="#" method="post">
                                
                                 <input type="text" name="search_text" class="textField" autocomplete="off" onkeyup="findmatch();">
								 <input type="submit" value="Search" class="submitButton">
                                    
                            </form>
                            <div id ="results"></div>
                        	<div class="tfclear"></div>
                        
                        
                        </div>
               
				<div class="btn-group pull-right" style="z-index:2;">
					<a class="btn dropdown-toggle" data-toggle="dropdown" target="_blank" href="logout.php">
						<i class="icon-user"></i><span class="hidden-phone"> logout</span>
						<span class="caret"></span>
					</a>					
				</div> 
				
			</div>
		</div>
	</div>
	
	
	
	
	
	<!-- topbar ends -->
	
    
    
   
	
	
	
	
			
			
				<div data-role="page" data-theme="a" style = "margin-top:-20px; position:relative;">
						
                        
                        
                        
	
                        
                        
						
						<div data-role="content" style="width:70%; margin-left:14%;">
							<ul data-role="listview" data-inset="true" data-divider-theme="b" data-icon="delete"">
								<li data-role="list-divider">
									Total Mobi Powers Created Uptill Now!
								</li>
								
								
                                <?php
								
									include '../connect_to_mysql.php';
									$query = "SELECT username,Card FROM registeration Order By Card";
									$result = mysql_query($query);

									while($row = mysql_fetch_array($result)){
										$username = $row['username'];
										$card = $row['Card'];
				echo "<li data-icon='delete'>" . "<a href ='../cards/$username' class = 'listview' target='_blank'>" . $username."   &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;".$card. " CARD </a> <a href='#'>Update</a>".  "<a href='delete-confirmation.php?user=$username'  id='delete'  target='_blank'>DELETE</a>".      "</li>";
										//echo $username . " - " . $card . "<br>";
									}

									
								
								?>

									

							</ul>

						</div>
						
					</div>
			
			
		
		
		
		<!-- nav bar ends here -->
		
		
        
        	
            <script type="text/javascript">

                function findmatch(){
        		
                document.getElementById('results').innerHTML = "Loading..";
                
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                    }
                    else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                    }
        
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        
                        	
                        	document.getElementById('results').innerHTML = xmlhttp.responseText;
                        }
                    }
                    
                    xmlhttp.open('GET','search.inc.php?search_text='+document.search.search_text.value,true);
                    xmlhttp.send();
                    
                }

			</script>
            
            
            
           
        
	
		
</body>
</html>
