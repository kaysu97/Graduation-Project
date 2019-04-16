<?php
session_start();
require 'collegeconfig.php';
$email = $_SESSION['email'];
$history = "SELECT * FROM collegehistory WHERE email = '$email' ORDER BY watchedtime desc";
$result = mysqli_query($conn, $history);
echo '瀏覽紀錄 ： </br>';

while ($dbrow = mysqli_fetch_array($result)) {
  $articleid = $dbrow['articleid'];
  $watched = "SELECT * FROM collegearticle WHERE id ='$articleid'";
  $watchedresult = mysqli_query($conn,$watched);
  $historyrow = mysqli_fetch_array($watchedresult);
  echo '<a href="school-2.php?id='.$historyrow['id'].'">'.$historyrow['CollegeName'].$historyrow['CollegeDepartment'].'&nbsp;&nbsp;&nbsp;文章編號 :'.$historyrow['id'].'&nbsp;&nbsp;&nbsp;觀看時間 :'.$dbrow['watchedtime'].'</a></br>';
}'</a></br>';


 ?>
