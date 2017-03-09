<?php
include 'config.php';
//if(!isset($_POST["submit"]))  {  header('Location:index.php');  }


$x=$_GET['author'];
$y=$_GET['dr'];
$z=$_GET['date']." ".$_GET['time'];;
$w=$_GET['symptom'];
$v="Pending";

$con=mysqli_connect($svr,$usr,$pwd,$db);
$sql="INSERT INTO appointments VALUES (NULL,'$x','$y','$z','$w','$v')";
$d=mysqli_query($con,$sql);


if($d)
{
echo " <h2> BOOKED !! Back to <a href='index.php'>Baymax</a>"; 
}
else
{
echo "Oops ! Something went wrong in the middle";
}


?>
