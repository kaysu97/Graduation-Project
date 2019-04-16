<?php
session_start();

$dbServername = "140.119.19.16";
$dbUsername = "howard";
$dbPassword = "ilovehoward";
$dbName = "accounts";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

$email=$_SESSION['email'];
$articleid = $_REQUEST['id'];

$history = "INSERT INTO watchedhistory (topic, articleid, user, watchedtime) VALUES ('workingspace', '$articleid','$email', now())";
if(mysqli_query($conn,$history)){
}else{
  echo 'something wrong.';
}
mysqli_close($conn);
?>

<?php
require 'workingspaceconfig.php';
$email=$_SESSION['email'];
$articleid = $_REQUEST['id'];
$login = $_SESSION['logged_in'];
if($login != 1){
  $_SESSION['message'] = "請先登入!";
  header("location: loginfirst.php");
}

$result = $conn->query("SELECT * FROM workingspacearticle WHERE id='$articleid'");
$uploader = $result->fetch_assoc();
//
// $collegename = $uploader['CollegeName'];
// $result2 = $conn->query("SELECT * FROM CollegeList WHERE collegename='$collegename'");
// $college = $result2->fetch_assoc();
//
// $departmentname = $uploader['CollegeDepartment'];
// $result3 = $conn->query("SELECT * FROM CollegeDepartment WHERE CollegeDepartment='$departmentname' AND CollegeName ='$collegename'");
// $department = $result3->fetch_assoc();
//
// $history = "INSERT INTO collegehistory (email, articleid, watchedtime) VALUES ('$email', '$articleid', now())";
// if(mysqli_query($conn,$history)){
// }else{
//   echo 'something wrong.';
// }
mysqli_close($conn);
?>
<?php
require 'accountconfig.php';
$poname = $uploader['user'];
$result3 = $conn->query("SELECT * FROM users WHERE email='$poname'");
$pouser = $result3->fetch_assoc();
mysqli_close($conn);
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chazer &mdash;</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="freehtml5.co" />
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />
  <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/school-2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<script src="js/modernizr-2.6.2.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
  $('#checkbox').change(function(){
    if ($('#checkbox').is(':checked')) {
      var useremail= document.getElementById("useremail").textContent;
      var articleid= document.getElementById("aid").textContent;
      // $("#" + pid).css('color','red');
      $.ajax({
        url: "favorite.php",
        data: {useremail: useremail, articleid: articleid},
        type: "POST",
        success:function(data){
        },
        error:function (){}
      });
      $('#checkbox').attr('checked', 'checked');
    }else{
      var useremail= document.getElementById("useremail").textContent;
      var articleid= document.getElementById("aid").textContent;
      // $("#" + pid).css('color','red');
      $.ajax({
        url: "unfavorite.php",
        data: {useremail: useremail, articleid: articleid},
        type: "POST",
        success:function(data){
        },
        error:function (){}
      });
      $('#checkbox').attr('checked', 'checked');
      $('#checkbox').removeAttr('checked');
    }
  });
});
</script>
<script>

function submitcomment() {

  var request;

  try {

    request= new XMLHttpRequest();

  }

  catch (tryMicrosoft) {

    try {

      request= new ActiveXObject("Msxml2.XMLHTTP");
    }

    catch (otherMicrosoft)
    {
      try {
        request= new ActiveXObject("Microsoft.XMLHTTP");
      }

      catch (failed) {
        request= null;
      }
    }
  }


  var webpage= location.href;

  position= webpage.lastIndexOf("/");

  var lastpart= webpage.substring(position + 1);

  var period= lastpart.indexOf(".");

  var complete= lastpart.substring(0, period);

  complete= complete.replace(/-/g, "_");


  var url= "usercomment.php";
  var username= document.getElementById("name_entered").textContent;
  var articleid= document.getElementById("aid").textContent;
  var usercomment= document.getElementById("comment_entered").value;
  var vars= "name="+username+"&comment="+usercomment+"&articleid="+articleid;
  request.open("POST", url, true);

  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  request.onreadystatechange= function() {
    if (request.readyState == 4 && request.status == 200) {
      var return_data=  request.responseText;
      document.getElementById("showcomments").innerHTML= return_data;
    }
  }

  request.send(vars);

  document.getElementById("comment_entered").value ="";
  document.getElementById("start").style.display='none';

  document.getElementById("return").className = "active";
  document.getElementById("hide").className = "";
  document.getElementById("comments-logout").className = "tab-pane active";
  document.getElementById("add-comment").className = "tab-pane";

}

