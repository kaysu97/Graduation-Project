<?php
require 'collegeconfig.php';

$useremail= $_POST['useremail'];
$aid = $_POST['articleid'];

$love = mysqli_query($conn,"SELECT * FROM collegearticle WHERE id ='$aid'");
if($lovetime = mysqli_fetch_array($love)){
  $lovetimes = $lovetime['lovetimes'];
  $newlovetimes = ++$lovetimes;
}
$query ="UPDATE collegearticle SET lovetimes ='$newlovetimes' WHERE id ='$aid'";
if(mysqli_query($conn,$query)){
}else{
  echo '新增失敗';
}


$sql ="INSERT INTO favorite (email, articleid, time) VALUES ('$useremail', '$aid' , now())";

  if(mysqli_query($conn,$sql)){
    // }
  }else{
    echo '新增失敗';
  }

?>
