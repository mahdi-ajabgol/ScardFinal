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

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$humanid = $_POST['humanid'];
$address = $_POST['address'];
$lastname = $_POST['lastname'];
$logORsign = $_POST['logORsign'];
// echo $name, $username, $password, $phonenumber, $humanid, $address, $lastname  ;





if ($logORsign == "login"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT Username, Name, HumanID, Balance, Password FROM users WHERE Username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {

        $_SESSION["Name"] = $row["Name"];
        $_SESSION["HumanID"] = $row["HumanID"];
        $_SESSION["Balance"] = $row["Balance"];
        $_SESSION["Username"] = $row["Username"];

        if ($row["Password"] == $password) {
          echo "2";
            $_SESSION["alert"] = "1";
            $_SESSION["login"] = "yes";
            header("Location: https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/main/main.php");
      }else {
        echo "3";
        $_SESSION["error"] = "نام کاربری یا رمز عبور اشتباه بود!";
        header("Location: ./index.php");
    }
    }
    }else {
      echo "21";
      $_SESSION["error"] = "نام کاربری یا رمز عبور اشتباه بود!";
      header("Location: ./index.php");
    }
}

if ($logORsign == "signup"){
  // global check_username($us_nm);
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
  $humanid = $_POST['humanid'];
  $address = $_POST['address'];
  $lastname = $_POST['lastname'];
  $logORsign = $_POST['logORsign'];
  $_SESSION["Name"] = $name;
  $_SESSION["HumanID"] = $humanid;
  $_SESSION["Balance"] = 0;
  $_SESSION["Username"] = $row["Username"];

  $sql = "SELECT Username, Password FROM users WHERE Username='$username'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      $_SESSION["error"] = "نام کاربری توسط فرد دیگری استفاده شده است";
      header("Location: https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/register/index.php");

  }else {
    $sql = "INSERT INTO users (Username, Password, Name, PhoneNumber, HumanID, Address, LastName, Safe, Balance, Active) VALUES ('$username', '$password', '$name', '$phonenumber', '$humanid', '$address', '$lastname', True, 0, True)";
    if ($conn->query($sql) === TRUE) {
      $_SESSION["alert"] = "1";
      $_SESSION["login"] = "yes";
      $_SESSION["name"] = $name;
      $_SESSION["humanid"] = $humanid;
      $_SESSION["inventory"] = 0;
        header("Location: https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/");
    } else {
        $_SESSION["error"] = "با خطایی مواجه شدیم!\nدوباره تلاش کنید";
        header("Location: https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/register/index.php");
    }

}}

$conn->close();

?>