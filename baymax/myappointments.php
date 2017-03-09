<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['username'])) { header("location:login.php");}
$username=$_SESSION['username'];
$con=mysqli_connect($svr,$usr,$pwd,$db);
$sql = mysqli_query($con,"SELECT * FROM appointments WHERE username='$username'");
if(mysqli_num_rows($sql)!=0)
{
    echo "<table class=\"flat-table flat-table-1\"><tr><th>Name</th><th>doctor</th><th>reason</th><th>time</th><th>status</th></tr>";
    while($row = mysqli_fetch_assoc($sql)) {
           echo "<tr><td>".$row['username']."</td>";
           echo "<td>".$row['doctor']."</td>";
	   echo "<td>".$row['reason']."</td>";
	   echo "<td>".$row['time']."</td>";
           echo "<td>".$row['status']."</td></tr>";
    }
}
else
{
echo "no previous appointments";
}
?>

<html>
<head><link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'></head>
<body><style>
* { 
font-family: 'Montserrat', sans-serif; }
.flat-table {
		margin-bottom: 20px;
		margin-left: 300px;
		border-collapse:collapse;
		font-family: 'Lato', Calibri, Arial, sans-serif;
		
              
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
		color: #f7f7f7;
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
	</style>

	</body>
	</html>