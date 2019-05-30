<?php
// Create connection
$conn = new mysqli("localhost","id3962872_admin",'',"id3962872_users");// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "connected";
}
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['phone_num']) &&isset($_POST['password'])){
	
    $name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phones = $_POST['phone_num'];
	$city = $_POST['city'];
	$sql = "INSERT INTO worker (Name, Username, Password, Phone,Address)
	VALUES ('$name', '$username', '$password','$phones','$city')";
}
if ($name!="" && $username !="" && $password!= "" && $conn->query($sql) === TRUE) {
    echo "New record created successfully"."<br><br>";
	echo '<a href = "index.html"><input type = "button" value = "Login"></a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>