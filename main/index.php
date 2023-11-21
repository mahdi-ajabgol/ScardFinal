<?php
session_start();
$_SESSION["login"];
if (isset($_SESSION["login"])){
  if ($_SESSION["login"] == "yes"){
    header("Location: ./main.php");
  }else{
    header("Location: ./main.php");
}}else{
  header("Location: ./main.php");
}
?>