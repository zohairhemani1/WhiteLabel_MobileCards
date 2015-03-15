<div id="rt-header" class="rt-transparent-bg">
  <div class="rt-grid-4 rt-alpha">
    <div class="rt-block logo-block"> <a href="/" id="rt-logo"></a> </div>
  </div>
  <div class="rt-grid-5">
    <div class="horizmenu">
      <div class="rt-block">
        <div class="module-surround">
          <div class="module-content">
            <ul class="menu">
              <li class="item-179"><a href="index.html">Home</a></li>
              <li class="item-180"><a href="login.php">Login</a></li>
              <!-- <li class="item-181"><a href="admin">Dash Board</a></li> -->
              <li class="item-181"><a href="contact.php">Contact</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <?php
  	include '_user-details.php';
	
	if($username!="")
	{
		echo "
			<p id='login'> Hello {$_fname}  {$_lname}, <br/>
			  You are logged in as {$username}
			  <br/> <a href='login.php?logout=true'>LOGOUT</a></p>
			";
	}
	
  ?>
  
  
  

  
</div>