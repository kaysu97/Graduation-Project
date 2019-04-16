<?php
session_start();
require 'license_config.php';
$poemail =$_SESSION['email'];
$articleid = $_REQUEST['id'];
$query = $conn->query("SELECT * FROM licensearticle WHERE user = '$poemail' and id = '$articleid'");
$po = $query->fetch_assoc();
mysqli_close($conn);
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
    <link rel="stylesheet" href="/newproject/css/flexslider.css">
    <link rel="stylesheet" href="/newproject/css/style.css">
    <link rel="stylesheet" href="/newproject/css/school-2.css">
    <link rel="stylesheet" href="share.css">
    <link rel="stylesheet" href="css/school-2.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function setRequired2() {
            if (document.getElementById("oralflip").checked != true && document.getElementById("testflip").checked != true && document.getElementById("doingflip").checked != true) {
                document.getElementById("have1").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have1').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have1").style.display = "none";
            }
            if (document.getElementById("time1").checked != true && document.getElementById("time2").checked != true && document.getElementById("time3").checked != true && document.getElementById("time4").checked != true) {
                document.getElementById("have2").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have2').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have2").style.display = "none";
            }
            if (document.getElementById("CramSchoolY").checked != true && document.getElementById("CramSchoolN").checked != true) {
                document.getElementById("have3").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have3').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have3").style.display = "none";
            }
            if (document.getElementById("have4").style.display == "inline") {
                if (document.getElementById("time11").checked != true && document.getElementById("time12").checked != true && document.getElementById("time13").checked != true && document.getElementById("time14").checked != true) {
                    document.getElementById("have5").style.display = "inline";
                    $('html,body').animate({
                        scrollTop: $('#have5').offset().top
                    }, 600);
                    return false;
                } else {
                    document.getElementById("have5").style.display = "none";
                }
                if (document.getElementById("oralflip2").checked == true) {
                    document.getElementById("OQ2").setAttribute("required", "required");
                } else {
                    document.getElementById("OQ2").removeAttribute("required");
                }
                if (document.getElementById("testflip2").checked == true) {
                    document.getElementById("TQ2").setAttribute("required", "required");
                } else {
                    document.getElementById("TQ2").removeAttribute("required");
                }
                if (document.getElementById("doingflip2").checked == true) {
                    document.getElementById("DQ2").setAttribute("required", "required");
                } else {
                    document.getElementById("DQ2").removeAttribute("required");
                }
            }
        }

        function setRequired() {
            if (document.getElementById("testflip").checked == true) {
                document.getElementById("TQ1").setAttribute("required", "required");
            } else {
                document.getElementById("TQ1").removeAttribute("required");
            }
            if (document.getElementById("oralflip").checked == true) {
                document.getElementById("OQ1").setAttribute("required", "required");
            } else {
                document.getElementById("OQ1").removeAttribute("required");
            }
            if (document.getElementById("doingflip").checked == true) {
                document.getElementById("DQ1").setAttribute("required", "required");
            } else {
                document.getElementById("DQ1").removeAttribute("required");
            }
        }

        function setRe() {
            if (document.getElementById("oralflip2").checked == true || document.getElementById("testflip2").checked == true || document.getElementById("doingflip2").checked == true) {
                document.getElementById("time11").setAttribute("required", "required");
                document.getElementById("have4").style.display = "inline";

            }

        }
    </script>
    <script>
        $(document).ready(function() {
            $("form").submit(function() {
                if ($("input[name='signup[]']:checked").length == 0) {
                    $('html,body').animate({
                        scrollTop: $('#sign').offset().top
                    }, 600);
                    alert("請至少選擇一種 報名方式 ");
                    return false;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#CollegeNameSelected').on('change', function() {
                var cCollegeName = $(this).val();
                if (cCollegeName) {
                    $.ajax({
                        type: 'POST',
                        url: 'Ajax.php',
                        data: 'CollegeName=' + cCollegeName,
                        success: function(html) {
                            $('#CollegeDepartmentSelected').html(html);
                        }
                    });
                } else {
                    $('#CollegeDepartmentSelected').html('<option value="">Select college name first</option>');
                }
            });
        });
        $(document).ready(function() {
            $("#oralflip").click(function() {
                $("#textpanel").slideUp("slow");
                $("#doingpanel").slideUp("slow");
                $("#oralpanel").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#testflip").click(function() {
                $("#oralpanel").slideUp("slow");
                $("#doingpanel").slideUp("slow");
                $("#textpanel").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#doingflip").click(function() {
                $("#oralpanel").slideUp("slow");
                $("#textpanel").slideUp("slow");
                $("#doingpanel").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#oralflip2").click(function() {
                $("#textpanel2").slideUp("slow");
                $("#doingpanel2").slideUp("slow");
                $("#oralpanel2").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#testflip2").click(function() {
                $("#oralpanel2").slideUp("slow");
                $("#doingpanel2").slideUp("slow");
                $("#textpanel2").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#doingflip2").click(function() {
                $("#oralpanel2").slideUp("slow");
                $("#textpanel2").slideUp("slow");
                $("#doingpanel2").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#toggle8").click(function() {
                $("#otherWay").slideToggle("slow");
            });
        });
        // $(function() {
        //     $("#datepicker").datepicker();
        // });
    </script>


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

  <script type="text/javascript">
      $(document).ready(function() {
          $('.search-box input[type="text"]').on("keyup input", function() {
              /* Get input value on change */
              var inputVal = $(this).val();
              var resultDropdown = $(this).siblings(".result");
              if (inputVal.length) {
                  $.get("realtsearch2.php", {
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
    </style>
</head>

<body>
    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container-wrap">
                <div class="top-menu">
                    <div class="row">
                        <div class="col-xs-3">
                            <div id="fh5co-logo"><a href="/newproject/index.php">證照考取分享</a></div>
                        </div>
                        <div class="col-xs-9 text-right menu-1">
                            <ul style="text-align:right">
                                <li><a href="/newproject/index.php">Home</a></li>
                                <li class="active"><a href="/newproject/share_1.php">Share</a></li>
                                <li class="has-dropdown">
                                    <a href="blog.html">Service</a>
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
        <form action="license-2-edit-submit.php" method="POST">
            <div class="rela-block profile-card">
                <div id="fh5co-services" style="min-height: 800px;">
                    <div class="row">
                        <div class="col-md-1" style="float: left;"></div>
                        <div class="col-md-10">
                          <select name="articleid" style="display:none;"><option selected><?php echo $articleid; ?></option></select>

                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>證照類別
                                <select class="selectpicker" data-size="10" style="width: 13%;" name="LicenseTypeSelected" required>
                            <?php
                            echo '<option selected>'.$po['licensetype'].'</option>';
                             ?>
                            <!-- <option disabled selected hidden value="">請選擇證照類別</option> -->
                            <option value="語言">語言</option>
                            <option value="餐飲">餐飲</option>
                            <option value="資訊">資訊</option>
                            <option value="醫療">醫療</option>
                            <option value="金融">金融</option>
                            <option value="救援">救援</option>
                            <option value="其他">其他</option>
                            </select>
                            </div><br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>應考證照

                               <!-- <input type="text" name="licensename" style="min-width: 100px; max-height: 25px;" required> -->

                               <div class="search-box">
                               <input type="text" name="licensename" value="<?php echo $po['licensename'] ?>" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" autocomplete="off" required>
                               <span class="focus-border"></span>
                               <div class="result"></div>
                              </div>

                            </div>
                            <br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試年份
                                <select class="selectpicker" data-size="10" style="width:10%;" name="ExamDate" required>
                            <!-- <option disabled selected hidden value="">年份</option> -->
                            <?php
                            echo '<option selected>'.$po['licensedate'].'</option>';
                             ?>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            </select>
                            </div>
                            <br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>報名方式</div>
                                <input class="hidden radio-label" type="checkbox" id="toggle5" name="signup[]" value="線上表單">
                                <label class="button-label" for="toggle5">線上表單</label>

                                <input class="hidden radio-label" type="checkbox" id="toggle6" name="signup[]" value="Email寄信">
                                <label class="button-label" for="toggle6">Email寄信</label>

                                <input class="hidden radio-label" type="checkbox" id="toggle7" name="signup[]" value="郵寄">
                                <label class="button-label" for="toggle7">郵寄</label>

                                <input class="hidden radio-label" type="checkbox" id="toggle8" name="signup[]" value="其他方式">
                                <label class="button-label" for="toggle8">其他方式</label>
                                <input class="effect" type="text" name="signup[]" id="otherWay" style="width:20% ;display:none; border:2px solid #ebedef;border-radius:5px; padding:5px;" placeholder="請簡述其他報名方式">
                            </div>
                            <br>
                            <div class="hi">
                                <h4><span style="color:#fc0752; font-size:14px">*&nbsp;</span>第一階段<span style="color:#fc0752; display:none; font-size:14px" id="have1">&nbsp;&nbsp;此題為必填</span></h4>

                                <input class="hidden radio-label" type="radio" name="ExamType01" value="口試" id="oralflip" required onchange="setRequired()" />
                                <label class="button-label" for="oralflip">
                                <p>口試</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="ExamType01" value="筆試" id="testflip" onchange="setRequired()" />
                                <label class="button-label" for="testflip">
                                <p>筆試</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="ExamType01" value="實作" id="doingflip" onchange="setRequired()" />
                                <label class="button-label" for="doingflip">
                                <p>實作<p>
                                </label>

                            </div>
                            <br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試時間長度<span style="color:#fc0752; display:none" id="have2">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" name="testTime1" value="30分鐘以下" id="time1" required/>
                                <label class="button-label" for="time1">
                                <p>30分鐘以下</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="testTime1" value="30分鐘(含)-1小時" id="time2" />
                                <label class="button-label" for="time2">
                                <p>30分鐘(含)-1小時</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="testTime1" value="1小時(含)-2小時" id="time3" />
                                <label class="button-label" for="time3">
                                <p>1小時(含)-2小時</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="testTime1" value="2小時以上" id="time4" />
                                <label class="button-label" for="time4">
                                <p>2小時以上</p>
                                </label>
                            </div>
                            <br>
                            <div class="flex hide-on-small" id="oralpanel" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試內容補充</div>
                                    <input type="text" id="OQ1" name="oralquestion011" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" placeholder="可填寫題型、類別或難易度等等..">
                                </div>
                            </div>

                            <div class="flex hide-on-small" id="textpanel" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                    <input type="text" id="TQ1" name="textquestion011" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" placeholder="旅遊類、時事類題型等等...">
                                </div>
                            </div>
                            <div class="flex hide-on-small" id="doingpanel" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                    <input type="text" id="DQ1" name="practicequestion011" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" placeholder="主題、題目等等...">
                                </div>
                            </div>
                            <br>

                            <div class="hi">
                                <h4>第二階段</h4>
                                <input class="hidden radio-label" type="radio" name="ExamType02" value="口試" id="oralflip2" onchange="setRe()" />
                                <label class="button-label" for="oralflip2">
                                <p>口試</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="ExamType02" value="筆試" id="testflip2" onchange="setRe()" />
                                <label class="button-label" for="testflip2">
                                <p>筆試</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="ExamType02" value="實作" id="doingflip2" onchange="setRe()" />
                                <label class="button-label" for="doingflip2">
                                <p>實作<p>
                                </label>
                            </div>
                            <br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;display:none" id="have4">*&nbsp;</span>考試時間長度<span style="color:#fc0752; display:none" id="have5">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" name="testTime2" value="30分鐘以下" id="time11" />
                                <label class="button-label" for="time11">
                                <p>30分鐘以下</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="testTime2" value="30分鐘(含)-1小時" id="time12" />
                                <label class="button-label" for="time12">
                                <p>30分鐘(含)-1小時</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="testTime2" value="1小時(含)-2小時" id="time13" />
                                <label class="button-label" for="time13">
                                <p>1小時(含)-2小時</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="testTime2" value="2小時以上" id="time14" />
                                <label class="button-label" for="time14">
                                <p>2小時以上</p>
                                </label>
                            </div>
                            <br>
                            <div class="flex hide-on-small" id="oralpanel2" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試內容補充</div>
                                    <input type="text" id="OQ2" name="oralquestion021" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" placeholder="可填寫題型、類別或難易度等等..">
                                </div>
                            </div>

                            <div class="flex hide-on-small" id="textpanel2" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                    <input type="text" id="TQ2" name="textquestion021" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" placeholder="旅遊類、時事類題型等等...">
                                </div>
                            </div>
                            <div class="flex hide-on-small" id="doingpanel2" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                    <input type="text" id="DQ2" name="practicequestion021" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;" placeholder="主題、題目等等...">
                                </div>
                            </div>
                            <hr class="style9">
                            <br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>準備時間:&nbsp;從&nbsp;
                                <input type="text" style="width:50px;height:25px" name="preparedtime" onkeyup="value=value.replace(/[^\d{1,}\.\d{1,}|\d{1,}]/g,‘‘)" value="<?php echo $po['preparedtime'] ?>" required>&nbsp;個月前開始，平均一周&nbsp;<input type="text" style="width:50px;height:25px" name="preparedhour" onkeyup="value=value.replace(/[^\d{1,}\.\d{1,}|\d{1,}]/g,‘‘)" value="<?php echo $po['preparedhour'] ?>" required>&nbsp;小時 </div>
                            <br>

                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>是否參加補習班
                                <input class="hidden radio-label" type="radio" name="CramSchool" value="補習班" id="CramSchoolY" required/>
                                <label class="button-label" for="CramSchoolY">
                                <p>補習班</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="CramSchool" value="自學" id="CramSchoolN" />
                                <label class="button-label" for="CramSchoolN">
                                <p>自學</p>
                                </label>
                                <span style="color:#fc0752; display:none" id="have3">&nbsp;&nbsp;此題為必填</span>
                            </div>
                            <br>
                            <div class="title" style="font-size=1.2em; font-weight=400;">推薦用書</div>
                            <?php
                                  if($po['recommendbook']!=''){
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="recommendbook">'.$po['recommendbook'].'</textarea>
                                    ';
                                  }else{
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="recommendbook" placeholder="書名、出版社.."></textarea>
                                    ';
                                  }
                            ?>

                            <br>
                            <div class="title" style="font-size=1.2em; font-weight=400;">其他資源</div>
                            <?php
                                  if($po['recommendbook']!=''){
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="recommendsource" placeholder="推薦網站、課程、練習app等等..">'.$po['recommendsource'].'</textarea>
                                    ';
                                  }else{
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="recommendsource" placeholder="推薦網站、課程、練習app等等.."></textarea>
                                    ';
                                  }
                            ?>
                            <br>
                            <div class="title" style="font-size=1.2em; font-weight=400;">備註</div>
                            <?php
                                  if($po['ps']!=''){
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="ps" placeholder="例如：準備訣竅..等等">'.$po['ps'].'</textarea>
                                    ';
                                  }else{
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px; padding: 5px 10px;" name="ps" placeholder="例如：準備訣竅..等等"></textarea>
                                    ';
                                  }
                            ?>
                            <br>
                            <div class="title" style="font-size=1.2em; font-weight=400;">想說的話</div>
                            <?php
                                  if($po['personalopinion']!=''){
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="personalopinion">'.$po['personalopinion'].'</textarea>
                                    ';
                                  }else{
                                    echo '
                                    <textarea style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;" name="personalopinion"></textarea>
                                    ';
                                  }
                            ?>
                            <br>
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
        /* ===== Logic for creating fake Select Boxes ===== */
        $('.sel').each(function() {
            $(this).children('select').css('display', 'none');

            var $current = $(this);

            $(this).find('option').each(function(i) {
                if (i == 0) {
                    $current.prepend($('<div>', {
                        class: $current.attr('class').replace(/sel/g, 'sel__box')
                    }));

                    var placeholder = $(this).text();
                    $current.prepend($('<span>', {
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

    </script>

</body>

</html>
