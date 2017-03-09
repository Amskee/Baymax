

<html>
<head></head>
<body>
<style>@import url(http://fonts.googleapis.com/css?family=Raleway:700);
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-color: #2c3e50;
  
  font-family: 'Raleway', sans-serif;
  
  height: 100%;
}

.text-wrapper {
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.title {
  font-size: 6em;
  font-weight: 700;
  color: #EE4B5E;
}

.subtitle {
  font-size: 40px;
  font-weight: 700;
  color: #1FA9D6;
}

.buttons {
  margin: 30px;
}
.buttons a.button {
  font-weight: 700;
  border: 2px solid #EE4B5E;
  text-decoration: none;
  padding: 15px;
  text-transform: uppercase;
  color: #EE4B5E;
  border-radius: 26px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.buttons a.button:hover {
  background-color: #EE4B5E;
  color: white;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
</style>
<div class="text-wrapper">
    
    <div class="subtitle">
        <?php
include 'config.php';

if(!isset($_POST["submit"]))
{
echo "<center><h2>You can not view this! </h2></center>";
}
else if($_POST["username"]=='' || $_POST["password"]=='')
{
echo "<center><h2>Empty, Please fill all the fields.</h2></center>";
}
else
{

$con=mysqli_connect($svr,$usr,$pwd,$db);
$x=$_POST["username"];
$y=md5($_POST["password"]);
$sql="INSERT INTO members (uid,username,password) VALUES (NULL,'$x','$y')";
$d=mysqli_query($con,$sql);
if($d){echo "<center><h1>SUCCESS!</h1></center>";}else{echo "Something went wrong in the middle!";}
}

?>



    </div>

   
</div>
</body>
</html>