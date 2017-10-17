<?php
$username = "healthcare";
$password = "hlth34";
$hostname = "";  

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("healthcare",$dbhandle)
  or die("Could not select healthcare");
?>