<?php


require 'collegeconfig.php';

if(isset($_POST["CollegeName"]) && !empty($_POST["CollegeName"])){

$query = mysqli_query($conn,"SELECT CollegeDepartment FROM CollegeDepartment WHERE CollegeName = '".$_POST['CollegeName']."'");

while($dbrow = mysqli_fetch_array($query)){

  echo '<option value="'.$dbrow['CollegeDepartment'].'">'.$dbrow['CollegeDepartment'].'</option>';

}
}


?>
