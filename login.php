<?php

include 'headers/client-details.php';
include 'headers/connect_to_mysql.php';

print_r($_POST);

// Register page Start here//
		if(!empty($_POST['register']))
		{
			$firstName = $_POST['first_name'];
			$lastName = $_POST['last_name'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['c_password'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$activationKey = md5(microtime().rand());    // Generating Random Activation Key and inserting in database 
			//$subject = "Please verify your new account at {$username_client}";
			//$message = "Thank you for registering for {$username_client} Beta!\nPlease click the link below to activate your account.\nClick here to activate your account.\n{$domain_client}/account-activation.php?activate=$activationKey\nClicking on this link will lead you to a page that verifies your successful registration, and will provide a link for customizing your very first {$username_client}!\n\nYour Username Is: {$username}\nYour Password Is: {$password}\n\nTo view and/or share your card, go to {$domain_client}/cards/{$username}\n\n If you have any questions, please email {$username_client} at {$email_client}";
			
			$query_username = "SELECT * FROM registeration WHERE username like '$username'";
			$result_username = mysqli_query($con,$query_username);
			$count = mysqli_num_rows($result_username);
			
			
			if($password != $confirmPassword)
			{
					$error = "Password Doesn't Match";
			}
			
			elseif($count!=0)
			{
				$error = "Username Already Exists";
			}
			elseif(!(filter_var($email, FILTER_VALIDATE_EMAIL)))
			{
					$error = "Email Address Not Valid";
			}
			
			elseif(!isset($_POST['agreement']))
			{
				$error = "You must agree to our terms and conditions.";
			}
			
			
			else
			{
			
			
				$query = "INSERT INTO registeration(fname,lname,password,email,username,activationKey) VALUES('$firstName','$lastName','$password','$email','$username','$activationKey')";
				$result = mysqli_query($con,$query);
				//$headers = "From: {$email_client}" . "\r\n";
				//mail($email,$subject,$message,$headers);
				
				
			}	
			
			
		}


	// Register Page End here //


	$upgrade = $_GET['upgrade'];
	if($_GET['active'])
	{
		$error = "Your account has been successfully activated";	
	}

	if(!empty($_POST['login']))
	{	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM registeration WHERE username like '$username' AND password like '$password'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result) == 1)
		{
			
			if($row['active']==1){
				session_start();
				$_SESSION['username'] = $username;
				if($upgrade==1)
				{
					header('Location: select-template.php?upgrade=1');
				}
				else
				{
					header('Location: select-template.php');
				}
			}
			else{
				$error="You have not activated your account yet.";	
			}
			
		}
		else
		{
			$error = "Username and password do not match or you do not have an account yet.";
			
		}
		
	}
			//Login Work End Here //

			// Reset Username begin here //
	
	if(!empty($_POST['login']))
	
	{
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
		// Reset Username end here Here //
		
		// Reset Password start here // 

	$pass = $_GET['pass'];
	$user = $_GET['user'];
	$email = $_GET['email'];

	$user = $_GET['user'];

	
if(!empty($_POST['login']))
{

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
	// Reset Password End here//
	 
	
		


?>


<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>Login page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style_responsive.css" rel="stylesheet" />
  <link href="css/style_default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">	

  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="img/tsclogo1.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->

  <div id="login">
     <?php if(isset($error)){
	
    echo "<div style='margin-top: -72px;' class='alert'>
		<button class='close' data-dismiss='alert'>×</button>
		<strong>Warning!</strong> {$error}.
	</div>						
";
	}
	
	?>

    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" method="post" class="form-vertical no-padding no-margin" action="login.php?upgrade=<?php echo $upgrade;?>">
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
      <div class="control-wrap">
          <h4>User Login</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span><input name="username" id="input-username" type="text" 
                      placeholder="Username" required />
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span><input name="password" id="input-password" 
                      type="password" placeholder="Password" required />
                  </div>
                  <div class="mtop10">
                      <div class="block-hint pull-left small">
                          <input type="checkbox" id=""> Remember Me
                      </div>
                      <div class="block-hint pull-right">
                          <a href="javascript:;" id="forget-password">Forgot Password?</a>
                      </div>
                  </div>

                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>

      <button type="submit" id="login-btn" class="btn btn-block login-btn" name="login" value="1">Button</button>
                                                      
 <div style="text-align:center;">Don't have any account?<a href="javascript:;" id="signup" class=""> Sign up now</a></div>
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM action="http://thevectorlab.net/adminlab/index.html"-->
    <form name="send_password" id="forgotform" class="form-vertical no-padding no-margin hide" action="login.php">
      <p class="center">Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
 <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" name="email" type="email" placeholder="Email" required />
          </div>
        </div>
        <div class="space20"></div>
      </div>
      <input type="Submit" id="btnForget" class="btn btn-block login-btn" value="Submit" />
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    
<!-- BEGIN REGISTRATION FORM -->
<form id="registerform" method="post" class="form-vertical no-padding no-margin hide" action="login.php">
      <p class="center">Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input class="span4" id="fname" name="first_name" type="text" placeholder="First Name" required />
          </div>
 <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input class="span4" id="lname" name="last_name" type="text" placeholder="Last Name" required />
          </div>
  <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input class="span4" id="email" name="email" type="email" placeholder="Email" required />
          </div>
 <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input class="span4" id="password" name="password" type="password" placeholder="Set Password" required />
          </div>
 <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input class="span4" id="Cpassword" name="c_password" type="password" placeholder="Confirm Password" required />
          </div>
 <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input class="span4" id="Cpassword" name="username" type="text" placeholder="User Name" required />
            </div>
        <div class="control-group">
          	<p><span class="label label-important">Example</span> david, davidsmith(<font color="#0066FF">www.thesmartercard.com/david</font>)<br />
            Your username is your identifier on and <b>cannot be changed once you have set it.</b></p>
          </div>
      <div class="control-group">
                  <label class="checkbox">
       <div class="controls">            
                  <input required type="checkbox" name="agreement" value="" />I am over 13 years of age AND I agree with the <a href="assets/terms-conditions.doc" target="_blank"><br /> Mobi Power Card Terms of Use and Privacy Policy</a>. </span> <span class="form_row"> &nbsp; </span> <span class="form_row">
                  </label>
                  </div>
      </div>
    </div>
        <div class="space20"></div>
      </div>
      <button type="Submit" id="btnSign" class="btn btn-block login-btn" name="register" value="1">REGISTER NOW</button>
    </form>
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2015 &copy; TheSmarterCard.
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery.blockui.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <script>
  function checkPass()
	{
		//Store the password field objects into variables ...
		var password = document.getElementById('password');
		var Cpassword = document.getElementById('Cpassword');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		//Compare the values in the password field
		//and the confirmation field
		if(password.value == Cpassword.value){
			//The passwords match.
			//Set the color to the good color and inform
			//the user that they have entered the correct password
			Cpassword.style.backgroundColor = goodColor;
			message.style.color = goodColor;
			message.innerHTML = "Passwords Match!"
		}else{
			//The passwords do not match.
			//Set the color to the bad color and
			//notify the user.
			Cpassword.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Passwords Do Not Match!"
		}
	}  
</script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>