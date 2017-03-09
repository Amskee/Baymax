<?php
include 'config.php';

session_start();
if(!isset($_SESSION['username'])){header("Location: login.php");}

$con=mysqli_connect($svr,$usr,$pwd,$db);
$user_check=$_SESSION['username'];
$search= mysqli_query($con,"SELECT * FROM members WHERE username='$user_check' ");
$row=mysqli_fetch_array($search,MYSQLI_ASSOC);
$u=$row['username'];
echo "<script type='text/javascript'>div_hide();</script>";

?>


<html>


<head><title>Baymax</title>



<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

<script src="./js/core.js"></script>

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link href="./css/paint.css" rel='stylesheet' type='text/css'>


</head>


<body>
   <div class="widget">
  <ol class="widget-list" id="COMMANDS"">
    
      <a class="widget-list-link">
       
        Greeting commands:<span>Hi | Hello | Good Morning | Name..</span>
      </a>
    
    
      <a class="widget-list-link">
        
        Book Appointments:<span>Make | Book</span>
      </a>
   
    
      <a class="widget-list-link">
        
        Additional:<span>die | lol | quit</span>
      </a>
    
    
  </ol>
  
 
  <ul class="widget-tabs">
    <li class="widget-tab">
      <a href="#managers" class="widget-tab-link">COMMANDS</a>
      <!-- Omitting the end tag is valid HTML and removes the space in-between inline blocks. -->
    
     </ul>
</div>

   <h2>Hello! I'm Baymax! B| <br /></h2><h3>Your personal healthcare companion.<br />

   How can I help you today?</h3>

   <div id="wrapper">

	<div id="chatContainer">

   		<div id="messages">
		</div>
 
   		<div class="status-text">
   		</div>
  


   		<form action="" id="chatInput">
  
  
     			<textarea id="text"></textarea>

       			<input type="submit"  id="submit" value="Send" />
   
			<input type="button"  id="submit" value="Log Off" onclick="window.location='logout.php';"/>

			<input type="button"  id="submit" value="My Appointments" onclick="window.location='myappointments.php';"/>
   
 
  		</form>


	</div>

   </div>




</body>

</html>
