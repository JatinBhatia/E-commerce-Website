<?php

$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('vtc');
$sql = "CREATE TABLE persons 
(PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
Name CHAR(50) NOT NULL,
Email CHAR(50) NOT NULL UNIQUE,
Password CHAR(50) NOT NULL,
Contact CHAR(50) NOT NULL,
City CHAR(50) NOT NULL,
Address CHAR(50) NOT NULL)";

if (mysql_query($sql))
	echo "persons table successfully created"."<br>";
else
	echo "Error in creating Person table: ".mysql_error()."<br>";

$sql = "CREATE TABLE flowers
(PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Price INT(10) NOT NULL)";

if (mysql_query($sql))
	echo "Flowers table successfully created"."<br>";
else
	echo "Error in creating Flowers table: ".mysql_error()."<br>";
mysql_close($con);
?>