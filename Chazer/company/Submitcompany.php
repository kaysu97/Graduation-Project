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
  
  if (isset($_POST['interviewlevel'])) {

    $interviewlevel = implode (",", $_POST['interviewlevel']);
  }
  else {
    // $myinterviewlevel = $_POST['interviewlevel'];
    $interviewlevel = '';
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
    
  if (isset($_POST['interview'])) {
    $interview = $_POST['interview'];
  }
  else {
    $interview = '';
    $interviewlevel = '';
    $interviewerNumber = '';
    $intervieweeNumber = '';
    $interviewDuration = '';
    $dresscode = '';
    $interviewQ1 = '';
    $interviewQ2 = '';
    $interviewQ3 = '';
    $interviewQ4 = '';
    $interviewA1 = '';
    $interviewA2 = '';
    $interviewA3 = '';
    $interviewA4 = '';
    
  }
    
  if (isset($_POST['testlevel'])) {

    $testlevel = implode (",", $_POST['testlevel']);
  }
  else {
    // $testlevel = $_POST['testlevel'];
    $testlevel = '';
  }
  if (isset($_POST['testDuration'])) {
    $testDuration = $_POST['testDuration'];
  }
  else {
    $testDuration = '';
  }
  if (isset($_POST['testQType'])) {

    $testQType = implode (",",$_POST['testQType']);
  }
  else {
    // $testQType = $_POST['testQType1'];
    $testQType = '';
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
    
  if (isset($_POST['test'])) {
    $test = $_POST['test'];
  }
  else {
    $test = '';
    $testlevel = '';
    $testDuration = '';
    $testQType = '';
    $testexample1 = '';
    $testexample2 = '';
    $testexample3 = '';
    $testexample4 = '';
    $testA1 = '';
    $testA2 = '';
    $testA3 = '';
    $testA4 = '';
  }    
    
  
  if (isset($_POST['reother'])) {
    $reother = $_POST['reother'];
  }
  else {
    $reother = '';
  }
    
  if (isset($_POST['other'])) {
    $other = $_POST['other'];
  }
  else {
    $other = '';
    $reother = '';
  }
    
  if (isset($_POST['experienceshare'])) {
    $experienceshare = $_POST['experienceshare'];
  }
  else {
    $experienceshare = '';
  }  
 
  $CompanyNameSelected = $_POST['CompanyNameSelected'];
  $applydepartment = $_POST['applydepartment'];
  $interviewDate = $_POST['interviewDate'];
  $portfolio = $_POST['portfolio'];
  $certification = $_POST['certification'];
  $Admitted= $_POST['Admitted'];
  $admitiontime = $_POST['admitiontime'];
  $user = $_SESSION['email'];

  if (isset($_POST['portfolio'])) {
  $portfolio = $_POST['portfolio'];
    if($portfolio == '否'){
    $portcontent = "";
    }
  } else {
    $portfolio = '';
  }
  if (isset($_POST['certification'])) {
    $certification = $_POST['certification'];
    if($certification == '否'){
        $certificationex = "";
    }
  } else {
    $certification = '';
  }


  $stmt = $conn->prepare("INSERT INTO companyarticle (CompanyNameSelected, applydepartment, interviewDate, certification, Admitted, portfolio, portcontent, admitiontime, certificationex, interview, interviewlevel,interviewerNumber,intervieweeNumber,interviewDuration, dresscode, interviewQ1,interviewA1,interviewQ2,interviewA2,interviewQ3,interviewA3,interviewQ4,interviewA4,test,testlevel,testDuration,testQType,testexample1,testA1,testexample2,testA2,testexample3,testA3,testexample4,testA4,other,reother,experienceshare,uploadtime,user)
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now(),?)");
  $stmt->bind_param("sssssssssssssssssssssssssssssssssssssss",$CompanyNameSelected,$applydepartment,$interviewDate, $certification, $Admitted, $portfolio,$portcontent,$admitiontime,$certificationex,$interview,$interviewlevel,$interviewerNumber,$intervieweeNumber,$interviewDuration,$dresscode,
  $interviewQ1,$interviewA1,$interviewQ2,$interviewA2,$interviewQ3,$interviewA3,$interviewQ4,$interviewA4,$test,$testlevel,$testDuration,$testQType,$testexample1,$testA1,$testexample2,$testA2,$testexample3,$testA3,$testexample4,$testA4,$other,$reother,$experienceshare,$user);

  if ($stmt->execute()) {
    echo "<script type='text/javascript'>alert('分享成功！');
    window.location='company-1.php';
    </script>". "分享成功";
  } else {
    // echo "<script type='text/javascript'>alert('分享失敗！');
    // window.location='school-1.php';
    // </script>";

    echo "Error: "  . "<br>" . $conn->error;
  }
  mysqli_close($conn);
  ?>
</body>
</html>
