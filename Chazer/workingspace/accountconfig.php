<?php
$dbServername = "140.119.19.16";
$dbUsername = "howard";
$dbPassword = "ilovehoward";
$dbName = "accounts";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
?>
