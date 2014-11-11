<?php
$con = mysql_connect("localhost", "root", "");
if (mysql_error($con))
  echo "Failed to connect to MySQL: " . mysql_error()."<br>";
else
	echo "Connection established successfully"."<br>";
	
$sql = "CREATE DATABASE vtc";
if (mysql_query($sql))
	echo "Database Created successfully"."<br>";
else
	echo "Error in creating database: ".mysql_error($con)."<br>";


mysql_close($con);

?>