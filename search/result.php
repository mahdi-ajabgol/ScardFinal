<?php
session_start();
$servername = "localhost";
$username = "technonu_ad";
$password = "MHD2780qw";
$dbname = "technonu_pt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$usera = $_GET["username"];
$sql = "SELECT Username, Name, LastName, PhoneNumber FROM users WHERE Username='$usera'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$a = $row["Username"];
	$b = $row["Name"];
	$c = $row["LastName"];
	$d = $row["PhoneNumber"];
    echo"". $a ."". $b ."". $c ;
  }
}
$conn->close();
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./result.css">
</head>
<body>
    <div class="card-container">

        <div class="card" id="card1">


            <div class="person">
                <div class="photo"></div>
                <div class="description-container">
                    <p class="name text"><?php echo "$b"; ?></p>
                </div>
            </div>

            <div class="description">
                <p class="card-name text">Scard</p>
                <p class="meli-code text"><?php echo "$c"; ?></p>
                <p class="mojodi text"><?php echo "$d"; ?></p>
            </div>
            
        </div>
</body>
</html>