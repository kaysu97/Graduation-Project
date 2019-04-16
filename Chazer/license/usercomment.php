<?php

$name_entered= $_POST['name'];
$comment_entered= $_POST['comment'];
$aid = $_POST['articleid'];

require 'license_config.php';

$sql ="INSERT INTO usercomment (name, comment, date, articleid) VALUES ('$name_entered', '$comment_entered', now(),$aid)";
$query = "SELECT * FROM usercomment WHERE articleid=$aid ORDER BY ID DESC";

if ((!empty($name_entered)) && (!empty($comment_entered)))
{
  if(mysqli_query($conn,$sql)){
    $result= mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($result)){
      $name_field= $row['name'];
      $date_field= $row['date'];
      $comment_field= $row['comment'];

      echo '<li class="media">
      <div class="media-body">
      <div class="well well-lg">
      <h4 class="media-heading text-uppercase reviews">'.$name_field.'</h4>
      <ul class="media-date text-uppercase reviews list-inline">
      <li class="dd">'.$date_field.'</li>
      </ul>
      <p class="media-comment">'.$comment_field.'</p>
      </div>
      </div>
      </li>';

    }
  }else{
    echo '新增失敗';
  }
}else{
  echo '新增失敗2';
}


?>
