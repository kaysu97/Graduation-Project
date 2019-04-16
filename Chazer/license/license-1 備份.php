<?php
session_start();
require 'license_config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chazer &mdash;</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link rel="stylesheet" href="/newproject/css/animate.css">
  <link rel="stylesheet" href="/newproject/css/icomoon.css">
  <link rel="stylesheet" href="/newproject/css/bootstrap.css">
  <link rel="stylesheet" href="/newproject/css/magnific-popup.css">
  <link rel="stylesheet" href="/newproject/css/flexslider.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/school-2.css">
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src='jquery-paginate.min.js'></script> -->
  <!-- <script>
  // $(document).ready(function(){
  //   $('#myTable').paginate({ limit: 8 });
  // });
  $(document).ready(function() {
  $('#LicenseTypeSelected').on('change', function() {
  var cLicenseType = $(this).val();
  if (cLicenseType) {
  $.ajax({
  type: 'POST',
  url: 'Ajax.php',
  data: 'LicenseType=' + cLicenseType,
  success: function(html) {
  $('#LicenseNameSelected').html(html);
}
});
} else {
$('#LicenseNameSelected').html('<option value="">Select license type first</option>');
}
});
});
</script> -->
<script type="text/javascript">
$(document).ready(function(){
  $('.search-box input[type="text"]').on("keyup input", function(){
    /* Get input value on change */
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if(inputVal.length){
      $.get("realtsearch.php", {term: inputVal}).done(function(data){
        // Display the returned data in browser
        resultDropdown.html(data);
      });
    } else{
      resultDropdown.empty();
    }
  });

  // Set search input value on click of result item
  $(document).on("click", ".result p", function(){
    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
    $(this).parent(".result").empty();
  });
});
</script>


</head>

<body>

  <div class="fh5co-loader"></div>

  <div id="page">
    <nav class="fh5co-nav" role="navigation">
      <div class="container-wrap">
        <div class="top-menu">
          <div class="row">
            <div class="col-xs-2">
              <div id="fh5co-logo"><a href="/newproject/index.php">證照經驗分享</a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
              <ul>
                <li><a href="/newproject/index.php">Home</a></li>
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
                  // echo '<li><a href="">Hello！ '.$first_name.$last_name.'</a></li>';
                  echo '	<li class="has-dropdown">
                  <a href="">Hello！ '.$name.'</a>
                  <ul class="dropdown">
                  <li><a href="/newproject/profile.php">個人頁面</a></li>
                  <li><a href="">我要分享</a></li>
                  <li><a href="">追蹤清單</a></li>
                  <li><a href="/newproject/loginsystem/logout.php">登出</a></li>
                  </ul>
                  </li>';
                }
                ?>
              </ul>
            </div>
</div>
</div>
</div>
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Lato:300|Oswald);
@import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);
.slides {
  position: relative;
  display: block;
}
.slides .slide {
  background: #a8bcd3;
  position: absolute;
  top: 0;
  width: calc(33% - 1em);
  max-height: 3.5em;
  margin: 0.5em;
  padding: 1em;
  color: white;
  float: left;
  overflow: hidden;
  transition: max-height 0.25s       ease-in-out, width      0.25s 0.25s ease-in-out, left       0.25s 0.5s  ease-in-out, top        0.25s 0.75s ease-in-out;
}
.slides .slide:nth-child(1) {
  left: 0%;
}
.slides .slide:nth-child(2) {
  left: 33.3333%;
}
.slides .slide:nth-child(3) {
  left: 66.6666%;
}
.slides .slide > a {
  display: block;
  padding-bottom: 1em;
  text-transform: uppercase;
  text-decoration: none;
  color: white;
  transition: color 2s;
}
.slides .slide.active {
  background: url(images/tumblr_o25xnwXIk11v4d5m9o3_1280.jpg);
  position: relative;
  top: 4.5em;
  left: 0;
  width: 100%;
  max-height: 20em;
  float: none;
  transition: top        0.25s 1s    ease-in-out, left       0.25s 1.25s ease-in-out, width      0.25s 1.5s  ease-in-out, max-height 0.25s 1.75s ease-in-out;
}
.slides .slide.active a {
  color: #333;
}

