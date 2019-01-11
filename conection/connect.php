<?php
/*mysql_connect("localhost","root","") or die("No Connection");
mysql_select_db("assignment") or die("No Database name");*/


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "assignment";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 //$conn -> close();
 
 
?>