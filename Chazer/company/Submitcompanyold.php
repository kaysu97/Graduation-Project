<!DOCTYPE html>
<body>

  <?php
  session_start();

  include 'configcompany.php';
   // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


  if (isset($_POST['portcontent'])) {
    $portcontent = $_POST['portcontent'];
  }
  else {
    $portcontent = '';
  }
  if (isset($_POST['certificationex'])) {
    $certificationex = $_POST['certificationex'];
  }
  else {
    $certificationex = '';
  }
  if (isset($_POST['interview'])) {
    $interview = $_POST['interview'];
  }
  else {
    $interview = '';
  }
  if (isset($_POST['interviewlevel'])) {

    $myinterviewlevel = implode (",", $_POST['interviewlevel']);
  }
  else {
    // $myinterviewlevel = $_POST['interviewlevel'];
    $myinterviewlevel = '';
  }

  if (isset($_POST['interviewerNumber'])) {
    $interviewerNumber = $_POST['interviewerNumber'];
  }
  else {
    $interviewerNumber = '';
  }
  if (isset($_POST['intervieweeNumber'])) {
    $intervieweeNumber  = $_POST['intervieweeNumber'];
  }
  else {
    $intervieweeNumber = '';
  }
  if (isset($_POST['interviewDuration'])) {
    $interviewDuration = $_POST['interviewDuration'];
  }
  else {
    $interviewDuration = '';
  }
  if (isset($_POST['dresscode'])) {
    $dresscode = $_POST['dresscode'];
  }
  else {
    $dresscode = '';
  }
  if (isset($_POST['interviewQ1'])) {
    $interviewQ1 = $_POST['interviewQ1'];
  }
  else {
    $interviewQ1 = '';
  }
  if (isset($_POST['interviewA1'])) {
    $interviewA1 = $_POST['interviewA1'];
  }
  else {
    $interviewA1 = '';
  }
  if (isset($_POST['interviewQ2'])) {
    $interviewQ2 = $_POST['interviewQ2'];
  }
  else {
    $interviewQ2 = '';
  }
  if (isset($_POST['interviewA2'])) {
    $interviewA2 = $_POST['interviewA2'];
  }
  else {
    $interviewA2 = '';
  }
  if (isset($_POST['interviewQ3'])) {
    $interviewQ3 = $_POST['interviewQ3'];
  }
  else {
    $interviewQ3 = '';
  }
  if (isset($_POST['interviewA3'])) {
    $interviewA3 = $_POST['interviewA3'];
  }
  else {
    $interviewA3 = '';
  }

  if (isset($_POST['interviewQ4'])) {
    $interviewQ4 = $_POST['interviewQ4'];
  }
  else {
    $interviewQ4 = '';

  }

    if (isset($_POST['interviewA4'])) {
    $interviewA4 = $_POST['interviewA4'];
  }
  else {
    $interviewA4 = '';
  }

  if (isset($_POST['test'])) {
    $test = $_POST['test'];
  }
  else {
    $test = '';
  }
  if (isset($_POST['testlevel'])) {

    $mytestlevel = implode (",", $_POST['testlevel']);
  }
  else {
    // $mytestlevel = $_POST['testlevel'];
    $mytestlevel = '';
  }
  if (isset($_POST['testQType'])) {

    $mytestQType = implode (",",$_POST['testQType']);
  }
  else {
    // $mytestQType = $_POST['testQType1'];
    $mytestQType = '';
  }
  if (isset($_POST['testexample1'])) {
    $testexample1 = $_POST['testexample1'];
  }
  else {
    $testexample1 = '';
  }
  if (isset($_POST['testA1'])) {
    $testA1 = $_POST['testA1'];
  }
  else {
    $testA1 = '';
  }
  if (isset($_POST['testexample2'])) {
    $testexample2 = $_POST['testexample2'];
  }
  else {
    $testexample2 = '';
  }
  if (isset($_POST['testA2'])) {
    $testA2 = $_POST['testA2'];
  }
  else {
    $testA2 = '';
  }
  if (isset($_POST['testexample3'])) {
    $testexample3 = $_POST['testexample3'];
  }
  else {
    $testexample3 = '';
  }
  if (isset($_POST['testA3'])) {
    $testA3 = $_POST['testA3'];
  }
  else {
    $testA3 = '';
  }
  if (isset($_POST['testexample4'])) {
    $testexample4 = $_POST['testexample4'];
  }
  else {
    $testexample4 = '';
  }
  if (isset($_POST['testA4'])) {
    $testA4 = $_POST['testA4'];
  }
  else {
    $testA4 = '';
  }
  if (isset($_POST['other'])) {
    $other = $_POST['other'];
  }
  else {
    $other = '';
  }
  if (isset($_POST['reother'])) {
    $reother = $_POST['reother'];
  }
  else {
    $reother = '';
  }
   if (isset($_POST['experienceshare'])) {
    $experienceshare = $_POST['experienceshare'];
  }
  else {
    $experienceshare = '';
  }

  $CompanyNameSelected = $_POST['CompanyNameSelected'];
  $applydepatment = $_POST['applydepatment'];
  $interviewDate = $_POST['interviewDate'];
  $portfolio = $_POST['portfolio'];
  $certification = $_POST['certification'];
  $Admitted= $_POST['Admitted'];
  $admitiontime = $_POST['admitiontime'];

  $user = $_SESSION['email'];




$stmt = $conn->prepare("INSERT INTO companyarticle (CompanyNameSelected, applydepatment, interviewDate, certification, Admitted, portfolio, portcontent, admitiontime, certificationex, interview, myinterviewlevel,interviewerNumber,intervieweeNumber,interviewDuration, dresscode, interviewQ1,interviewA1,interviewQ2,interviewA2,interviewQ3,interviewA3,interviewQ4,interviewA4,test,mytestlevel,mytestQType,testexample1,testA1,testexample2,testA2,testexample3,testA3,testexample4,testA4,other,reother,experienceshare,uploadtime,user)
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now(),?)");
 $stmt->bind_param("ssssssssssssssssssssssssssssssssssssss",$CompanyNameSelected,$applydepatment,$interviewDate, $certification, $Admitted, $portfolio,$portcontent,$admitiontime,$certificationex,$interview,$myinterviewlevel,$interviewerNumber,$intervieweeNumber,$interviewDuration,$dresscode,
    $interviewQ1,$interviewA1,$interviewQ2,$interviewA2,$interviewQ3,$interviewA3,$interviewQ4,$interviewA4,$test,$mytestlevel,$mytestQType,$testexample1,$testA1,$testexample2,$testA2,$testexample3,$testA3,$testexample4,$testA4,$other,$reother,$experienceshare,$user);

 if ($stmt->execute()) {
    echo "<script type='text/javascript'>alert('分享成功！');
    window.location='Comarticlecontent.php';
    </script>". "分享成功";
  } else {
    // echo "<script type='text/javascript'>alert('分享失敗！');
    // window.location='school-1.php';
    // </script>";

    echo "Error: "  . "<br>" . $conn->error;
  }
  mysqli_close($conn);



    ?>
    <form action="CollegePage.php">
      <button style="margin-top: 20px;">回文章目錄</button>
    </form>
  </body>
  </html>
