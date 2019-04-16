<?php
session_start();
require 'license_config.php';

if (isset($_POST['LicenseTypeSelected'])) {
  $licensetype = $_POST['LicenseTypeSelected'];
}
else {
  $licensetype = '';
}
if (isset($_POST['licensename'])) {
  $licensename = $_POST['licensename'];
}
else {
  $licensename = '';
}
if (isset($_POST['ExamDate'])) {
  $licensedate = $_POST['ExamDate'];
}
else {
  $licensedate = '';
}
if (isset($_POST['signup'])) {
  $signup = implode(',', $_POST['signup']);
}
else {
  $signup = '';
}
if (isset($_POST['stageYorN'])) {
  $second = $_POST['stageYorN'];
}
else {
  $second = '';
}
if (isset($_POST['testTime1'])) {
  $testTime1 = $_POST['testTime1'];
}
else {
  $testTime1 = '';
}

if (isset($_POST['oralquestion011'])) {
  $oralquestion011 = $_POST['oralquestion011'];
}
else {
  $oralquestion011 = '';
}
if (isset($_POST['textquestion011'])) {
  $textquestion011 = $_POST['textquestion011'];
}
else {
  $textquestion011 = '';
}
if (isset($_POST['practicequestion011'])) {
  $practicequestion011 = $_POST['practicequestion011'];
}
else {
  $practicequestion011 = '';
}

if (isset($_POST['testTime2'])) {
  $testTime2 = $_POST['testTime2'];
}
else {
  $testTime2 = '';
}

if (isset($_POST['oralquestion021'])) {
  $oralquestion021 = $_POST['oralquestion021'];
}
else {
  $oralquestion021 = '';
}
if (isset($_POST['textquestion021'])) {
  $textquestion021 = $_POST['textquestion021'];
}
else {
  $textquestion021 = '';
}
if (isset($_POST['practicequestion021'])) {
  $practicequestion021 = $_POST['practicequestion021'];
}
else {
  $practicequestion021 = '';
}
if (isset($_POST['preparedtime'])) {
  $preparedtime = $_POST['preparedtime'];
}
else {
  $preparedtime = '';
}
if (isset($_POST['preparedhour'])) {
  $preparedhour = $_POST['preparedhour'];
}
else {
  $preparedhour = '';
}
if (isset($_POST['CramSchool'])) {
  $cramschool = $_POST['CramSchool'];
}
else {
  $cramschool = '';
}
if (isset($_POST['recommendbook'])) {
  $recommendbook = $_POST['recommendbook'];
    if($recommendbook == ''){
        $recommendbook = '無';
    }
}
else {
  $recommendbook = '';
}
if (isset($_POST['recommendsource'])) {
  $recommendsource = $_POST['recommendsource'];
    if($recommendsource == ''){
        $recommendsource = '無';
    }
}
else {
  $recommendsource = '';
}
if (isset($_POST['ps'])) {
  $ps = $_POST['ps'];
    if($ps == '' ){
        $ps = '無';
    }
}
else {
  $ps = '';
}
if (isset($_POST['personalopinion'])) {
  $personalopinion = $_POST['personalopinion'];
}
else {
  $personalopinion = '';
}
$user = $_SESSION['email'];


if (isset($_POST['ExamType01'])) {
  $examtype01 = $_POST['ExamType01'];
  if($examtype01 == '筆試'){
    $oralquestion011 = "";
    $practicequestion011 = "";

  }elseif($examtype01 == '實作') {
    $oralquestion011 = "";
    $textquestion011 = "";
  }elseif($examtype01 == '面試'){
    $textquestion011 = "";
    $practicequestion011 = "";
  }
}
else {
  $examtype01 = '';
}

if (isset($_POST['ExamType02'])) {
  $examtype02 = $_POST['ExamType02'];
  if($examtype02 == '筆試'){
    $oralquestion021 = "";
    $practicequestion021 = "";

  }elseif($examtype02 == '實作') {
    $oralquestion021 = "";
    $textquestion021 = "";
  }elseif($examtype02 == '面試'){
    $textquestion021 = "";
    $practicequestion021 = "";
  }
}
else {
  $examtype02 = '';
}











$stmt = $conn->prepare("INSERT INTO licensearticle(licensetype, licensename, licensedate, signup, second, examtype01,testTime1, oralquestion011,
textquestion011, practicequestion011, examtype02,testTime2, oralquestion021, textquestion021, practicequestion021, preparedtime, preparedhour, cramschool, recommendbook,
recommendsource, ps, personalopinion, uploadtime, user)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now(),?)");
$stmt->bind_param("sssssssssssssssssssssss",$licensetype,$licensename,$licensedate,$signup,$second,$examtype01,$testTime1,
$oralquestion011,$textquestion011,$practicequestion011,$examtype02,$testTime2,$oralquestion021,$textquestion021,$practicequestion021,$preparedtime,$preparedhour, $cramschool, $recommendbook,
$recommendsource, $ps, $personalopinion, $user);

if ($stmt->execute()) {
  echo "<script type='text/javascript'>alert('分享成功！');
  window.location='/newproject/license/license-1.php';
  </script>";
} else {
  // echo "<script type='text/javascript'>alert('分享失敗！');
  // window.location='school-1.php';
  // </script>";

  // echo "Error: " . $stmt . "<br>" . $conn->error;
}
mysqli_close($conn);


?>


<form action="lic.html">
<button style="margin-top: 20px;">回文章目錄</button>
</form>
</body>
</html>
