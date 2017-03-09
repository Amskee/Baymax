<?php
	session_start();
	include ('config.php');
	$con=mysqli_connect($svr,$usr,$pwd,$db);
	if(!$con)
	{
		echo "<script type=\"text/javascript\">alert('We need to install first sit back while we do it ');</script>";
		header('Location: reset_install_db.php');
	}	
?>

<html>
<body style="margin-left:40px;margin-top:20px;">
<h3>Get started with - Baymax :)</h3>
<br><br>
<form method="post" action="create_member.php">
Username:<br>
<input type="text" name="username"><br><br>
<br>Password:<br>
<input type="password" name="password">  <br><br><br>
<input type="submit" name="submit" value="Login"> 
</form>
<br>
</body>
<p><center><h3>&#169; Baymax<h3></center></p>
</html>