<?php
session_start();
require 'workingspaceconfig.php';
$poemail =$_SESSION['email'];
$articleid = $_REQUEST['id'];
$query = $conn->query("SELECT * FROM workingspacearticle WHERE user = '$poemail' and id = '$articleid'");
$po = $query->fetch_assoc();

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
  <link rel="stylesheet" href="/newproject/profile.css">
  <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/newproject/css/animate.css">
  <link rel="stylesheet" href="/newproject/css/icomoon.css">
  <link rel="stylesheet" href="/newproject/css/magnific-popup.css">
      <link rel="stylesheet" href="/newproject/css/style.css">
    <link rel="stylesheet" href="css/school-2.css">
    <link rel="stylesheet" href="/newproject/share.css">
    <link rel="stylesheet" href="css/smart-searchbar.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script>
        function setRequired2() {
            if (document.getElementById("star5").checked != true && document.getElementById("star4").checked != true && document.getElementById("star3").checked != true && document.getElementById("star1").checked != true && document.getElementById("star2").checked != true) {
                document.getElementById("have").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#workfeeling').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have").style.display = "none";
            }
            if (document.getElementById("star6").checked != true && document.getElementById("star7").checked != true && document.getElementById("star8").checked != true && document.getElementById("star9").checked != true && document.getElementById("star10").checked != true) {
                document.getElementById("have1").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#environment').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have1").style.display = "none";
            }
            if (document.getElementById("star11").checked != true && document.getElementById("star12").checked != true && document.getElementById("star13").checked != true && document.getElementById("star14").checked != true && document.getElementById("star15").checked != true) {
                document.getElementById("have2").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#communication').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have2").style.display = "none";
            }
            if (document.getElementById("star16").checked != true && document.getElementById("star17").checked != true && document.getElementById("star18").checked != true && document.getElementById("star19").checked != true && document.getElementById("star20").checked != true) {
                document.getElementById("have3").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#promotion').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have3").style.display = "none";
            }
            if (document.getElementById("star21").checked != true && document.getElementById("star22").checked != true && document.getElementById("star23").checked != true && document.getElementById("star24").checked != true && document.getElementById("star25").checked != true) {
                document.getElementById("have4").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#barrier').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have4").style.display = "none";
            }
            if (document.getElementById("star26").checked != true && document.getElementById("star27").checked != true && document.getElementById("star28").checked != true && document.getElementById("star29").checked != true && document.getElementById("star30").checked != true) {
                document.getElementById("have5").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#travel').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have5").style.display = "none";
            }
            if (document.getElementById("6hr").checked != true && document.getElementById("6to8hr").checked != true && document.getElementById("8hr").checked != true) {
                document.getElementById("have6").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have6').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have6").style.display = "none";
            }
            if (document.getElementById("yess").checked != true && document.getElementById("nope").checked != true) {
                document.getElementById("have7").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have7').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have7").style.display = "none";
            }
            if (document.getElementById("yess").checked == true) {
                document.getElementById("under1").setAttribute("required", "required");
                document.getElementById("under5").setAttribute("required", "required");     if (document.getElementById("under5").checked != true && document.getElementById("5to10").checked != true && document.getElementById("above10").checked != true) {
                    document.getElementById("have8").style.display = "inline";
                    $('html,body').animate({
                    scrollTop: $('#have8').offset().top
                }, 600);
                return false;
                } else {
                    document.getElementById("have8").style.display = "none";
                }
                if (document.getElementById("under1").checked != true && document.getElementById("1to3").checked != true && document.getElementById("above3").checked != true) {
                    document.getElementById("have9").style.display = "inline";
                    $('html,body').animate({
                    scrollTop: $('#have9').offset().top
                }, 600);
                return false;
                } else {
                    document.getElementById("have9").style.display = "none";
                }
            } else {
                document.getElementById("under1").removeAttribute("required");
                document.getElementById("under5").removeAttribute("required");
            }
        }
    </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.search-box input[type="text"]').on("keyup input", function() {
      /* Get input value on change */
      var inputVal = $(this).val();
      var resultDropdown = $(this).siblings(".result");
      if (inputVal.length) {
        $.get("realtsearch.php", {
          term: inputVal
        }).done(function(data) {
          // Display the returned data in browser
          resultDropdown.html(data);
        });
      } else {
        resultDropdown.empty();
      }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result p", function() {
      $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
      $(this).parent(".result").empty();
    });
  });
  </script>
