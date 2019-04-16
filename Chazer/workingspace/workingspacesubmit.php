<?php
  session_start();
  require 'workingspaceconfig.php';

  if(isset($_POST['CompanyNameSelected'])){
    $company = $_POST['CompanyNameSelected'];
  }else{
    $company = '';
  }
  if(isset($_POST['department'])){
    $department = $_POST['department'];
  }else{
    $department = '';
  }
  if(isset($_POST['salary'])){
    $salary = $_POST['salary'];
  }else{
    $salary = '';
  }
  if(isset($_POST['duty'])){
    $duty = $_POST['duty'];
  }else{
    $duty = '';
  }
  if(isset($_POST['atmosphererating'])){
    $atmosphere = $_POST['atmosphererating'];
  }else{
    $atmosphere = '';
  }
  if(isset($_POST['comfortrating'])){
    $comfort = $_POST['comfortrating'];
  }else{
    $comfort = '';
  }
  if(isset($_POST['communicationrating'])){
    $communication = $_POST['communicationrating'];
  }else{
    $communication = '';
  }
  if(isset($_POST['uprating'])){
    $up = $_POST['uprating'];
  }else{
    $up = '';
  }
  if(isset($_POST['barrierrating'])){
    $barrier = $_POST['barrierrating'];
  }else{
    $barrier = '';
  }
  if(isset($_POST['btrating'])){
    $bt = $_POST['btrating'];
  }else{
    $bt = '';
  }
  if(isset($_POST['workinghours'])){
    $workinghours = $_POST['workinghours'];
  }else{
    $workinghours = '';
  }
  
  if(isset($_POST['overtimefrequency'])){
    $overtimefrequency = $_POST['overtimefrequency'];
  }else{
    $overtimefrequency = '';
  }
  if(isset($_POST['overtimehours'])){
    $overtimehours = $_POST['overtimehours'];
  }else{
    $overtimehours = '';
  }

  if(isset($_POST['overtime'])){
    $overtime = $_POST['overtime'];
      if($overtime == '否'){
        $overtimefrequency = '';
        $overtimehours = '';
      }
  }else{
    $overtime = '';
    $overtimefrequency = '';
    $overtimehours = '';
  }

  if(isset($_POST['obstacle'])){
    $obstacle = $_POST['obstacle'];
  }else{
    $obstacle = '無';
  }
  if(isset($_POST['welfare'])){
    $welfare = $_POST['welfare'];
  }else{
    $welfare = '無';
  }
  if(isset($_POST['personalopinion'])){
    $personalopinion = $_POST['personalopinion'];
  }else{
    $personalopinion = '';
  }
  $user = $_SESSION['email'];

  $stmt = $conn->prepare("INSERT INTO workingspacearticle(company, department, salary, duty, atmosphere, comfort, communication, up,
  barrier, bt, workinghours, overtime, overtimefrequency, overtimehours, obstacle, welfare, personalopinion, uploadtime, user)
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now(),?)");
  $stmt->bind_param("ssssssssssssssssss",$company,$department,$salary,$duty,$atmosphere,$comfort,$communication,
  $up,$barrier,$bt,$workinghours,$overtime,$overtimefrequency,$overtimehours,$obstacle,$welfare,$personalopinion,$user);

  if ($stmt->execute()) {
    echo "<script type='text/javascript'>alert('分享成功！');
    window.location='workingspace-1.php';
    </script>";
  } else {
    // echo "<script type='text/javascript'>alert('分享失敗！');
    // window.location='school-1.php';
    // </script>";

    // echo "Error: " . $stmt . "<br>" . $conn->error;
  }
  mysqli_close($conn);


 ?>
