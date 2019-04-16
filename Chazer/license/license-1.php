<?php
session_start();
require 'license_config.php';
?>
    <!DOCTYPE HTML>
    <html>

    <head>
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

        <link rel="stylesheet" href="css/dropdown.css">
        <link rel="stylesheet" href="share.css">
        <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <div class="row" style="padding-top: 40px; padding-bottom: 0; text-align: center; margin-top: 60px; margin-bottom: 20px;">
                        <span style="border-bottom: 5px solid #a8bcd3; border-top: 5px solid #a8bcd3; padding: 8px 0; font-size: 2em; color: #333; font-family: ‘cwTeXYen’, sans-serif; font-weight: 200; letter-spacing: 4px;">請選擇證照類別</span>
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
                            transition: max-height 0.25s ease-in-out, width 0.25s 0.25s ease-in-out, left 0.25s 0.5s ease-in-out, top 0.25s 0.75s ease-in-out;
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

                        .slides .slide>span {
                            display: block;
                            padding-bottom: 1em;
                            text-transform: uppercase;
                            text-decoration: none;
                            color: white;
                            transition: color 2s;
                        }

                        .slides .slide.active {
                            background: url(/NewProject/license/images/tumblr_o25xnwXIk11v4d5m9o3_1280.jpg);
                            position: relative;
                            top: 4.5em;
                            left: 0;
                            width: 100%;
                            max-height: 20em;
                            float: none;
                            transition: top 0.25s 1s ease-in-out, left 0.25s 1.25s ease-in-out, width 0.25s 1.5s ease-in-out, max-height 0.25s 1.75s ease-in-out;
                        }

                        .slides .slide.active span {
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
                            transition: max-height 0.25s ease-in-out, width 0.25s 0.25s ease-in-out, left 0.25s 0.5s ease-in-out, top 0.25s 0.75s ease-in-out;
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

                        .slides2 .slide>span {
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
                            transition: top 0.25s 1s ease-in-out, left 0.25s 1.25s ease-in-out, width 0.25s 1.5s ease-in-out, max-height 0.25s 1.75s ease-in-out;
                        }

                        .slides2 .slide.active span {
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

                        *,
                        *:before,
                        *:after {
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

                        .cf:before,
                        .slides:before,
                        .slides2:before,
                        .cf:after,
                        .slides:after,
                        .slides2:after {
                            content: " ";
                            /* 1 */
                            display: table;
                            /* 2 */
                        }

                        .cf:after,
                        .slides:after,
                        .slides2:after {
                            clear: both;
                        }

                        /**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */

                        .cf,
                        .slides,
                        .slides2 {
                            *zoom: 1;
                        }
                    </style>

                    <br>

                    <br>
                    <div class="container1">
                        <div class="slides">
                            <div class="slide">
                                <span href="#">醫療<i class="fa fa-times close" aria-hidden="true" style="float: right; color: #333;"></i></span>
                                <div class="content">
                                    <ol>
                                        <?php
              $sql = "SELECT * FROM licensearticle WHERE licensetype = '醫療' ORDER BY uploadtime DESC";
              $show = mysqli_query($conn,$sql);
              if(mysqli_num_rows($show) > 0){
              while($row = mysqli_fetch_array($show)){
                echo '
                <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                ';
              }
            }else{
              echo '目前尚無資料';
            }
           ?>
                                    </ol>
                                    <div class="more" style="float:right;"><a href="http://www.google.com">more...</a></div>
                                </div>
                            </div>

                            <div class="slide">
                                <span href="#">金融<i class="fa fa-times close" aria-hidden="true" style="float: right; color: #333;"></i></span>
                                <div class="content">
                                    <ol>
                                        <?php
              $sql = "SELECT * FROM licensearticle WHERE licensetype = '金融' ORDER BY uploadtime DESC";
              $show = mysqli_query($conn,$sql);
              if(mysqli_num_rows($show) > 0){

              while($row = mysqli_fetch_array($show)){
                echo '
                <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                ';
              }
            }else{
              echo '目前尚無資料';
            }
           ?>
                                    </ol>
                                </div>
                            </div>
                            <div class="slide">
                                <span href="#">語言<i class="fa fa-times close" aria-hidden="true" style="float: right; color: #333;"></i></span>
                                <div class="content">
                                    <ol>
                                        <?php
              $sql = "SELECT * FROM licensearticle WHERE licensetype = '語言' ORDER BY uploadtime DESC";
              $show = mysqli_query($conn,$sql);
              if(mysqli_num_rows($show) > 0){

              while($row = mysqli_fetch_array($show)){
                echo '
                <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                ';
              }
            }else{
              echo '目前尚無資料';
            }
           ?>
                                    </ol>
                                </div>
                            </div>

                        </div>

                        <div class="slides2" style="margin-top:110px;">
                            <div class="slide">
                                <span href="#">資訊<i class="fa fa-times close" aria-hidden="true" style="float: right; color: #333;"></i></span>
                                <div class="content">
                                    <ol>
                                        <?php
              $sql = "SELECT * FROM licensearticle WHERE licensetype = '資訊' ORDER BY uploadtime DESC";
              $show = mysqli_query($conn,$sql);
              if(mysqli_num_rows($show) > 0){

              while($row = mysqli_fetch_array($show)){
                echo '
                <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                ';
              }
            }else{
              echo '目前尚無資料';
            }
           ?>
                                    </ol>
                                </div>
                            </div>
                            <div class="slide">
                                <span href="#">餐飲<i class="fa fa-times close" aria-hidden="true" style="float: right; color: #333;"></i></span>
                                <div class="content">
                                    <ol>
                                        <?php
              $sql = "SELECT * FROM licensearticle WHERE licensetype = '餐飲' ORDER BY uploadtime DESC";
              $show = mysqli_query($conn,$sql);
              if(mysqli_num_rows($show) > 0){

              while($row = mysqli_fetch_array($show)){
                echo '
                <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                ';
              }
            }else{
              echo '目前尚無資料';
            }
           ?>
                                    </ol>
                                </div>
                            </div>
                            <div class="slide">
                                <span href="#">其他<i class="fa fa-times close" aria-hidden="true" style="float: right; color: #333;"></i></span>
                                <div class="content">
                                    <ol>
                                        <?php
              $sql = "SELECT * FROM licensearticle WHERE licensetype = '其他' ORDER BY uploadtime DESC";
              $show = mysqli_query($conn,$sql);
              if(mysqli_num_rows($show) > 0){

              while($row = mysqli_fetch_array($show)){
                echo '
                <li><a href="license-2.php?id='.$row['id'].'">'.$row['licensename'].'</a></li>
                ';
              }
            }else{
              echo '目前尚無資料';
            }
           ?>
                                    </ol>
                                </div>
                            </div>
                        </div>


                    </div>
                    <br>
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
                        <h3 style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333;letter-spacing: 4px; font-weight:600;">'.$row['licensetype'].'</h3>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 40px;">'.$row['licensename'].'</div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 40px;">'.$row['licensedate'].'</div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 15px;letter-spacing: 2px;line-height: 40px;">'.$row['examtype01'].'</div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; text-align: right; letter-spacing: 2px;line-height: 30px;"><a href="license-2.php?id='.$row['id'].'"><br><br>繼續閱讀...</a></div>
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

<!--
        /* ===== Logic for creating fake Select Boxes ===== */ $('.sel').each(function() { $(this).children('select').css('display', 'none'); var $current = $(this); $(this).find('option').each(function(i) { if (i == 0) { $current.prepend($('
        <div>', { class: $current.attr('class').replace(/sel/g, 'sel__box') })); var placeholder = $(this).text(); $current.prepend($('
            <span>', {
        class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
        text: placeholder,
        'data-placeholder': placeholder
      }));

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
-->


<script>
$('.slide span').click(function () {
  $('.slide.active').removeClass('active');
  $(this).closest('.slide').addClass('active');
  return false;
});
$('.close').click(function () {
  $('.slide.active').removeClass('active');
  return false;
});
</script>

</body>

</html>