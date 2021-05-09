<?php
function OpenCon()
 {
 $dbhost = "sql309.epizy.com";
 $dbuser = "epiz_28490176";
 $dbpass = "Yjx7sbh3Pf9fB";
 $db = "epiz_28490176_plasma";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>