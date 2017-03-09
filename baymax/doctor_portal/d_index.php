<?php
include '..\config.php';
session_start();
if(!isset($_SESSION['username2'])){header("location:d_login.php");}
$username=$_SESSION['username2'];
$con=mysqli_connect($svr,$usr,$pwd,$db);
$sql = mysqli_query($con,"SELECT * FROM appointments WHERE doctor='$username'");
echo "<br><br>Welcome  ".$username."<br><br><hr border=3>";
echo "<form method='POST' action='confirm.php'>";
if(mysqli_num_rows($sql)!=0)
{
    echo "<table class=\"flat-table flat-table-2\"><tr><th>Name</th><th>reason</th><th>time</th><th>status</th><th>Update status</th></tr>";
    while($row = mysqli_fetch_assoc($sql)) {
           echo "<tr><td>".$row['username']."</td>";
           echo "<td>".$row['reason']."</td>";
	   echo "<td>".$row['time']."</td>";
           echo "<td>".$row['status']."</td>";
	   if(!strcmp($row['status'],"Pending")){echo "<td><button class=\"btn btn_primary\" data-button name='".$row['id']."'>Confirm Appointment</button></td></tr>";}
	   else {echo "<td><font color=\"#bdc3c7\"><b>CONFIRMED</b></font></td></tr>";}
    }
    echo "</table></form>";
}
else
{
echo "no previous appointments";
}
echo "<br><br><center><h2><a href='d_logout.php'>logout</a></h2></center>";

?>


<html>
<head><link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'></head>
<body><style>
* { 
font-family: 'Montserrat', sans-serif; }
.flat-table {


    margin-bottom: 20px;
    margin-left: 250px;
    border-collapse:collapse;
    font-family: Arial, sans-serif;
    
              
        -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px       
  }
  .flat-table th, .flat-table td {
    box-shadow: inset 0 -1px rgba(0,0,0,0.25), 
      inset 0 1px rgba(0,0,0,0.25);
  }
  .flat-table th {
    font-weight: normal;
    -webkit-font-smoothing: antialiased;
    padding: 1em;
    color: rgba(0,0,0,0.45);
    text-shadow: 0 0 1px rgba(0,0,0,0.1);
    font-size: 1.5em;
  }
  .flat-table td {
    color: #fff;
    padding: 0.7em 1em 0.7em 1.15em;
    text-shadow: 0 0 1px rgba(255,255,255,0.1);
    font-size: 1.4em;
  }
  .flat-table tr {
    -webkit-transition: background 0.3s, box-shadow 0.3s;
    -moz-transition: background 0.3s, box-shadow 0.3s;
    transition: background 0.3s, box-shadow 0.3s;
  }
  .flat-table-1 {
    background: #336ca6;
  }
  .flat-table-1 tr:hover {
    background: rgba(0,0,0,0.19);
  }
  .flat-table-2 tr:hover {
    background: rgba(0,0,0,0.1);
  }
  .flat-table-2 {
    background: #f06060;
  }
  .flat-table-3 {
    background: #52be7f;
  }
  .flat-table-3 tr:hover {
    background: rgba(0,0,0,0.1);
  }

.btn {
  min-width: 150px;
  color: #fff;
  box-sizing: border-box;
  border: 1px solid #333a46;
  background: 0;
  text-transform: uppercase;
  transition: all 0.1s ease;
  font-size: 15px;
  padding: 10px;
  outline: 0;
  cursor: pointer;
  overflow: hidden;
  position: relative;
}
.btn span {
  color: #fff;
  position: absolute;
  width: 100%;
  height: 100%;
  padding: 10px;
  box-sizing: border-box;
  bottom: -100%;
  left: 0;
  display: inline-block;
  background: #4d4dff;
  font-size: 15px;
  transition: all 0.2s ease;
}
.btn_primary {
  color: #4d4dff;
  border-color: #4d4dff;
}
.btn_primary span {
  color: #4d4dff;
  background: #4d4dff;
}


  </style>

  </body>
  </html>