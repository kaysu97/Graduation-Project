<?php
require 'license_config.php';

$useremail= $_POST['useremail'];
$aid = $_POST['articleid'];

$love = mysqli_query($conn,"SELECT * FROM licensearticle WHERE id ='$aid'");
if($lovetime = mysqli_fetch_array($love)){
  $lovetimes = $lovetime['lovetimes'];
  $newlovetimes = ++$lovetimes;
}
$query ="UPDATE licensearticle SET lovetimes ='$newlovetimes' WHERE id ='$aid'";
if(mysqli_query($conn,$query)){
}else{
  echo '新增失敗';
}


$sql ="INSERT INTO favorite (email, articleid, time) VALUES ('$useremail', '$aid', now())";

  if(mysqli_query($conn,$sql)){
    // }
  }else{
    echo '新增失敗';
  }

?>
