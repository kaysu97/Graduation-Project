<?php
require 'configcompany.php';
$useremail= $_POST['useremail'];
$aid = $_POST['articleid'];

$love = mysqli_query($conn,"SELECT * FROM companyarticle WHERE id ='$aid'");
if($lovetime = mysqli_fetch_array($love)){
  $lovetimes = $lovetime['lovetimes'];
  $newlovetimes = --$lovetimes;
}
$query ="UPDATE companyarticle SET lovetimes ='$newlovetimes' WHERE id ='$aid'";
if(mysqli_query($conn,$query)){
}else{
  echo '新增失敗';
}


$sql ="DELETE FROM favorite WHERE email ='$useremail' AND articleid = '$aid'";
  if(mysqli_query($conn,$sql)){
  }else{
    echo '新增失敗';
  }

?>