.slides2 {
  position: relative;
  display: block;
}
.slides2 .slide {
  background: #a8bcd3;
  position: absolute;
  top: 0;
  width: calc(33% - 1em);
  max-height: 3.5em;
  margin: 0.5em;
  padding: 1em;
  color: white;
  float: left;
  overflow: hidden;
  transition: max-height 0.25s       ease-in-out, width      0.25s 0.25s ease-in-out, left       0.25s 0.5s  ease-in-out, top        0.25s 0.75s ease-in-out;
}
.slides2 .slide:nth-child(1) {
  left: 0%;
}
.slides2 .slide:nth-child(2) {
  left: 33.3333%;
}
.slides2 .slide:nth-child(3) {
  left: 66.6666%;
}
.slides2 .slide > a {
  display: block;
  padding-bottom: 1em;
  font-family: 'Oswald';
  text-transform: uppercase;
  text-decoration: none;
  color: white;
  transition: color 2s;
}
.slides2 .slide.active {
  background: url(images/tumblr_o25xnwXIk11v4d5m9o3_1280.jpg);
  position: relative;
  top: 4.5em;
  left: 0;
  width: 100%;
  max-height: 20em;
  float: none;
  transition: top        0.25s 1s    ease-in-out, left       0.25s 1.25s ease-in-out, width      0.25s 1.5s  ease-in-out, max-height 0.25s 1.75s ease-in-out;
}
.slides2 .slide.active a {
  color: #333;
}

ol {
  overflow: hidden;
  width: 100%;
  color: #333;
}

ol li {
  width: 33.3%;
  float: left;
  line-height: 40px;
}

/** PAGE STYLES **/
*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.container1 {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  font-family: 'Lato', sans-serif;
  font-size: 1.5em;
  line-height: 1.5;
  margin-bottom: 200px;
}

.cf:before, .slides:before, .slides2:before,
.cf:after,
.slides:after,
.slides2:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.cf:after, .slides:after, .slides2:after {
  clear: both;
}

/**
* For IE 6/7 only
* Include this rule to trigger hasLayout and contain floats.
*/
.cf, .slides, .slides2 {
  *zoom: 1;
}


</style>



