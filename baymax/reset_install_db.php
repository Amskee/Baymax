<?php
session_start();
if (isset($_SESSION['username'])) 
{
	echo "You need to logout your current baymax session to Reset database  , <a href='index.php'>Go to baymax</a>";
}
else
{
include 'config.php';
echo "<script type=\"text/javascript\">alert('Click OK for New installation');</script>";
$con=mysqli_connect($svr,$usr,$pwd);

$sql="drop database baymax";
$x=mysqli_query($con,$sql);


$sql="create database baymax";
$y=mysqli_query($con,$sql);

$con=mysqli_connect($svr,$usr,$pwd,$db);


$sql="create table members( uid int(11) auto_increment,username varchar(300),password varchar(300),primary key(uid) );";
$a=mysqli_query($con,$sql);


$sql="create table appointments( id int(11) auto_increment,username varchar(300),doctor varchar(300),time varchar(50),reason varchar(500),status varchar(50),primary key(id) );";
$b=mysqli_query($con,$sql);

$sql="create table doctors( uid int(11) auto_increment,username varchar(300),password varchar(300),primary key(uid) );";
$c=mysqli_query($con,$sql);


if($y)
{
echo "<br>Initialized Database <br>";
} 
if($a && $b && $c)
{
echo "<br>Initialized Tables ...<br>";
echo "<br>We are all set now you can use <a href='register.php'>Register</a> and <a href='login.php'>Login</a> to use Baymax " ;
}
else
{
echo "Please configure config.php , Installation FAILED :( ";
}


}

?>