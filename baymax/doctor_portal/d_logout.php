<?php
session_start();
if(session_destroy())
{
header("Location: d_login.php");
}
?>