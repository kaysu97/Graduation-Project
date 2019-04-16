<?php
session_start();

require 'collegeconfig.php';

if (isset($_POST['InterviewerNumber01'])) {
  $InterviewerNumber01 = $_POST['InterviewerNumber01'];
}
else {
  $InterviewerNumber01 = '';
}
if (isset($_POST['IntervieweeNumber01'])) {
  $IntervieweeNumber01 = $_POST['IntervieweeNumber01'];
}
else {
  $IntervieweeNumber01 = '';
}
if (isset($_POST['InterviewDuration01'])) {
  $InterviewDuration01 = $_POST['InterviewDuration01'];
}
else {
  $InterviewDuration01 = '';
}

if (isset($_POST['QuestionType01'])) {
  $QuestionType01 = implode(',', $_POST['QuestionType01']);
}
else {
  $QuestionType01 = '';
}
if (isset($_POST['Question011'])) {
  $Question011 = $_POST['Question011'];
}
else {
  $Question011 = '';
}
if (isset($_POST['PersonalAnswer011'])) {
  $PersonalAnswer011 = $_POST['PersonalAnswer011'];
}
else {
  $PersonalAnswer011 = '';
}
if (isset($_POST['Question012'])) {
  $Question012 = $_POST['Question012'];
}
else {
  $Question012 = '';
}
if (isset($_POST['PersonalAnswer012'])) {
  $PersonalAnswer012 = $_POST['PersonalAnswer012'];
}
else {
  $PersonalAnswer012 = '';
}
// if (isset($_POST['Question013'])) {
//   $Question013 = $_POST['Question013'];
// }
// else {
//   $Question013 = '';
// }
// if (isset($_POST['PersonalAnswer013'])) {
//   $PersonalAnswer013 = $_POST['PersonalAnswer013'];
// }
// else {
//   $PersonalAnswer013 = '';
// }
if (isset($_POST['SpecialRequirement01'])) {
  $SpecialRequirement01 = $_POST['SpecialRequirement01'];
}
else {
  $SpecialRequirement01 = '';
}
// if (isset($_POST['InterviewType02'])) {
//   $InterviewType02 = $_POST['InterviewType02'];
// }
// else {
//   $InterviewType02 = '';
// }
if (isset($_POST['InterviewerNumber02'])) {
  $InterviewerNumber02 = $_POST['InterviewerNumber02'];
}
else {
  $InterviewerNumber02 = '';
}
if (isset($_POST['IntervieweeNumber02'])) {
  $IntervieweeNumber02 = $_POST['IntervieweeNumber02'];
}
else {
  $IntervieweeNumber02 = '';
}
if (isset($_POST['InterviewDuration02'])) {
  $InterviewDuration02 = $_POST['InterviewDuration02'];
}
else {
  $InterviewDuration02 = '';
}
if (isset($_POST['QuestionType02'])) {
  $QuestionType02 = implode(',', $_POST['QuestionType02']);
}
else {
  $QuestionType02 = '';
}
if (isset($_POST['Question021'])) {
  $Question021 = $_POST['Question021'];
}
else {
  $Question021 = '';
}
if (isset($_POST['PersonalAnswer021'])) {
  $PersonalAnswer021 = $_POST['PersonalAnswer021'];
}
else {
  $PersonalAnswer021 = '';
}
if (isset($_POST['Question022'])) {
  $Question022 = $_POST['Question022'];
}
else {
  $Question022 = '';
}
if (isset($_POST['PersonalAnswer022'])) {
  $PersonalAnswer022 = $_POST['PersonalAnswer022'];
}
else {
  $PersonalAnswer022 = '';
}
// if (isset($_POST['Question023'])) {
//   $Question023 = $_POST['Question023'];
// }
// else {
//   $Question023 = '';
// }
// if (isset($_POST['PersonalAnswer023'])) {
//   $PersonalAnswer023 = $_POST['PersonalAnswer023'];
// }
// else {
//   $PersonalAnswer023 = '';
// }
if (isset($_POST['SpecialRequirement02'])) {
  $SpecialRequirement02 = $_POST['SpecialRequirement02'];
}
else {
  $SpecialRequirement02 = '';
}
if (isset($_POST['PersonalOpinion'])) {
  $PersonalOpinion = $_POST['PersonalOpinion'];
}
else {
  $PersonalOpinion = '';
}
if (isset($_POST['oralquestion011'])) {
  $oralquestion011 = $_POST['oralquestion011'];
}
else {
  $oralquestion011 = '';
}
if (isset($_POST['oralanswer011'])) {
  $oralanswer011 = $_POST['oralanswer011'];
}
else {
  $oralanswer011 = '';
}
if (isset($_POST['oralquestion012'])) {
  $oralquestion012 = $_POST['oralquestion012'];
}
else {
  $oralquestion012 = '';
}
if (isset($_POST['oralanswer012'])) {
  $oralanswer012 = $_POST['oralanswer012'];
}
else {
  $oralanswer012 = '';
}
if (isset($_POST['oralquestion021'])) {
  $oralquestion021 = $_POST['oralquestion021'];
}
else {
  $oralquestion021 = '';
}
if (isset($_POST['oralanswer021'])) {
  $oralanswer021 = $_POST['oralanswer021'];
}
else {
  $oralanswer021 = '';
}
if (isset($_POST['oralquestion022'])) {
  $oralquestion022 = $_POST['oralquestion022'];
}
else {
  $oralquestion022 = '';
}
if (isset($_POST['oralanswer022'])) {
  $oralanswer022 = $_POST['oralanswer022'];
}
else {
  $oralanswer022 = '';
}


