<?php
	
session_start();	
	

	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$_SESSION['e2']="Username or Password is empty !";
			header("location: d_login.php");
		}else
		{
			
			$svr="localhost";
			$usr="root";
			$pwd="";
			$db="baymax";
			$con=mysqli_connect($svr,$usr,$pwd,$db);
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($con, $username);
			$password = mysqli_real_escape_string($con, $password);
			$password = md5($password);
			
			
			$sql="SELECT uid FROM doctors WHERE username='$username' and password='$password'";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			
			
			
			if(mysqli_num_rows($result) == 1)
			{
				
				$_SESSION['username2'] = $username;
				header("location: d_index.php"); 
			}else
			{
				$_SESSION['e2']="Username or Password is wrong ";
				header("location: d_login.php");
			}

		}
	}
	else{$_SESSION['e2']="you have to login first ! ";header("location:d_login.php");}

?>