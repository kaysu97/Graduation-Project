<?php


include('collegeconfig.php');

if(isset($_POST["CollegeName"]) && !empty($_POST["CollegeName"])){
/*echo '<option value="99999">"+$_POST["CollegeName"]+"</option>';*/

$query = mysqli_query($conn,"SELECT CollegeDepartment FROM CollegeDepartment WHERE CollegeName = '".$_POST['CollegeName']."'");
echo '<option value="all">all</option>';

while($dbrow = mysqli_fetch_array($query)){

  echo '<option value="'.$dbrow['CollegeDepartment'].'">'.$dbrow['CollegeDepartment'].'</option>';

}
}


?>