<div class="container-wrap">
  <div class="col-lg-1"></div>
  <div class="col-lg-10 container">
  <div class="row" style="padding-top: 40px; padding-bottom: 0; text-align: center;">
                   <div class="col-2" style="width: 10%; float: left;">
                            <div class="card" style="margin-left:0;">
                                <div class="p" style="width: 130px; height: 90px; font-size: 30px; color: black; text-align: center; border: 3px solid black; padding-top: 15px;">
                                    醫療
                                </div>
                            </div>
                        </div>
                    <form action="" method="POST" id="">
                    <div class="col-6" style="width: 50%; float: left; padding-left: 90px; padding-top: 80px;">
                    <div class="search-box">
                    證照名稱 :
  <input type="text" autocomplete="off" name="licensename" placeholder=" Search license..." required style="border: none; border-bottom: 2px solid #ebedef; width: 300px;">
                       <div class="result"></div>
                        </div></div>
                        <div class="col-4" style="width: 10%; float: left; padding-top: 80px;">
                        <button class="button button--secondary" onClick="jump(this.form)">
  <span class="button__inner" style="margin-left: 0px;">Submit</span>
                            </button></div>
                    </form>
                </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Type</th>
              <th>Name</th>
              <th>Time(yr)</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            require "license_config.php";
            $all = "all";
            if(!empty($_REQUEST['licensename'])){

              $licensename = $_REQUEST['licensename'];

              // $query = mysqli_query($conn,"SELECT * FROM licensearticle WHERE licensename='$licensename' ORDER BY uploadtime DESC");


              $sql = "SELECT * FROM licensearticle WHERE licensename='$licensename' ORDER BY uploadtime DESC";
              $query = mysqli_query($conn,$sql);

              $data_nums = mysqli_num_rows($query);
              $per = 15;
              $pages = ceil($data_nums/$per);
              if (!isset($_GET["page"])){
                $page=1;
              } else {
                $page = intval($_GET["page"]);
              }
              $start = ($page-1)*$per;
              $sql2 = "SELECT * FROM licensearticle WHERE licensename='$licensename' ORDER BY uploadtime DESC LIMIT ".$per." OFFSET ".$start;
              $query = mysqli_query($conn,$sql2);


              while($row = mysqli_fetch_array($query)){
                echo '<tr>
                <td><a href="license-2.php?id='.$row['id'].'">'.$row['id']."</td>
                <td>".$row['licensetype']."</td>
                <td>".$row['licensename']."</td>
                <td>".$row['licensedate']."</td></tr>";
              }
              echo "</table>";
            }else{
              // $query = mysqli_query($conn,"SELECT * FROM licensearticle ORDER BY uploadtime DESC");

              $sql = "SELECT * FROM licensearticle ORDER BY uploadtime DESC";
              $query = mysqli_query($conn,$sql);

              $data_nums = mysqli_num_rows($query);
              $per = 15;
              $pages = ceil($data_nums/$per);
              if (!isset($_GET["page"])){
                $page=1;
              } else {
                $page = intval($_GET["page"]);
              }
              $start = ($page-1)*$per;
              $sql2 = "SELECT * FROM licensearticle ORDER BY uploadtime DESC LIMIT ".$per." OFFSET ".$start;
              $query = mysqli_query($conn,$sql2);




              while($row = mysqli_fetch_array($query)){
                echo '<tr>
                <td><a href="license-2.php?id='.$row['id'].'">'.$row['id']."</td>
                <td>".$row['licensetype']."</td>
                <td>".$row['licensename']."</td>
                <td>".$row['licensedate']."</td></tr>";
              }
              echo "</table>";

            }
            ?>

          </tbody>
        </table>
        <ul class="pagination pagination-lg pager" id="myPager" style="letter-spacing: 5px;">
        <?php
        echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
        echo "<br /><a href=?page=1>首頁</a> ";
        echo "第 ";
        for( $i=1 ; $i<=$pages ; $i++ ) {
          if ( $page-3 < $i && $i < $page+3 ) {
            echo "<a href=?page=".$i.">".$i."</a> ";
          }
        }
        echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";

        ?>
        </ul>



      </div>
      <div class="col-md-12 text-center">
        <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div>
    </div>
  </div>

  <div id="fh5co-work" class="fh5co-light-grey">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2 style="font-size: 30px; color: #333;">The top of the share</h2>
                    </div>
                </div>
                <div class="row">
                  <?php
                  $result = "SELECT * FROM licensearticle ORDER BY lovetimes DESC LIMIT 2 ";
                  $college = mysqli_query($conn,$result);
                  while($row = mysqli_fetch_array($college)){
                    echo '
                    <div class="col-md-3 text-center">
                        <a href="license-2.php?id='.$row['id'].'" class="work" style="background-image: url(images/35cpqht.jpg);">
                            <div class="desc" style="height: 250px; width: 250px;">
                                <h3>已被收藏'.$row['lovetimes'].'次！</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <h3 style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333;letter-spacing: 4px;">'.$row['licensetype'].'</h3>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['licensename'].'</div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['licensedate'].'</div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['examtype01'].'</div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; text-align: right; letter-spacing: 2px;line-height: 30px;"><a href="license-2.php?id='.$row['id'].'">繼續閱讀...</a></div>
                    </div>
                    ';
                  }
                  ?>

                </div>
            </div>
</div>
<!-- END container-wrap -->

<div class="container-wrap">
            <footer id="fh5co-footer" role="contentinfo">
                <div class="row">
                    <div class="col-md-3 fh5co-widget col-md-push-1">
                        <h4>About Chazer</h4>
                        <p>We are young.</p>
                    </div>
                    <div class="col-md-3 col-md-push-2">
                        <h4>Latest Posts</h4>
                        <ul class="fh5co-footer-links">
                          <?php
                                $sql = "SELECT * FROM licensearticle ORDER BY uploadtime DESC LIMIT 3";
                                $latest = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_array($latest)){
                                  echo '
                                  <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                                  ';
                                }
                           ?>

                        </ul>
                    </div>

                    <div class="col-md-3">

                    </div>

                    <div class="col-md-3">
                        <h4>Contact Information</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:104306090@nccu.edu.tw">104306090@nccu.edu.tw</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; All Rights Reserved.</small>
                        </p>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
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

</body>

</html>
