<?php
session_start();
require 'config.php';
$articleid = $_REQUEST['id'];
$result = $conn->query("SELECT * FROM collegearticle WHERE id='$articleid'");
$uploader = $result->fetch_assoc();

$collegename = $uploader['CollegeName'];
$result2 = $conn->query("SELECT * FROM CollegeList WHERE collegename='$collegename'");
$college = $result2->fetch_assoc();

$departmentname = $uploader['CollegeDepartment'];
$result3 = $conn->query("SELECT * FROM CollegeDepartment WHERE CollegeDepartment='$departmentname' AND CollegeName ='$collegename'");
$department = $result3->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Neat &mdash;</title>
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

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/school-2.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
      <nav class="fh5co-nav" role="navigation">
    		<div class="container-wrap">
    			<div class="top-menu">
    				<div class="row">
    					<div class="col-xs-2">
    						<div id="fh5co-logo"><a href="index.php">Neat</a></div>
    					</div>
    					<div class="col-xs-10 text-right menu-1">
    						<ul>
    							<li class=""><a href="index.php">Home</a></li>
    							<li><a href="share_1.php">Share</a></li>
    							<li class="has-dropdown active">
    								<a href="#">Service</a>
    								<ul class="dropdown">
    									<li><a href="school-1.php">School</a></li>
    									<li><a href="/newproject/workingspace/workingspace-1.php">Working Space</a></li>
    									<li><a href="/newproject/workingspace/workingspace-1.php">Working Space</a></li>
    									<li><a href="#">for Work</a></li>
    								</ul>
    							</li>

    							<?php
    							if(isset($_SESSION['logged_in']) != "1"){
    								echo '<li><a href="loginsystem/login.php">Login/Signup</a></li>';
    							}else{
    								$name = $_SESSION['name'];
    								echo '<li class="has-dropdown">
    								<a href="">Hello！ '.$name.'</a>
    								<ul class="dropdown">
    								<li><a href="profile.php">個人頁面</a></li>
    								<li><a href="">我要分享</a></li>
    								<li><a href="">追蹤清單</a></li>
    								<li><a href="loginsystem/logout.php">登出</a></li>
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
            <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
  <img src="images/%E5%85%94%E5%AD%9021_evo3183-420x420.jpg" alt="cute" style="width:100%">
  <h1>ウサギ</h1>
  <?php echo '<p class="title">'.$uploader["CollegeDepartment"].'</p>'; ?>
  <!-- <p class="title">資訊管理學系</p> -->
  <?php echo '<p class="title">'.$uploader["CollegeName"].'</p>'; ?>
  <!-- <p>NCCU 國立政治大學</p> -->
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
</div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                  <?php echo '<td>文章編號：'.$uploader["id"].'</td>'; ?>
                                  <?php echo '<td>年份：'.$uploader["InterviewDate"].'</td>'; ?>
                                  <?php echo '<td>級數：'.$uploader["Score"].'</td>'; ?>
                                    <!-- <td>文章編號：5</td>
                                    <td>年份：2014年</td>
                                    <td>級數：69級</td> -->
                                </tr>
                                <tr>
                                  <?php echo '<td style="font-size: 20px;">有無錄取：'.$uploader["Admitted"].'</td>'; ?>
                                  <?php echo '<td colspan="2" style="font-size: 20px;">備審資料：'.$uploader["Application"].'</td>'; ?>
                                </tr>
                                <tr>
                                    <td class="school" colspan="3">
                                      <?php echo '<a href="'.$college["CollegeLink"].'" target="_blank">'.$uploader["CollegeName"].'</a>';?>
                                        <!-- <a href="http://www.nccu.edu.tw" target="_blank">國立政治大學（National Chengchi University,NCCU）</a> -->
                                        <!-- 簡稱政大，1927年建校於江蘇南京，1954年由行政院核定，復校於臺灣臺北市，為中華民國首間在臺復校的國立大學。創校任務為負責培養國家政治、管理及法學人才的中央院校之一，其後發展為臺灣地區人文學科及社會科學領域為主的國立大學，也成為亞洲及太平洋地區重要智庫之一。 -->
                                    </td>
                                </tr>
                                <tr>
                                    <td class="school" colspan="3">
                                      <?php echo '<a href="'.$department["DepartmentLink"].'" target="_blank">'.$uploader["CollegeDepartment"].'</a>';?>
                                        <!-- <a href="http://www.mis2.nccu.edu.tw" target="_blank">資訊管理學系（Department of Management Information Systems,MIS）</a> -->
                                        <!-- 排名第一。 資管系課程可分為商學及管理知識、資訊管理、決策科學與方法、資訊科技及其管理、系統整合應用等五大類。 -->
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border:2px dashed black" size="0.8" width="100%">

        <div class="promos">
<div class="promo">
  <div class="deal">
    <span style="font-size: 20px;">第一階段</span>
  </div>
  <?php echo '<span class="price">'.$uploader['InterviewType01'].'</span>' ?>
  <!-- <span class="price">面試</span> -->
  <?php
      if($uploader['InterviewType01']=='面試'){
        echo '<ul class="features">
              <li>'.$uploader['InterviewerNumber01'].'</li>
              <li>'.$uploader['IntervieweeNumber01'].'</li>
              <li>'.$uploader['InterviewDuration01'].'</li>
              </ul>';
      }elseif($uploader['InterviewType01']=='筆試'){
        echo '<ul class="features">
              <li>Q:'.$uploader['Question011'].'</li>
              <li>A:'.$uploader['PersonalAnswer011'].'</li>
              </ul>';
      }else {
        echo '<ul class="features">
              <li>特殊需求:</li>
              <li>'.$uploader['SpecialRequirement01'].'</li>
              </ul>';
      }
   ?>
  <!-- <ul class="features">
    <li>面試官人數：3人</li>
    <li>面試人數：5人</li>
    <li>面試持續時間：15分</li>
  </ul>
  <button>Q：為何想來我們系？</button>
  <button>A：'Cause I'm lovin' it.</button> -->

</div>
<div class="promo">
  <div class="deal">
    <span style="font-size: 20px;">第二階段</span>
    </div>
    <?php echo '<span class="price">'.$uploader['InterviewType01'].'</span>';


        if($uploader['InterviewType01']=='面試'){
          echo '<ul class="features">
                <li>'.$uploader['InterviewerNumber02'].'</li>
                <li>'.$uploader['IntervieweeNumber02'].'</li>
                <li>'.$uploader['InterviewDuration02'].'</li>
                </ul>';
        }elseif($uploader['InterviewType01']=='筆試'){
          echo '<ul class="features">
                <li>Q:'.$uploader['Question021'].'</li>
                <li>A:'.$uploader['PersonalAnswer021'].'</li>
                </ul>';
        }else {
          echo '<ul class="features">
                <li>特殊需求</li>
                <li>'.$uploader['SpecialRequirement02'].'</li>
                </ul>';
        }
     ?>

  <!-- <span class="price">筆試</span>
  <ul class="features">
    <li>題型：選擇、申論</li>
    <li>筆試時間：40分</li>
    <li></li>
  </ul>
  <button>Q：為何想來我們系？</button>
  <button>A：'Cause I'm lovin' it.</button> -->
</div>
<!-- <div class="promo">
  <div class="deal">
    <span style="font-size: 20px;">第三階段</span>
  </div>
  <span class="price">參訪</span>
  <ul class="features">
    <li>必穿正裝</li>
    <li>不能遲到</li>

  </ul>
</div> -->
</div>
           <hr style="border:2px dashed black" size="0.8" width="100%">

           <div class="freetosay">
               <h3>想說的話！</h3>
               <div class="fts">
                 <?php
                    echo '<p>'.$uploader['PersonalOpinion'].'</p>'
                  ?>
                  <!-- <p>我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我很棒。</p> -->
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
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">
                    <ul class="media-list">
                      <li class="media">
                        <!-- <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="images/IMG_5499.jpg" alt="profile">
                        </a> -->
                        <div class="media-body">
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
                      </li>
                      <li class="media">
                        <!-- <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="images/IMG_5499.jpg" alt="profile">
                        </a> -->
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
                      </li>
                    </ul>
                </div>
                <div class="tab-pane" id="add-comment">
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                            </div>
                        </div>
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

</body>

</html>