</script>
<script>

$(document).ready(function() {
  $('#submitComment').prop('disabled', true);
  $('#comment_entered').keyup(function() {
    if($(this).val().length !=0) {
      $('#submitComment').prop('disabled', false);
    }else{
      $('#submitComment').prop('disabled', true);
    }
  });
});
$(document).ready(function() {
  $('#submitComment').click(function(){
    $('#submitComment').prop('disabled', true);
  });
});

</script>


<body>
  <?php
  $email=$_SESSION['email'];
  echo "<label id='useremail' value='$email' style='display:none;'>$email</label>";
  ?>

  <div class="fh5co-loader"></div>

  <div id="page">
    <nav class="fh5co-nav" role="navigation">
      <div class="container-wrap">
        <div class="top-menu">
          <div class="row">
            <div class="col-xs-2">
              <div id="fh5co-logo"><a href="/newproject/index.php">Chazer</a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
              <ul>
                <li class=""><a href="/newproject/index.php">Home</a></li>
                <li><a href="/newproject/share_1.php">Share</a></li>
                <li class="has-dropdown active">
                  <a href="#">Service</a>
                  <ul class="dropdown">
                    <li><a href="/newproject/college/school-1.php">School</a></li>
                    <li><a href="/newproject/workingspace/workingspace-1.php">Working Space</a></li>
                    <li><a href="/newproject/license/license-1.php">License</a></li>
                    <li><a href="/newproject/company/company-1.php">for Work</a></li>
                  </ul>
                </li>

                <?php
                if(isset($_SESSION['logged_in']) != "1"){
                  echo '<li><a href="/newproject/loginsystem/login.php">Login/Signup</a></li>';
                }else{
                  $name = $_SESSION['name'];
                  echo '<li class="has-dropdown">
                  <a href="">Hello！ '.$name.'</a>
                  <ul class="dropdown">
                  <li><a href="/newproject/profile.php">Profile</a></li>
                  <li><a href="/newproject/share_1.php">Share</a></li>
                  <li><a href="/newproject/loginsystem/logout.php">Logout</a></li>
                  </ul>
                  </li>';
                }
                ?>
                <!-- <li><a href="login.php">Login/Sign-up</a></li> -->
              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>
    <div class="container-wrap">
      <div class="row">
        <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
        <div class="col-md-10 col-sm-10">
          <div class="row">
            <div class="col-md-1" style="width:5%; float: left;!improtant"></div>
            <div class="col-md-2 col-sm-1 ">
              <div class="card">
                <div class="p" style="width: 200px; height: 150px; font-size: 30px; color: black; text-align: center; border: 3px solid black; padding-top: 20px;">WORKING SPACE
                  </div>
                
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0; padding-top: 80px; letter-spacing: 2px;">文章編號： <?php echo $uploader['id']; ?></div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;">公司名稱：<?php echo $uploader['company']; ?></div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;　">部門：<?php echo $uploader['department']; ?></div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;　">發文者：<?php echo $pouser['name']; ?></div>
            </div>
            <div class="col-md-3 col-sm-4">
            </div>
            <div class="col-md-2 col-sm-2" style="padding-top: 40px; width: 18%;">
              <table>
                <tr>
                  <td>
                    <?php
                    $date = $uploader['uploadtime'];
                    $newdate = date('Y-m-d', strtotime($date));
                    ?>
                    <p style="white-space:nowrap; padding-top: 10px;">發表時間：<?php echo $newdate; ?></p>
                  </td>
                  <td>
                    <?php
                    require 'workingspaceconfig.php';
                    $id = $_REQUEST['id'];
                    $email = $_SESSION['email'];
                    $sql = mysqli_query($conn,"SELECT * FROM favorite WHERE email = '$email' AND articleid='$id'");

                    if(mysqli_num_rows($sql)>0){
                      echo '<input type="checkbox" id="checkbox" checked />  <label for="checkbox">
                      <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg"><g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)"><path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/><circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/><g id="grp7" opacity="0" transform="translate(7 6)"><circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/><circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/></g><g id="grp6" opacity="0" transform="translate(0 28)"><circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/><circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/></g><g id="grp3" opacity="0" transform="translate(52 28)"><circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/><circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/></g><g id="grp2" opacity="0" transform="translate(44 6)" fill="#CC8EF5"><circle id="oval2" transform="matrix(-1 0 0 1 10 0)" cx="5" cy="6" r="2"/><circle id="oval1" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp5" opacity="0" transform="translate(14 50)" fill="#91D2FA"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp4" opacity="0" transform="translate(35 50)" fill="#F48EA7"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp1" opacity="0" transform="translate(24)" fill="#9FC7FA"><circle id="oval1" cx="2.5" cy="3" r="2"/><circle id="oval2" cx="7.5" cy="2" r="2"/></g></g></svg>
                      </label>';
                    }else{
                      echo '<input type="checkbox" id="checkbox" />  <label for="checkbox">
                      <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg"><g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)"><path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/><circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/><g id="grp7" opacity="0" transform="translate(7 6)"><circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/><circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/></g><g id="grp6" opacity="0" transform="translate(0 28)"><circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/><circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/></g><g id="grp3" opacity="0" transform="translate(52 28)"><circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/><circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/></g><g id="grp2" opacity="0" transform="translate(44 6)" fill="#CC8EF5"><circle id="oval2" transform="matrix(-1 0 0 1 10 0)" cx="5" cy="6" r="2"/><circle id="oval1" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp5" opacity="0" transform="translate(14 50)" fill="#91D2FA"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp4" opacity="0" transform="translate(35 50)" fill="#F48EA7"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp1" opacity="0" transform="translate(24)" fill="#9FC7FA"><circle id="oval1" cx="2.5" cy="3" r="2"/><circle id="oval2" cx="7.5" cy="2" r="2"/></g></g></svg>
                      </label>';
                    }
                    mysqli_close($conn);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="p" style="font-size: 30px; color: #b7b4b4; text-align: center; border: 3px solid #ddd;">
                      <?php echo $uploader['duty']; ?>
                      <!-- 在職 -->
                    </div>
                  </td>
                </tr>
                  <br>
                  <tr>
                      <?php
                      $n = $pouser['email'];
                      $email = $_SESSION['email'];
                      if($n == $email){
                        echo '
                        <br>
                              <a href="workingspace-2-edit.php?id='.$articleid.'" class="button" style="font-size:0.8em; width:5em; padding: 5px; color: #605f5f; letter-spacing:2px; font-weight:400; text-align: center; margin-left:5px;">EDIT</a>
                              <a href="deleteworkingspace.php?id='.$articleid.'" class="button confirmation" style="font-size:0.8em; width:6em; padding: 5px; color: #605f5f; letter-spacing:2px; font-weight:400; text-align: center; margin-left:40px;">DELETE</a>
                             ';
                      }
                 ?>
                  </tr>
              </table>


            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
        <div class="col-md-4" style="background-color: #f6f6f6; padding: 30px 20px; width: 35%;">
          <div class="row">
            <div class="col-md-1" style="float: left; width: 5%;"></div>
            <div class="col-md-10">
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">
                薪資
              </div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0; padding-left: 10px; letter-spacing: 2px;">
                <?php echo $uploader['salary'];  ?>
                <!-- 6萬以上 -->
              </div>
              <br>

              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">
                工作時數
              </div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0; padding-left: 10px; letter-spacing: 2px;">
                <?php echo $uploader['workinghours'];  ?>
                <!-- 8小時 -->
              </div>
              <br>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">
                有加班/無加班
              </div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">
                <?php
                if($uploader['overtime']=='是'){
                  echo '有';
                }elseif ($uploader['overtime']=='否') {
                  echo '否';
                }
                ?>
              </div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0; padding-left: 10px; letter-spacing: 2px;">
                <?php
                if($uploader['overtimefrequency']!=''){
                  echo '一月'.$uploader['overtimefrequency'];
                }
                ?>
              </div>
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0; padding-left: 10px; letter-spacing: 2px;">
                <?php
                if($uploader['overtimehours']!=''){
                  echo '平均'.$uploader['overtimehours'];
                }
                ?>

              </div>
            </div>
          </div>


        </div>
        <div class="col-md-1" style="width:3.34%; float: left;!improtant"></div>
        <div class="col-md-4" style="background-color: #f6f6f6; padding: 30px 20px; width: 45%;">
          <div class="row">
            <div class="col-md-1" style="float: left; width: 5%;"></div>
            <div class="col-md-10">
              <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333; letter-spacing: 2px;">工作環境</div>
              <br>
              <div class="row">
                <div class="col-md-5">
                  <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; letter-spacing: 2px; margin-top: 10px;">工作氣氛</div>
                </div>
                <div class="col-md-7" style="margin-top: 0px;">
                  <div class="star-rating" style="font-size:2em;">

                    <?php
                          if($uploader['atmosphere']!=''){
                             $rate = $uploader['atmosphere'];
                             for($i=1;$i<=$rate;$i++){
                               echo '<span class="fa fa-star checked"></span>';
                             }
                          }
                     ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; letter-spacing: 2px; margin-top: 10px;">環境舒適度</div>
                </div>
                <div class="col-md-7" style="margin-top: 0px;">
                  <div class="star-rating" style="font-size:2em;">
                    <?php
                          if($uploader['comfort']!=''){
                             $rate = $uploader['comfort'];
                             for($i=1;$i<=$rate;$i++){
                               echo '<span class="fa fa-star checked"></span>';
                             }
                          }
                     ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; letter-spacing: 2px; margin-top: 10px;">溝通管道順暢度</div>
                </div>
                <div class="col-md-7" style="margin-top: 0px;">
                  <div class="star-rating" style="font-size:2em;">
                    <?php
                          if($uploader['communication']!=''){
                             $rate = $uploader['communication'];
                             for($i=1;$i<=$rate;$i++){
                               echo '<span class="fa fa-star checked"></span>';
                             }
                          }
                     ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; letter-spacing: 2px; margin-top: 10px;">升遷制度</div>
                </div>
                <div class="col-md-7" style="margin-top: 0px;">
                  <div class="star-rating" style="font-size:2em;">
                    <?php
                          if($uploader['up']!=''){
                             $rate = $uploader['up'];
                             for($i=1;$i<=$rate;$i++){
                               echo '<span class="fa fa-star checked"></span>';
                             }
                          }
                     ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; letter-spacing: 2px; margin-top: 10px;">玻璃天花板</div>
                </div>
                <div class="col-md-7" style="margin-top: 0px;">
                  <div class="star-rating" style="font-size:2em;">
                    <?php
                          if($uploader['barrier']!=''){
                             $rate = $uploader['barrier'];
                             for($i=1;$i<=$rate;$i++){
                               echo '<span class="fa fa-star checked"></span>';
                             }
                          }
                     ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; letter-spacing: 2px; margin-top: 10px;">出差頻率</div>
                </div>
                <div class="col-md-7" style="margin-top: 0px;">
                  <div class="star-rating" style="font-size:2em;">
                    <?php
                          if($uploader['bt']!=''){
                             $rate = $uploader['bt'];
                             for($i=1;$i<=$rate;$i++){
                               echo '<span class="fa fa-star checked"></span>';
                             }
                          }
                     ?>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
      <br>

      <div class="row" style="padding-bottom: 10px; padding-top: 10px;">
                <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                <div class="col-md-10" style="background-color: #f6f6f6; padding: 30px 20px;">
                    <div class="row">
                        <div class="col-md-2" style="margin:0px auto; color: black; width: 20%;">
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333; padding-left: 30px;letter-spacing: 2px;">工作上的困難</div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                       <div class="col-md-10">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 30px;letter-spacing: 2px;">
                          <?php
                                if($uploader['obstacle']!=''){
                                  echo $uploader['obstacle'];
                                }
                          ?>
                            <!-- A：....... -->
                          </div>
                    </div>
                    </div>
                    <hr style="border:0.5px dashed black" width="97%">
                    <div class="row" style="padding-bottom: 30px;">
                        <div class="col-md-2" style="margin:0px auto; color: black;!important">
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333; padding-left: 30px;letter-spacing: 2px;">工作福利</div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                       <div class="col-md-10">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 30px;letter-spacing: 2px;">
                          <!-- A：....... -->
                          <?php
                                if($uploader['welfare']!=''){
                                  echo $uploader['welfare'];
                                }
                          ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <br>

        <div class="row">
          <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
          <div class="col-md-10" style="padding: 30px 20px; border: 4px dashed #7c7b7b; margin-bottom: 20px;">
            <div class="freetosay">
              <h3>想說的話！</h3>
              <div class="fts">
                <p>
                  <?php
                        if($uploader['personalopinion']!=''){
                          echo $uploader['personalopinion'];
                        }
                  ?>
                </p>
              </div>
            </div>



          </div>
        </div>
      </div>
      <!-- END container-wrap -->

      <div class="container-wrap">
        <footer id="fh5co-footer" role="contentinfo">
          <div class="container">
            <div class="row">
              <div class="col-sm-10" id="logout">
                <div class="page-header">
                  <h3 class="reviews">Leave your comment</h3>
                </div>
                <div class="comment-tabs">
                  <ul class="nav nav-tabs" role="tablist">
                    <li id="return" class="active">
                      <a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                      <li id="hide"><a href="#add-comment" role="tab" data-toggle="tab"><h4 id="leavecomment" class="reviews text-capitalize">Add comment</h4></a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="comments-logout">
                        <ul class="media-list">

                          <!-- <li class="media"> -->
                          <!-- <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="images/IMG_5499.jpg" alt="profile">
                        </a> -->
                        <!-- <div class="media-body">
                        <div class="well well-lg">
                        <h4 class="media-heading text-uppercase reviews">冠羽 </h4>
                        <ul class="media-date text-uppercase reviews list-inline">
                        <li class="dd">22</li>
                        <li class="mm">09</li>
                        <li class="aaaa">2017</li>
                      </ul>
                      <p class="media-comment">
                      我真的好強。
                    </p>

                  </div>
                </div>
              </li> -->
              <!-- <li class="media">
              <a class="pull-left" href="#">
              <img class="media-object img-circle" src="images/IMG_5499.jpg" alt="profile">
            </a>
            <div class="media-body">
            <div class="well well-lg">
            <h4 class="media-heading text-uppercase reviews">Kay</h4>
            <ul class="media-date text-uppercase reviews list-inline">
            <li class="dd">22</li>
            <li class="mm">09</li>
            <li class="aaaa">2017</li>
          </ul>
          <p class="media-comment">
          Yehhhh... I am the besttt!
        </p>
      </div>
    </div>
  </li> -->
  <div id="showcomments" name='showcomments'></div>
  <div id="start">
    <?php
    require 'workingspaceconfig.php';
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM usercomment WHERE articleid=$id ORDER BY ID DESC";

    if(mysqli_query($conn,$query)){
      $result= mysqli_query($conn,$query);

      if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)){
          $name_field= $row['name'];
          $date_field= $row['date'];
          $comment_field= $row['comment'];
          // echo "$name_field wrote: ($date_field) <br>";
          // echo "$comment_field";
          // echo "<br><hr><br>";

          echo '<li class="media">
          <div class="media-body">
          <div class="well well-lg">
          <h4 class="media-heading text-uppercase reviews">'.$name_field.'</h4>
          <ul class="media-date text-uppercase reviews list-inline">
          <li class="dd">'.$date_field.'</li>
          </ul>
          <p class="media-comment">'.$comment_field.'</p>
          </div>
          </div>
          </li>';
        }
      }else{
        echo '<li class="media">
        <div class="media-body">
        <div class="well well-lg">
        <p class="media-comment">目前尚無留言</p>
        </div>
        </div>
        </li>';
      }
    }else{
      echo 'Comment box failed.';
    }
    ?>

  </div>

