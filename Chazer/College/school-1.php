<?php
session_start();
require 'collegeconfig.php';

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
  <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/reset.css">
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
  // $(document).ready(function(){
  //   $('#myTable').paginate({ limit: 8 });
  // });
  $(document).ready(function(){
    $('#CollegeNameSelected').on('change',function(){
      var cCollegeName = $(this).val();
      if(cCollegeName){
        $.ajax({
          type:'POST',
          url:'Ajax.php',
          data: 'CollegeName='+cCollegeName,
          success:function(html){
            $('#CollegeDepartmentSelected').html(html);
          }
        });
      }else{
        $('#CollegeDepartmentSelected').html('<option value="">Select college name first</option>');
      }
    });
  });

  </script>
  <script>
  /* ===== Logic for creating fake Select Boxes ===== */
  $('.sel').each(function() {
    $(this).children('select').css('display', 'none');

    var $current = $(this);



    return;
  }

  $current.children('div').append($('<span>', {
    class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
    text: $(this).text()
  }));
});
});

// Toggling the `.active` state on the `.sel`.
$('.sel').click(function() {
  $(this).toggleClass('active');
});

// Toggling the `.selected` state on the options.
$('.sel__box__options').click(function() {
  var txt = $(this).text();
  var index = $(this).index();

  $(this).siblings('.sel__box__options').removeClass('selected');
  $(this).addClass('selected');

  var $currentSel = $(this).closest('.sel');
  $currentSel.children('.sel__placeholder').text(txt);
  $currentSel.children('select').prop('selectedIndex', index + 1);
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
              <div id="fh5co-logo"><a href="/newproject/index.php">大學面試分享</a></div>
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
                  <li><a href="/newproject/profile.php">Profile</a></li>
                  <li><a href="/newproject/share_1.php">Share</a></li>
                  <li><a href="/newproject/loginsystem/logout.php">Logout</a></li>
                  </ul>
                  </li>';
                }
                ?>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </nav>
    <div class="container-wrap">
      <div class="col-lg-1"></div>
      <div class="col-lg-10 container">
        <div class="row" style="padding-top: 40px; padding-bottom: 0; text-align: center;">
                <form action="" method="POST" id="">
                    <section style="text-align: center; display: inline;">
              <select class="cs-select cs-skin-border" name="CollegeNameSelected" id="CollegeNameSelected" style="border:3px solid #8b8b8b; font-size: 1.2em; font-weight:200; max-width: 250px; height:30px; background-color:white; margin-right:10px;">
                <option value="" disabled style="border:3px solid #8b8b8b; font-size: 1em; max-width: 250px; height:30px;">請選擇大學</option>
                <?php
                $query = mysqli_query($conn,"SELECT * FROM CollegeList");
                echo '<option value="all">all</option>';
                while($dbrow = mysqli_fetch_array($query)){
                  echo '<option value="'.$dbrow['CollegeName'].'">'.$dbrow['CollegeName'].'</option>';
                }
                ?>
              </select>                
            <select class="cs-select cs-skin-border" name="CollegeDepartmentSelected" id="CollegeDepartmentSelected" style="border:3px solid #8b8b8b; font-size: 1.2em; font-weight:200; max-width: 250px; height:30px; background-color:white;">
                <option value="" >請選擇科系</option>
              </select>
                        </section>
                    <script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>
                        <script src="js/classie.js"></script>
                        <script src="js/selectFx.js"></script>
            <button class="button button--secondary" type="submit">
              <span class="button__inner">Submit</span>
            </button>
          </form>
        </div>
        <div class="row">
          <div class="table-responsive" style="overflow-x: visible;">
            <table class="table table-hover" style="overflow-x: visible;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Time(yr)</th>
                  <th>Grade</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php
                require "collegeconfig.php";
                $all = "all";
                if(!empty($_REQUEST['CollegeNameSelected']) && !empty($_REQUEST['CollegeDepartmentSelected'])){

                  $CollegeNameSelected = $_REQUEST['CollegeNameSelected'];
                  $CollegeDepartmentSelected = $_REQUEST['CollegeDepartmentSelected'];

                  if($CollegeNameSelected != $all && $CollegeDepartmentSelected==$all){

                    // $query = mysqli_query($conn,"SELECT * FROM CollegeArticle WHERE CollegeName='$CollegeNameSelected' ORDER BY uploadtime DESC");

                    $sql = "SELECT * FROM CollegeArticle WHERE CollegeName='$CollegeNameSelected' ORDER BY uploadtime DESC";
                    $query = mysqli_query($conn,$sql);


                    $data_nums = mysqli_num_rows($query);
                    $per = 100;
                    $pages = ceil($data_nums/$per);
                    if (!isset($_GET["page"])){
                      $page=1;
                    } else {
                      $page = intval($_GET["page"]);
                    }
                    $start = ($page-1)*$per;
                    $sql2 = "SELECT * FROM CollegeArticle WHERE CollegeName='$CollegeNameSelected' ORDER BY uploadtime DESC LIMIT ".$per." OFFSET ".$start;
                    $query = mysqli_query($conn,$sql2);

                    while($row = mysqli_fetch_array($query)){
                      echo '<tr>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['id'].'</td>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['CollegeName'].'</td>
                      <td>'.$row['CollegeDepartment'].'</td>
                      <td>'.$row['InterviewDate'].'</td>
                      <td>'.$row['Score'].'</td></tr>';
                    }
                    echo "</table>";



                  }elseif($CollegeNameSelected !== $all && $CollegeDepartmentSelected!==$all){

                    // $query = mysqli_query($conn,"SELECT * FROM CollegeArticle WHERE CollegeName='$CollegeNameSelected' AND CollegeDepartment ='$CollegeDepartmentSelected' ORDER BY uploadtime DESC");

                    $sql = "SELECT * FROM CollegeArticle WHERE CollegeName='$CollegeNameSelected' AND CollegeDepartment ='$CollegeDepartmentSelected' ORDER BY uploadtime DESC";
                    $query = mysqli_query($conn,$sql);

                    $data_nums = mysqli_num_rows($query);
                    $per = 100;
                    $pages = ceil($data_nums/$per);
                    if (!isset($_GET["page"])){
                      $page=1;
                    } else {
                      $page = intval($_GET["page"]);
                    }
                    $start = ($page-1)*$per;
                    $sql2 = "SELECT * FROM CollegeArticle WHERE CollegeName='$CollegeNameSelected' AND CollegeDepartment ='$CollegeDepartmentSelected' ORDER BY uploadtime DESC LIMIT ".$per." OFFSET ".$start;
                    $query = mysqli_query($conn,$sql2);



                    while($row = mysqli_fetch_array($query)){
                      echo '<tr>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['id'].'</td>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['CollegeName'].'</td>
                      <td>'.$row['CollegeDepartment'].'</td>
                      <td>'.$row['InterviewDate'].'</td>
                      <td>'.$row['Score'].'</td></tr>';
                    }
                    echo "</table>";
                  }else{
                    $sql = "SELECT * FROM CollegeArticle ORDER BY uploadtime DESC";
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
                    $sql2 = "SELECT * FROM CollegeArticle ORDER BY uploadtime DESC LIMIT ".$per." OFFSET ".$start;
                    $query = mysqli_query($conn,$sql2);

                    while($row = mysqli_fetch_array($query)){
                      echo '<tr>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['id'].'</td>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['CollegeName'].'</td>
                      <td>'.$row['CollegeDepartment'].'</td>
                      <td>'.$row['InterviewDate'].'</td>
                      <td>'.$row['Score'].'</td></tr>';
                    }
                    echo "</table>";
                  }
                }

                else{
                  $sql = "SELECT * FROM CollegeArticle ORDER BY uploadtime DESC";
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
                  $sql2 = "SELECT * FROM CollegeArticle ORDER BY uploadtime DESC LIMIT ".$per." OFFSET ".$start;
                  $query = mysqli_query($conn,$sql2);

                  while($row = mysqli_fetch_array($query)){
                   echo '<tr>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['id'].'</td>
                      <td><a href="school-2.php?id='.$row['id'].'">'.$row['CollegeName'].'</td>
                      <td>'.$row['CollegeDepartment'].'</td>
                      <td>'.$row['InterviewDate'].'</td>
                      <td>'.$row['Score'].'</td></tr>';
                  }
                  // echo "</table>";
                }
                ?>
              </tbody>
            </table>

            <div class="row" style="text-align:center;">
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
          $result = "SELECT * FROM collegearticle ORDER BY lovetimes DESC LIMIT 2 ";
          $college = mysqli_query($conn,$result);
          while($row = mysqli_fetch_array($college)){
            echo '
            <div class="col-md-3 text-center">
            <a href="school-2.php?id='.$row['id'].'" class="work" style="background-image: url(images/35cpqht.jpg);">
            <div class="desc" style="height: 250px; width: 250px;">
            <h3>已被收藏'.$row['lovetimes'].'次！</h3>
            </div>
            </a>
            </div>
            <div class="col-md-3">
            <h3 style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333;letter-spacing: 4px;">'.$row['CollegeName'].'</h3>
            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 40px;">'.$row['CollegeDepartment'].'</div>
            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['InterviewDate'].'</div>
            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['Admitted'].'</div>
            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['InterviewType01'].'</div>
            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">'.$row['InterviewType02'].'</div>
            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; text-align: right; letter-spacing: 2px;line-height: 30px;"><a href="school-2.php?id='.$row['id'].'"><br>繼續閱讀...</a></div>
            </div>
            ';
          }
          ?>
          <!-- <div class="col-md-3 text-center">
          <a href="school-2.html" class="work" style="background-image: url(images/35cpqht.jpg);">
          <div class="desc" style="height: 250px; width: 250px;">
          <h3>已被收藏100次！</h3>
        </div>
      </a>
    </div>
    <div class="col-md-3">
    <h3 style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333;letter-spacing: 4px;">國立政治大學</h3>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">資訊管理學系</div>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">2017年</div>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">正取</div><br>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333;letter-spacing: 2px;line-height: 30px;">分成2階段面試</div>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">筆試</div>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">參訪</div>
    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; text-align: right; letter-spacing: 2px;line-height: 30px;"><a href="school-2.html">繼續閱讀...</a></div>
  </div> -->
  <!-- <div class="col-md-3 text-center">
  <a href="school-2.html" class="work" style="background-image: url(images/2eqfk95.jpg);">
  <div class="desc" style="height: 250px; width: 250px;">
  <h3>已被收藏100次！</h3>
</div>
</a>
</div>
<div class="col-md-3">
<h3 style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333;letter-spacing: 4px;">國立台灣大學</h3>
<div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">資訊管理學系</div>
<div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">2017年</div>
<div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">正取</div><br>
<div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333;letter-spacing: 2px;line-height: 30px;">分成1階段面試</div>
<div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 30px;">筆試</div><br>
<div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; text-align: right; letter-spacing: 2px;line-height: 30px;"><a href="school-2.html">繼續閱讀...</a></div>
</div> -->

</div>
</div>
</div>
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
          $sql = "SELECT * FROM collegearticle ORDER BY uploadtime DESC LIMIT 3";
          $latest = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($latest)){
            echo '
            <li><a href="school-2.php?id='.$row['id'].'">'.$row['CollegeName'].$row['CollegeDepartment'].'</a></li>
            ';
          }
          ?>
          <!-- <li><a href="school-2.html">[學校]國立政治大學資訊管理學系</a></li> -->

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
  </div> <!-- END container-wrap -->
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
