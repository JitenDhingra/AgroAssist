 <?php
if(!isset($_SESSION)){
    session_start();
} 
$servername = "localhost";
$user = "id3962872_admin";
$password = "jiten3446472";
$dbname = "id3962872_users";

// Create connection
$conn = new mysqli($servername, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$grains =$_POST['grains'];
$sql = "Update Users set grains = '$grains'  where Username = '{$_SESSION['Name']}'";
$result = $conn->query($sql);

$conn->close();
?> 