</ul>
</div>
<div class="tab-pane" id="add-comment">
  <form class="form-horizontal" id="commentForm" role="form">
    <div class="form-group">
      <?php
      $id = $_REQUEST['id'];
      if (isset($_SESSION['logged_in']) != "1" ) {
        // echo "<script type='text/javascript'>alert('請登入後即可留言');
        // window.location='school-2.php';
        // </script>";
        echo "<label for='email' class='col-sm-2 control-label'>請登入後即可留言</label>";
      }else{
        echo "<label id='aid' value='$id' style='display:none;'>$id</label>";
        $name = $_SESSION['name'];
        echo "<label class='col-sm-2 control-label' id='name_entered' value='$name'>$name:</label>";
        echo ' <div class="col-sm-10">
        <textarea class="form-control" name="comment_entered" id="comment_entered" rows="5"></textarea>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <input type="button" value="Comment" class="btn btn-success btn-circle text-uppercase" id="submitComment" onclick="submitcomment();"/><span class="glyphicon glyphicon-send"></span>
        </div>
        </div>';
      }
      ?>
      <!-- <label for="email" class="col-sm-2 control-label">Comment</label> -->

    </form>
  </div>
</div>
</div>
</div>
</div>

</div>
</footer>
</div>
<!-- END container-wrap -->
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

</body>

</html>
