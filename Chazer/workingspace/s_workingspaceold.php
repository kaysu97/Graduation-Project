<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我要分享 &mdash;</title>
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
    <link rel="stylesheet" href="/newproject/css/flexslider.css">
    <link rel="stylesheet" href="/newproject/css/style.css">
    <link rel="stylesheet" href="/newproject/css/school-2.css">
    <link rel="stylesheet" href="/newproject/share.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>

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
    <div id="page">
      <nav class="fh5co-nav" role="navigation">
        <div class="container-wrap">
          <div class="top-menu">
            <div class="row">
              <div class="col-xs-3">
                <div id="fh5co-logo">職場經驗分享</div>
              </div>
              <div class="col-xs-9 text-right menu-1">
                <ul>
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
      </nav>
      <form action="workingspacesubmit.php" method="post">
        <div class="rela-block profile-card">
            <div id="fh5co-services" style="min-height: 800px;">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="search-box">
                            <div class="titles">公司名稱 :</div> 
  <input type="text" autocomplete="off" name="CompanyNameSelected" placeholder="Search company..." required style="border: none; border-bottom: 2px solid #ebedef; width: 400px;">
                       <div class="result"></div>
                        </div><br>
                        <div class="titles">部門
                          <input type="text" name="department" style="min-width: 100px; max-height: 25px; ">
                        </div>
                        <br>
                        <div class="hi">
                            <div class="titles">月薪範圍</div>
                            <input class="hidden radio-label" value="3萬以下" name="salary" type="radio" name="sarary" id="under3w" checked="checked" />
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
                            <input class="hidden radio-label" value="在職" name="duty" type="radio" name="duty" id="y" checked="checked" />
                            <label class="button-label" for="y">
                                <p>在職</p>
                                </label>
                            <input class="hidden radio-label" value="待業" type="radio" name="duty" id="n" />
                            <label class="button-label" for="n">
                                <p>待業</p>
                            </label>
                        </div><br><br>
                        <div class="titles">工作環境</div>
                        <div class="row">
                            <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                                <p>工作氣氛</p>
                            </div>
                            <div class="col-md-5">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star5" name="atmosphererating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                                        <input type="radio" id="star4" name="atmosphererating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                                        <input type="radio" id="star3" name="atmosphererating" value="3" /><label for="star3" title="Good">3 stars</label>
                                        <input type="radio" id="star2" name="atmosphererating" value="2" /><label for="star2" title="Poor">2 stars</label>
                                        <input type="radio" id="star1" name="atmosphererating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                                <p>環境舒適度</p>
                            </div>
                            <div class="col-md-5">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star10" name="comfortrating" value="5" /><label for="star10" title="Outstanding">5 stars</label>
                                        <input type="radio" id="star9" name="comfortrating" value="4" /><label for="star9" title="Very Good">4 stars</label>
                                        <input type="radio" id="star8" name="comfortrating" value="3" /><label for="star8" title="Good">3 stars</label>
                                        <input type="radio" id="star7" name="comfortrating" value="2" /><label for="star7" title="Poor">2 stars</label>
                                        <input type="radio" id="star6" name="comfortrating" value="1" /><label for="star6" title="Very Poor">1 star</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px; padding-right: 1px;">
                                <p>溝通管道順暢度</p>
                            </div>
                            <div class="col-md-5">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star15" name="communicationrating" value="5" /><label for="star15" title="Outstanding">5 stars</label>
                                        <input type="radio" id="star14" name="communicationrating" value="4" /><label for="star14" title="Very Good">4 stars</label>
                                        <input type="radio" id="star13" name="communicationrating" value="3" /><label for="star13" title="Good">3 stars</label>
                                        <input type="radio" id="star12" name="communicationrating" value="2" /><label for="star12" title="Poor">2 stars</label>
                                        <input type="radio" id="star11" name="communicationrating" value="1" /><label for="star11" title="Very Poor">1 star</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                                <p>升遷制度</p>
                            </div>
                            <div class="col-md-5">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star20" name="uprating" value="5" /><label for="star20" title="Outstanding">5 stars</label>
                                        <input type="radio" id="star19" name="uprating" value="4" /><label for="star19" title="Very Good">4 stars</label>
                                        <input type="radio" id="star18" name="uprating" value="3" /><label for="star18" title="Good">3 stars</label>
                                        <input type="radio" id="star17" name="uprating" value="2" /><label for="star17" title="Poor">2 stars</label>
                                        <input type="radio" id="star16" name="uprating" value="1" /><label for="star16" title="Very Poor">1 star</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                                <p>玻璃天花板</p>
                            </div>
                            <div class="col-md-5">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star25" name="barrierrating" value="5" /><label for="star25" title="Outstanding">5 stars</label>
                                        <input type="radio" id="star24" name="barrierrating" value="4" /><label for="star24" title="Very Good">4 stars</label>
                                        <input type="radio" id="star23" name="barrierrating" value="3" /><label for="star23" title="Good">3 stars</label>
                                        <input type="radio" id="star22" name="barrierrating" value="2" /><label for="star22" title="Poor">2 stars</label>
                                        <input type="radio" id="star21" name="barrierrating" value="1" /><label for="star21" title="Very Poor">1 star</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="padding-top: 33px; float: left; padding-left: 20px;">
                                <p>出差頻率</p>
                            </div>
                            <div class="col-md-5">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star30" name="btrating" value="5" /><label for="star30" title="Outstanding">5 stars</label>
                                        <input type="radio" id="star29" name="btrating" value="4" /><label for="star29" title="Very Good">4 stars</label>
                                        <input type="radio" id="star28" name="btrating" value="3" /><label for="star28" title="Good">3 stars</label>
                                        <input type="radio" id="star27" name="btrating" value="2" /><label for="star27" title="Poor">2 stars</label>
                                        <input type="radio" id="star26" name="btrating" value="1" /><label for="star26" title="Very Poor">1 star</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="hi">
                            <div class="titles">工作時數 <sub>過去一個月，平均每日上班時數</sub></div>
                            <input class="hidden radio-label" value="6小時以下" type="radio" name="workinghours" id="6hr" checked="checked" />
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
                            <div class="titles">加班與否</div>
                            <input class="hidden radio-label" value="是" type="radio" name="overtime" id="yess"  />
                            <label class="button-label" for="yess">
                                <p>是</p>
                                </label>
                            <input class="hidden radio-label" value="否" type="radio" name="overtime" id="nope" checked="checked"/>
                            <label class="button-label" for="nope">
                                <p>否</p>
                                </label>
                            </div>
                               <br>
                                <div class="newq" id="f" style="display: none;">
                                   <div class="hi">
                                    <div class="titles">一個月加班頻率</div>
                            <input class="hidden radio-label" type="radio" value="5次以內" name="overtimefrequency" id="under5" checked="checked" />
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
                                    <div class="titles">平均加班時數</div>
                            <input class="hidden radio-label" type="radio" value="1小時以內" name="overtimehours" id="under1" checked="checked" />
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
                        <div class="titles">工作上的困難</div><br> <textarea rows="2" name="obstacle" style="width:400px;height:100px; font-size: 20px; border-color:#2ECC71;"></textarea><br><br>
                        <div class="titles">工作福利</div><br> <textarea rows="2" name="welfare" style="width:400px;height:100px; font-size: 20px; border-color:#2ECC71;"></textarea><br><br>
                         <div class="titles">想說的話</div><br> <textarea rows="2" name="personalopinion" style="width:400px;height:100px; font-size: 20px; border-color:#2ECC71;"></textarea><br><br>
                        <div class="btn"><input type="submit"/></div>
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
