<?php
	session_start();
	if (isset($_SESSION['username2'])) 
	{
		header('Location: d_index.php');
	}
	if(isset($_SESSION['e2']))
	{
		$x=$_SESSION['e2'];
		unset($_SESSION['e2']);
		echo $x;
	}
	
?>



<html><head> <link rel="stylesheet" href="../css/doctor.css">
</head>
<body style="margin-left:40px;margin-top:20px;">
<br><br>
<form method="post" action="d_login_check.php">
  <h1>Doctor Portal - Login</h1>
  <div class="inset">
  <p>
    <label for="email">Username:</label>
    <input type="text" name="username"/>
  </p>
  <p>
    <label for="password">Password:</label>
    <input type="password" name="password">
  </p>
  
  </div>
  <p class="p-container">
    
    <input type="submit" name="submit" value="Login">
  </p>
</form>

</body>

</html>