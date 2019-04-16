<?php
$articleid = $_REQUEST['id'];
// echo $articleid;

require 'license_config.php';
$sql="DELETE FROM favorite WHERE articleid = $articleid";
mysqli_query($conn,$sql);
$sql="DELETE FROM usercomment WHERE articleid = $articleid";
mysqli_query($conn,$sql);


$sql="DELETE FROM licensearticle WHERE id = $articleid";
if(mysqli_query($conn,$sql)){
  echo "<script type='text/javascript'>alert('刪除成功!');
  window.location='license-1.php';
  </script>";
}else{
  echo "Error deleting record: " . mysqli_error($conn);
}
?>
