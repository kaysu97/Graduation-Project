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
  }else{
    $overtime = '';
    $overtimefrequency = '';
    $overtimehours = '';
  }

  if(isset($_POST['obstacle'])){
    $obstacle = $_POST['obstacle'];
  }else{
    $obstacle = '';
  }
  if(isset($_POST['welfare'])){
    $welfare = $_POST['welfare'];
  }else{
    $welfare = '';
  }
  if(isset($_POST['personalopinion'])){
    $personalopinion = $_POST['personalopinion'];
  }else{
    $personalopinion = '';
  }
  $user = $_SESSION['email'];
  $articleid = $_POST['articleid'];

  $stmt = "UPDATE workingspacearticle SET company='$company', department='$department', salary='$salary', duty='$duty', atmosphere='$atmosphere', comfort='$comfort', communication='$communication', up='$up',
  barrier='$barrier', bt='$bt', workinghours='$workinghours', overtime='$overtime', overtimefrequency='$overtimefrequency', overtimehours='$overtimehours', obstacle='$obstacle', welfare='$welfare', personalopinion='$personalopinion', uploadtime=NOW() WHERE id = '$articleid'";

  if(mysqli_query($conn,$stmt)){
    echo "<script type='text/javascript'>alert('更新成功！');
    window.location='workingspace-1.php';
    </script>";
  }else{
    echo '新增失敗';
  }
  mysqli_close($conn);


 ?>
