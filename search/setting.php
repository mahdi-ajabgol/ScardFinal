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

$user = $_POST['User'];
echo $user;

$sql = "SELECT Username, Name, LastName, PhoneNumber FROM users WHERE Username='$usernamee'";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		  $_SESSION["Username-p"] = $row["Username"];
		  $_SESSION["Name-p"] = $row["Name"];
		  $_SESSION["LastName-p"] = $row["LastName"];
		  $_SESSION["PhoneNumber-p"] = $row["PhoneNumber"];
		  header("Location: https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/search/result.php");
		}
	  }
$conn->close();
?>