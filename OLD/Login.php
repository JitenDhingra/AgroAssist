<?php

$uname = $_POST["Usersname"];
$pass = $_POST["Password"];

 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: /Home.php");
 }
 include_once 'dbconnect.php';

 $error = false;
$result = mysql_query("SELECT Usersname, Password FROM users WHERE Username = $Username");

$row = mysql_fetch_array($result);

if($row["Username"]==$email && $row["Password"]==$pass)
{
    $_SESSION['Username']=$uname;
    echo"You are a validated user.";
header("Location: /Home.html");
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>