<?php
// Create connection
$conn = new mysqli("localhost","id3962872_admin","jiten3446472","id3962872_users");// Check connection

// Check connection
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
}
if(isset($_POST['Password'])){
    $password = $_POST['Password'];	
}
$_SESSION["Name"] = $Name;
$sql= "SELECT * FROM Users WHERE Name = '$Name' AND Password = '$password' ";
$_SESSION["favcolor"] = 
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
echo "<br>";
if(isset($check)){
include 'Home.php';
echo "<script type='text/javascript'>alert('Logged in successfully!')</script>";
}else{
echo 'No such record exist in the database'."<br><br>";
echo "Login failed";
}

?>
