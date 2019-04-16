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
    <link rel="stylesheet" href="/newproject/license/share.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function setRequied2() {
            if (document.getElementById("yes").checked != true && document.getElementById("no").checked != true) {
                document.getElementById("have").style.display = "inline";
            } else {
                document.getElementById("have").style.display = "none";
            }
            if (document.getElementById("oralflip").checked != true && document.getElementById("testflip").checked != true && document.getElementById("doingflip").checked != true) {
                document.getElementById("have1").style.display = "inline";
            } else {
                document.getElementById("have1").style.display = "none";
            }
            if (document.getElementById("time1").checked != true && document.getElementById("time2").checked != true && document.getElementById("time3").checked != true && document.getElementById("time4").checked != true) {
                document.getElementById("have2").style.display = "inline";
            } else {
                document.getElementById("have2").style.display = "none";
            }
            if (document.getElementById("CramSchoolY").checked != true && document.getElementById("CramSchoolN").checked != true) {
                document.getElementById("have3").style.display = "inline";
            } else {
                document.getElementById("have3").style.display = "none";
            }

        }
        function setRequired1() {
            if (document.getElementById("yes").checked == true) {
                document.getElementById("oralflip2").setAttribute("required", "required");
                document.getElementById("time11").setAttribute("required", "required");
                if (document.getElementById("oralflip2").checked != true && document.getElementById("testflip2").checked != true && document.getElementById("doingflip2").checked != true) {
                    document.getElementById("have4").style.display = "inline";
                } else {
                    document.getElementById("have4").style.display = "none";
                }
                if (document.getElementById("time11").checked != true && document.getElementById("time12").checked != true && document.getElementById("time13").checked != true && document.getElementById("time14").checked != true) {
                    document.getElementById("have5").style.display = "inline";
                } else {
                    document.getElementById("have5").style.display = "none";
                }
            } else {
                document.getElementById("oralflip2").removeAttribute("required");
                document.getElementById("time11").removeAttribute("required");
            }
        }
        function setRequired(){
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
            if (document.getElementById("testflip2").checked == true) {
                document.getElementById("TQ2").setAttribute("required", "required");
            } else {
                document.getElementById("TQ2").removeAttribute("required");
            }
            if (document.getElementById("oralflip2").checked == true) {
                document.getElementById("OQ2").setAttribute("required", "required");
            } else {
                document.getElementById("OQ2").removeAttribute("required");
            }
            if (document.getElementById("doingflip2").checked == true) {
                document.getElementById("DQ2").setAttribute("required", "required");
            } else {
                document.getElementById("DQ2").removeAttribute("required");
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("form").submit(function() {
                if ($('input:checkbox').filter(':checked').length < 1) {
                    alert("請至少選擇一種報名方式");
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


        $(document).ready(function() {
            $("#yes").click(function() {
                $("#stage2").slideDown("slow");
            });
        });
        $(document).ready(function() {
            $("#no").click(function() {
                $("#stage2").slideUp("slow");
            });
        });
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container-wrap">
                <div class="top-menu">
                    <div class="row">
                        <div class="col-xs-3">
                            <div id="fh5co-logo">證照考取分享</div>
                        </div>
                        <div class="col-xs-9 text-right menu-1">
                            <ul>
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
        <form action="license_submit.php" method="POST">
            <div class="rela-block profile-card">
                <div id="fh5co-services" style="min-height: 800px;">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>證照類別
                                <select class="selectpicker" data-size="10" style="min-width: 15%" name="LicenseTypeSelected" required>
                            <option disabled selected hidden value="">請選擇證照類別</option>
                            <option value="語言">語言</option>
                            <option value="餐飲">餐飲</option>
                            <option value="資訊">資訊</option>
                            <option value="醫療">醫療</option>
                            <option value="金融">金融</option>
                            <option value="救援">救援</option>
                            <option value="其他">其他</option>
                            </select>
                            </div><br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>應考證照 <input type="text" name="licensename" style="min-width: 100px; max-height: 25px;" required></div>
                            <br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試年份
                                <select class="selectpicker" data-size="10" style="width:180px;" name="ExamDate" required>
                            <option disabled selected hidden value="">年份</option>
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
                                <input class="effect-4" type="text" name="signup[]" id="otherWay" style="width:20% ;display:none">
                            </div>
                            <br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>有無複試<span style="color:#fc0752; display:none" id="have">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" name="stageYorN" value="有" id="yes" required onchange="setRequired1()"/>
                                <label class="button-label" for="yes">
                                <p>有</p>
                                </label>
                                <input class="hidden radio-label" type="radio" name="stageYorN" value="無" id="no" onchange="setRequired1()"/>
                                <label class="button-label" for="no">
                                <p>無</p>
                                </label>
                            </div>
                            <br>
                            <div class="hi">
                                <h4><span style="color:#fc0752; font-size:14px">*&nbsp;</span>第一階段<span style="color:#fc0752; display:none; font-size:14px" id="have1">&nbsp;&nbsp;此題為必填</span></h4>

                                <input class="hidden radio-label" type="radio" name="ExamType01" value="口試" id="oralflip" / required onchange="setRequired()">
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
                                    <div class="row">
                                        <div class="col-3">
                                            <input id="OQ1" class="effect-4" type="text" name="oralquestion011" placeholder="可填寫題型、類別或難易度等等..">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex hide-on-small" id="textpanel" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <input id="TQ1" class="effect-4" type="text" name="textquestion011" placeholder="旅遊類、時事類題型等等...">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex hide-on-small" id="doingpanel" style="display:none;">
                                <div class="hii">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <input id="DQ1" class="effect-4" type="text" name="practicequestion011" placeholder="主題、題目等等...">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div id="stage2" style="display: none;">
                                <div class="hi">
                                    <h4><span style="color:#fc0752; font-size:14px">*&nbsp;</span>第二階段<span style="color:#fc0752; display:none; font-size:14px" id="have4">&nbsp;&nbsp;此題為必填</span></h4>
                                    <input class="hidden radio-label" type="radio" name="ExamType02" value="口試" id="oralflip2" onchange="setRequired()" />
                                    <label class="button-label" for="oralflip2">
                                <p>口試</p>
                                </label>
                                    <input class="hidden radio-label" type="radio" name="ExamType02" value="筆試" id="testflip2" onchange="setRequired()" />
                                    <label class="button-label" for="testflip2">
                                <p>筆試</p>
                                </label>
                                    <input class="hidden radio-label" type="radio" name="ExamType02" value="實作" id="doingflip2" onchange="setRequired()" />
                                    <label class="button-label" for="doingflip2">
                                <p>實作<p>
                                </label>
                                </div>
                                <br>
                                <div class="hi">
                                    <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試時間長度<span style="color:#fc0752; display:none" id="have5">&nbsp;&nbsp;此題為必填</span></div>
                                    <input class="hidden radio-label" type="radio" name="testTime2" value="30分鐘以下" id="time11"/>
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
                                        <div class="row">
                                            <div class="col-3">
                                                <input id="OQ2" class="effect-4" type="text" name="oralquestion021" placeholder="可填寫題型、類別或難易度等等..">
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex hide-on-small" id="textpanel2" style="display:none;">
                                    <div class="hii">
                                        <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                        <div class="row">
                                            <div class="col-3">
                                                <input id="TQ2" class="effect-4" type="text" name="textquestion021" placeholder="旅遊類、時事類題型等等...">
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex hide-on-small" id="doingpanel2" style="display:none;">
                                    <div class="hii">
                                        <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>考試題型</div>
                                        <div class="row">
                                            <div class="col-3">
                                                <input id="DQ2" class="effect-4" type="text" name="practicequestion021" placeholder="主題、題目等等...">
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="style9">
                            <br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>準備時間:&nbsp;從&nbsp;
                                <input type="text" style="width:50px;height:25px" name="preparedtime" required>&nbsp;個月前開始，平均一周&nbsp;<input type="text" style="width:50px;height:25px" name="preparedhour" required>&nbsp;小時 </div>
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
                            <div class="titles">推薦用書</div>
                            <textarea style="width:100% ;height:100px; border-color:#2ECC71;" name="recommendbook" placeholder="書名、出版社.."></textarea>
                            <br>
                            <div class="titles">其他資源</div>
                            <textarea style="width:100% ;height:100px; border-color:#2ECC71;" name="recommendsource" placeholder="推薦網站、課程、練習app等等.."></textarea>
                            <br>
                            <div class="titles">備註</div>
                            <textarea style="width:100% ;height:100px; border-color:#2ECC71;" name="ps" placeholder="例如：準備訣竅..等等"></textarea>
                            <br>
                            <div class="titles">想說的話:</div>
                            <textarea style="width:100% ;height:100px; border-color:#2ECC71;" name="personalopinion"></textarea>
                            <br>

                            <input class="btn" type="submit" value="Submit" onclick="setRequied2()" />
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



</body>

</html>
