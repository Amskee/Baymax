<?php
  
  session_start();
  include ('config.php');
  $con=mysqli_connect($svr,$usr,$pwd,$db);
  if(!$con)
  {
    echo "<script type=\"text/javascript\">alert('We need to install first sit back while we do it ');</script>";
    header('Location: reset_install_db.php');
  } 
  if (isset($_SESSION['username'])) 
  {
    header('Location: index.php');
  }
  if(isset($_SESSION['e']))
  {
    header("location:error.php");
  }
  
?><!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login and Register</title>
    
    
    

    
    
    
  </head>

  <body>

    <html>
  <head>
    <meta charset="UTF-8">
    <title>Login and Register</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    

    
        <link rel="stylesheet" href="./css/login.css">

    
    
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Register</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Register here</h1>
          
          <form method="post" action="create_member.php">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Username:
              </label>
              <input type="text" name="username"/>
            </div>
        
            <div class="field-wrap">
              
            </div>
          </div>

        
          
          <div class="field-wrap">
            <label>
              Password:<span class="req"></span>
            </label>
            <input type="password" name="password"/>
          </div>
          
          <button type="submit" name="submit" value="Login" class="button button-block"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome!</h1>
          
          <form method="post" action="login_check.php">
          
            <div class="field-wrap">
            <label>
              Username:<span class="req"></span>
            </label>
            <input type="text" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password:<span class="req"></span>
            </label>
            <input type="password" name="password"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
                      
          
          <button type="submit" name="submit" value="Login"class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
        <script src="./js/login.js"></script>

    
    
  </body>
</html>

