
<?php

session_start();
$servername = "localhost";
$username = "technonu_ad";
$password = "MHD2780qw";
$dbname = "technonu_pt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
$usernamee = $_SESSION["username"];
$_COOKIE[$cookie_name];
echo " 2". $_SESSION["username"];
echo " 2". $_SESSION["username"];
$sql = "SELECT Username, Name, HumanID, Balance FROM users WHERE Username='$usernamee'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$_SESSION["Username"] = $row["Username"];
	$_SESSION["Name"] = $row["Name"];
	$_SESSION["HumanID"] = $row["HumanID"];
	$_SESSION["Balance"] = $row["Balance"];
    echo " 1". $row["Username"] ." ". $row["Balance"];
  }
}

?>