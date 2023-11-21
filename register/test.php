<?php

$servername = "localhost";
$username = "technonu_ad";
$password = "MHD2780qw";
$db = "technonu_pt";
$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
	die("Connection failed ".$conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["Name"] ."  " .$row["HumanID"]. "<br>";
}
} else {
	echo "0 records";
}
$conn->close();
echo "1";
?>