<style type="text/css">
        .titles{
            color: black;
            font-size: 1em;
        }
    .col-md-2 > p{
            color: black;
        }
    </style>
</head>

<body>
  <div id="page">
    <nav class="fh5co-nav" role="navigation">
      <div class="container-wrap">
        <div class="top-menu">
          <div class="row">
            <div class="col-xs-3">
                <div id="fh5co-logo"><a href="/newproject/index.php">職場經驗分享</a></div>
            </div>
            <div class="col-xs-9 text-right menu-1">
              <ul style="float: right;">
                <li><a href="/newproject/index.php">Home</a></li>
                <li class="active"><a href="/newproject/share_1.php">Share</a></li>
                <li class="has-dropdown">
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
    <form action="workingspace-2-edit-submit.php" method="post">
      <div class="rela-block profile-card">
        <div id="fh5co-services" style="min-height: 800px;">
          <div class="row">
            <div class="col-md-1" style="float: left;"></div>
            <div class="col-md-10">
              <div class="search-box">
                <select name="articleid" style="display:none;"><option selected><?php echo $articleid; ?></option></select>

                <div class="titles">公司名稱</div>
                <input type="text" autocomplete="off" value="<?php echo $po['company']; ?>" name="CompanyNameSelected" placeholder="Search company..." required style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px; height: 50px;">
                <div class="result"></div>
              </div><br><br>
              <div class="titles">部門</div>
                <input type="text" name="applydepartment" value="<?php echo $po['department']; ?>" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" required>
              <br><br>
              <div class="hi">
                <div class="titles">月薪範圍</div>
                <input class="hidden radio-label" value="3萬以下" name="salary" type="radio" name="sarary" id="under3w" />
                <label class="button-label" for="under3w">
                  <p>3萬以下</p>
                </label>
                <input class="hidden radio-label" value="3萬到5萬" type="radio" name="salary" id="3wto5w" />
                <label class="button-label" for="3wto5w">
                  <p>3萬到5萬</p>
                </label>
                <input class="hidden radio-label" value="5萬到7萬" type="radio" name="salary" id="5wto7w" />
                <label class="button-label" for="5wto7w">
                  <p>5萬到7萬</p>
                </label>
                <input class="hidden radio-label" value="7萬以上" type="radio" name="salary" id="above7w" />
                <label class="button-label" for="above7w">
                  <p>7萬以上</p>
                </label>
              </div>
              <br>
              <div class="hi">
                <div class="titles">在職與否</div>
                <input class="hidden radio-label" value="在職" name="duty" type="radio" name="duty" id="y" />
                <label class="button-label" for="y">
                  <p>在職</p>
                </label>
                <input class="hidden radio-label" value="待業" type="radio" name="duty" id="n" />
                <label class="button-label" for="n">
                  <p>待業</p>
                </label>
              </div><br><br>
              <div class="title" style="font-size=1.2em; font-weight=400;">工作環境</div>
              <div class="row">
                <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                  <p><span id="workfeeling" style="color:#fc0752;">*&nbsp;</span>工作氣氛</p>
                </div>
                <div class="col-md-5">
                  <div class="star-rating">
                    <fieldset>
                      <input type="radio" id="star5" name="atmosphererating" value="5" required/><label for="star5" title="Outstanding" >5 stars</label>
                      <input type="radio" id="star4" name="atmosphererating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="atmosphererating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="atmosphererating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="atmosphererating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                    <span style="color:#fc0752; display:none" id="have">&nbsp;&nbsp;此題為必填</span>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                  <p><span id="environment" style="color:#fc0752;">*&nbsp;</span>環境舒適度</p>
                </div>
                <div class="col-md-5">
                  <div class="star-rating">
                    <fieldset>
                      <input type="radio" id="star10" name="comfortrating" value="5" required/><label for="star10" title="Outstanding" >5 stars</label>
                      <input type="radio" id="star9" name="comfortrating" value="4" /><label for="star9" title="Very Good">4 stars</label>
                      <input type="radio" id="star8" name="comfortrating" value="3" /><label for="star8" title="Good">3 stars</label>
                      <input type="radio" id="star7" name="comfortrating" value="2" /><label for="star7" title="Poor">2 stars</label>
                      <input type="radio" id="star6" name="comfortrating" value="1" /><label for="star6" title="Very Poor">1 star</label>
                    </fieldset>
                    <span style="color:#fc0752; display:none" id="have1">&nbsp;&nbsp;此題為必填</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px; padding-right: 1px;">
                  <p><span id="communication" style="color:#fc0752;">*&nbsp;</span>溝通管道順暢度</p>
                </div>
                <div class="col-md-5">
                  <div class="star-rating">
                    <fieldset>
                      <input type="radio" id="star15" name="communicationrating" value="5" required/><label for="star15" title="Outstanding" >5 stars</label>
                      <input type="radio" id="star14" name="communicationrating" value="4" /><label for="star14" title="Very Good">4 stars</label>
                      <input type="radio" id="star13" name="communicationrating" value="3" /><label for="star13" title="Good">3 stars</label>
                      <input type="radio" id="star12" name="communicationrating" value="2" /><label for="star12" title="Poor">2 stars</label>
                      <input type="radio" id="star11" name="communicationrating" value="1" /><label for="star11" title="Very Poor">1 star</label>
                    </fieldset>
                    <span style="color:#fc0752; display:none" id="have2">&nbsp;&nbsp;此題為必填</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                  <p><span id="promotion" style="color:#fc0752;">*&nbsp;</span>升遷制度</p>
                </div>
                <div class="col-md-5">
                  <div class="star-rating">
                    <fieldset>
                      <input type="radio" id="star20" name="uprating" value="5" required/><label for="star20" title="Outstanding" >5 stars</label>
                      <input type="radio" id="star19" name="uprating" value="4" /><label for="star19" title="Very Good">4 stars</label>
                      <input type="radio" id="star18" name="uprating" value="3" /><label for="star18" title="Good">3 stars</label>
                      <input type="radio" id="star17" name="uprating" value="2" /><label for="star17" title="Poor">2 stars</label>
                      <input type="radio" id="star16" name="uprating" value="1" /><label for="star16" title="Very Poor">1 star</label>
                    </fieldset>
                    <span style="color:#fc0752; display:none" id="have3">&nbsp;&nbsp;此題為必填</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                  <p><span id="barrier" style="color:#fc0752;">*&nbsp;</span>玻璃天花板</p>
                </div>
                <div class="col-md-5">
                  <div class="star-rating">
                    <fieldset>
                      <input type="radio" id="star25" name="barrierrating" value="5" required/><label for="star25" title="Outstanding" >5 stars</label>
                      <input type="radio" id="star24" name="barrierrating" value="4" /><label for="star24" title="Very Good">4 stars</label>
                      <input type="radio" id="star23" name="barrierrating" value="3" /><label for="star23" title="Good">3 stars</label>
                      <input type="radio" id="star22" name="barrierrating" value="2" /><label for="star22" title="Poor">2 stars</label>
                      <input type="radio" id="star21" name="barrierrating" value="1" /><label for="star21" title="Very Poor">1 star</label>
                    </fieldset>
                    <span style="color:#fc0752; display:none" id="have4">&nbsp;&nbsp;此題為必填</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                  <p><span id="travel" style="color:#fc0752;">*&nbsp;</span>出差頻率</p>
                </div>
                <div class="col-md-5">
                  <div class="star-rating">
                    <fieldset>
                      <input type="radio" id="star30" name="btrating" value="5" required/><label for="star30" title="Outstanding" >5 stars</label>
                      <input type="radio" id="star29" name="btrating" value="4" /><label for="star29" title="Very Good">4 stars</label>
                      <input type="radio" id="star28" name="btrating" value="3" /><label for="star28" title="Good">3 stars</label>
                      <input type="radio" id="star27" name="btrating" value="2" /><label for="star27" title="Poor">2 stars</label>
                      <input type="radio" id="star26" name="btrating" value="1" /><label for="star26" title="Very Poor">1 star</label>
                    </fieldset>
                    <span style="color:#fc0752; display:none" id="have5">&nbsp;&nbsp;此題為必填</span>
                  </div>
                </div>
              </div>
              <br>
              <div class="hi">
                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>工作時數 <sub>過去一個月，平均每日上班時數</sub><span style="color:#fc0752; display:none" id="have6">&nbsp;&nbsp;此題為必填</span></div>
                <input class="hidden radio-label" value="6小時以下" type="radio" name="workinghours" id="6hr" required/>
                <label class="button-label" for="6hr">
                  <p>6小時以下</p>
                </label>
                <input class="hidden radio-label" value="6到8小時" type="radio" name="workinghours" id="6to8hr" />
                <label class="button-label" for="6to8hr">
                  <p>6到8小時</p>
                </label>
                <input class="hidden radio-label" value="8小時以上" type="radio" name="workinghours" id="8hr" />
                <label class="button-label" for="8hr">
                  <p>8小時以上</p>
                </label>
              </div><br>
              <div class="hi">
                <div class="titles"><span style="color:#fc0752;" id="have">*&nbsp;</span>加班與否<span style="color:#fc0752; display:none" id="have7">&nbsp;&nbsp;此題為必填</span></div>
                <input class="hidden radio-label" value="是" type="radio" name="overtime" id="yess" required/>
                <label class="button-label" for="yess">
                  <p>是</p>
                </label>
                <input class="hidden radio-label" value="否" type="radio" name="overtime" id="nope"/>
                <label class="button-label" for="nope">
                  <p>否</p>
                </label>
              </div>
              <br>
              <div class="newq" id="f" style="display: none;">
                <div class="hi">
                  <div class="titles"><span style="color:#fc0752;" id="have">*&nbsp;</span>一個月加班頻率<span style="color:#fc0752; display:none" id="have8">&nbsp;&nbsp;此題為必填</span></div>
                  <input class="hidden radio-label" type="radio" value="5次以內" name="overtimefrequency" id="under5" />
                  <label class="button-label" for="under5">
                    <p>5次以內</p>
                  </label>
                  <input class="hidden radio-label" type="radio" value="5次到10次" name="overtimefrequency" id="5to10" />
                  <label class="button-label" for="5to10">
                    <p>5次到10次</p>
                  </label>
                  <input class="hidden radio-label" type="radio" value="10次以上" name="overtimefrequency" id="above10" />
                  <label class="button-label" for="above10">
                    <p>10次以上</p>
                  </label>
                </div>
                <div class="hi">
                  <div class="titles"><span style="color:#fc0752;" id="have">*&nbsp;</span>平均加班時數<span style="color:#fc0752; display:none" id="have9">&nbsp;&nbsp;此題為必填</span></div>
                  <input class="hidden radio-label" type="radio" value="1小時以內" name="overtimehours" id="under1" />
                  <label class="button-label" for="under1">
                    <p>1小時以內</p>
                  </label>
                  <input class="hidden radio-label" type="radio" value="1小時到3小時" name="overtimehours" id="1to3" />
                  <label class="button-label" for="1to3">
                    <p>1小時到3小時</p>
                  </label>
                  <input class="hidden radio-label" type="radio" value="3小時以上" name="overtimehours" id="above3" />
                  <label class="button-label" for="above3">
                    <p>3小時以上</p>
                  </label>
                </div>
              </div>


              <br>

              <hr class="style9">
              <br>
              <div class="title"  style="font-size=1.2em; font-weight=400;" style="font-size=1.2em; font-weight=400;">工作上的困難</div><br>
              <?php
                    if($po['obstacle']!=''){
                      echo '
                      <textarea rows="2" name="obstacle" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;">'.$po['obstacle'].'</textarea><br><br>
                      ';
                    }
                    else{
                      echo '
                      <textarea rows="2" name="obstacle" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea><br><br>
                      ';
                    }
               ?>

              <div class="title"  style="font-size=1.2em; font-weight=400;">工作福利</div><br>
              <?php
                    if($po['welfare']!=''){
                      echo '
                      <textarea rows="2" name="welfare" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;">'.$po['welfare'].'</textarea><br><br>
                      ';
                    }
                    else{
                      echo '
                      <textarea rows="2" name="welfare" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea><br><br>
                      ';
                    }
               ?>

              <div class="title"  style="font-size=1.2em; font-weight=400;">想說的話</div><br>
              <?php
                    if($po['personalopinion']!=''){
                      echo '
                      <textarea rows="2" name="personalopinion" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;">'.$po['personalopinion'].'</textarea><br><br>
                      ';
                    }
                    else{
                      echo '
                      <textarea rows="2" name="personalopinion" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea><br><br>
                      ';
                    }
               ?>
                <button class="button button--secondary" type="submit" value="Submit" onclick="setRequired2()">
              <span class="button__inner">Submit</span>
            </button>
            </div>
            <div class="col-md-1"></div>

          </div>
        </div>
      </div>
    </form>
  </div>



  <!-- END container-wrap -->

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



  <script>
  $("#yess").click(function() {
    $("#f").show();
    $("#t").hide();
  });
  $("#nope").click(function() {
    $("#f").hide();
    $("#t").hide();
  });
  </script>


</body>

</html>
