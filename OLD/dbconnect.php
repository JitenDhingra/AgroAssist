<?php

 
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'id3962872_admin');
 define('DBPASS', 'jiten3446472');
 define('DBNAME', 'id3962872_users');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn,DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }