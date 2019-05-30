<?php
// Create connection
$conn = new mysqli("localhost","id3962872_admin","jiten3446472","id3962872_users");// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "connected";
}



		echo "hi";
	/*	$username = trim($_POST['Username']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);
  
  $email = trim($_POST['Email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $password = trim($_POST['Password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);

  $area = trim($_POST['Area']);
  $area = strip_tags($area);
  $area = htmlspecialchars($area);

  $phone = trim($_POST['Phone']);
  $phone = strip_tags($phone);
  $phone = htmlspecialchars($phone);

  $city = trim($_POST['City']);
  $city = strip_tags($city);
  $city = htmlspecialchars($city);

  $state = trim($_POST['State']);
  $state = strip_tags($state);
  $state = htmlspecialchars($state);

  $name = trim($_POST['Name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $occupation = trim($_POST['Occupation']);
  $occupation = strip_tags($occupation);
  $occupation = htmlspecialchars($occupation);

  $income = trim($_POST['Income']);
  $income = strip_tags($income);
  $income = htmlspecialchars($income);*/
    $name = $_POST['Name'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$phone = $_POST['Phone'];
	$city = $_POST['City'];
	$state = $_POST['State'];
	$email = $_POST['Email'];
	$area = $_POST['Area'];
	$occupation = $_POST['Occupation'];
	$income = $_POST['Income'];
	$image = $_POST['image'];
	echo "hi";
	$sql = "INSERT INTO Users (Username, Password, Name, Email, Phone, Area, City, State, Occupation, Income, image) VALUES ('$username', '$password', '$name','$email','$phone','$area','$city','$state','$occupation','$income','$image')";
echo "hi";
if ($name!="" && $username !="" && $password!= "" &&$conn->query($sql) === TRUE) {
include 'index.php';
echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
}

$conn->close();
?>