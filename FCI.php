<!DOCTYPE html>
<html>
<head>
<title>Jiten Dhingra</title>
<link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">

<style>
body {
  background-image:"wheat.jpg";
}

.wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC http://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 7px 0;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}

span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 34px;
}

.product-price-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}


table.db-table 		{ border-right:1px solid #000; border-bottom:1px solid #ccc; }
table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #000; }
table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
<body>
<!--<div class="wrapper">
    <div class="product-img">
      <img src="Varun.jpg" height="420" width="327">
    
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Varun Agarwal</h1>
        <h2>Warehouse Owner</h2>
        <p>Capacity Of grains ( in KGs) : 1350 <br> 
      </div>
      <div class="product-price-btn">
        <a href="/MyProfile.html"><button type="button">See All Details</button></a> 
      </div>
    </div>
  </div>
<br><br>
<div class="wrapper">
    <div class="product-img">
      <img src="jiten.jpg" height="420" width="327">
    
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Jiten Dhingra</h1>
        <h2>Farmer</h2>
        <p>Amount Of grains ( in KGs) : 1800 <br> 
      </div>
      <div class="product-price-btn">
        <a href="/MyProfile.html"><button type="button">See All Details</button></a> 
      </div>
    </div>
  </div>
</body>

</html>
  
 -->
<?php

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

$sql1 = "SELECT Name, Area, City, State, Phone, Email, Occupation, Income, Temperature, Humidity, Grains FROM Users";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Area</th><th>City</th><th>State</th><th>Phone</th><th>Email</th><th>Occupation</th><th>Income</th><th>Current Temperature</th><th>Current Humidity</th><th>Amount of Grains</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>". $row["Area"]. "</td><td>". $row["City"]. "</td><td>". $row["State"]. "</td><td>". $row["Phone"]. "</td><td>". $row["Email"]. "</td><td>". $row["Occupation"]. "</td><td>". $row["Income"]. "</td><td>". $row["Temperature"]. "</td><td>". $row["Humidity"]. "</td><td>" . $row["Grains"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>