if (isset($_POST['InterviewType01'])) {
  $InterviewType01 = $_POST['InterviewType01'];
  if($InterviewType01 == '筆試'){
    $InterviewerNumber01 = "";
    $IntervieweeNumber01 = "";
    $InterviewDuration01 = "";
    $oralquestion011 = "";
    $oralanswer011 = "";
    $oralquestion012 = "";
    $oralanswer012 = "";
    $SpecialRequirement01 = "";

  }elseif($InterviewType01 == '參訪') {
    $InterviewerNumber01 = "";
    $IntervieweeNumber01 = "";
    $InterviewDuration01 = "";
    $oralquestion011 = "";
    $oralanswer011 = "";
    $oralquestion012 = "";
    $oralanswer012 = "";
    $QuestionType01 = "";
    $Question011 = "";
    $Question012 = "";
    $Question013 = "";
    $PersonalAnswer011 = "";
    $PersonalAnswer012 = "";
    $PersonalAnswer013 = "";
  }elseif($InterviewType01 == '面試'){
    $QuestionType01 = "";
    $Question011 = "";
    $Question012 = "";
    $Question013 = "";
    $PersonalAnswer011 = "";
    $PersonalAnswer012 = "";
    $PersonalAnswer013 = "";
    $SpecialRequirement01 = "";
  }
}
else {
  $InterviewType01 = '';
}

if (isset($_POST['InterviewType02'])) {
  $InterviewType02 = $_POST['InterviewType02'];
  if($InterviewType02 == '筆試'){
    $InterviewerNumber02 = "";
    $IntervieweeNumber02 = "";
    $InterviewDuration02 = "";
    $oralquestion021 = "";
    $oralanswer021 = "";
    $oralquestion022 = "";
    $oralanswer022 = "";
    $SpecialRequirement02 = "";

  }elseif($InterviewType02 == '參訪') {
    $InterviewerNumber02 = "";
    $IntervieweeNumber02 = "";
    $InterviewDuration02 = "";
    $oralquestion021 = "";
    $oralanswer021 = "";
    $oralquestion022 = "";
    $oralanswer022 = "";
    $QuestionType02 = "";
    $Question021 = "";
    $Question022 = "";
    $Question023 = "";
    $PersonalAnswer021 = "";
    $PersonalAnswer022 = "";
    $PersonalAnswer023 = "";
  }elseif($InterviewType02 == '面試'){
    $QuestionType02 = "";
    $Question021 = "";
    $Question022 = "";
    $Question023 = "";
    $PersonalAnswer021 = "";
    $PersonalAnswer022 = "";
    $PersonalAnswer023 = "";
    $SpecialRequirement02 = "";
  }
}
else {
  $InterviewType02 = '';
}


$CollegeNameSelected = $_POST['CollegeNameSelected'];
$CollegeDepartmentSelected = $_POST['CollegeDepartmentSelected'];
$Score = $_POST['Score'];
$Admitted = $_POST['Admitted'];
$InterviewDate = $_POST['InterviewDate'];
$Application = $_POST['Application'];
$user = $_SESSION['email'];
$articleid = $_POST['articleid'];

$stmt = "UPDATE collegearticle SET CollegeName='$CollegeNameSelected', CollegeDepartment='$CollegeDepartmentSelected', InterviewDate='$InterviewDate', Score='$Score', Application='$Application', Admitted='$Admitted', InterviewType01='$InterviewType01', InterviewerNumber01='$InterviewerNumber01',
IntervieweeNumber01='$IntervieweeNumber01', InterviewDuration01='$InterviewDuration01', oralquestion011='$oralquestion011', oralanswer011='$oralanswer011', oralquestion012='$oralquestion012', oralanswer012='$oralanswer012', QuestionType01='$QuestionType01', Question011='$Question011',
Question012='$Question012', PersonalAnswer011='$PersonalAnswer011', PersonalAnswer012='$PersonalAnswer012', SpecialRequirement01='$SpecialRequirement01', InterviewType02='$InterviewType02', InterviewerNumber02='$InterviewerNumber02', IntervieweeNumber02='$IntervieweeNumber02', InterviewDuration02='$InterviewDuration02', oralquestion021='$oralquestion021', oralanswer021='$oralanswer021', oralquestion022='$oralquestion022', oralanswer022='$oralanswer022', QuestionType02='$QuestionType02', Question021='$Question021',
PersonalAnswer021='$PersonalAnswer021', Question022='$Question022', PersonalAnswer022='$PersonalAnswer022', SpecialRequirement02='$SpecialRequirement02',
PersonalOpinion='$PersonalOpinion', uploadtime = now() WHERE id='$articleid'";

if(mysqli_query($conn,$stmt)){
  echo "<script type='text/javascript'>alert('更新成功 ！');
  window.location='school-1.php';
  </script>";
}else{
  echo '新增失敗';
}



?>
