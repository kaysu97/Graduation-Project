<?php
session_start();
require 'collegeconfig.php';
$name = $_SESSION['name'];
$email = $_SESSION['email'];

$query = $conn->query("SELECT * FROM favorite WHERE email = '$email'");
echo 'hello '.$name.'</br>';

while($dbrow = mysqli_fetch_array($query)){
  $aid = $dbrow['articleid'];
  $query2 = $conn->query("SELECT * FROM collegearticle WHERE id = '$aid'");
  $aidresult = $query2->fetch_assoc();
  $articlename = $aidresult['CollegeName'];
  $articledepartment = $aidresult['CollegeDepartment'];
  // echo $articlename.$articledepartment.'</br>';
  echo '<a href="school-2.php?id='.$dbrow['articleid'].'">'.$articlename.$articledepartment.'</a></br>';

}

 ?>
