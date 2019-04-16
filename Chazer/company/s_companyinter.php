<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chazer &mdash;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- Facebook and Twitter integration -->
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
    <link rel="stylesheet" href="css/profile.css">

    <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/smart-searchbar.css">
    <!-- <link rel="stylesheet" href="CompanyInterview/css/test.css"> -->



    <!-- Animate.css -->


    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/school-2.css">

    <link rel="stylesheet" href="share.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
    <script>
        $(document).ready(function() {
            $("form").submit(function() {
                if (document.getElementById("interview").checked == true) {
                    if ($("input[name='interviewlevel[]']:checked").length == 0) {
                        $('html,body').animate({
                            scrollTop: $('#have6').offset().top
                        }, 600);
                        alert("請至少選擇一個面試類型 出現的階段 ");
                        return false;
                    }
                }
                if (document.getElementById("test").checked == true) {
                    if ($("input[name='testlevel[]']:checked").length == 0) {
                        $('html,body').animate({
                            scrollTop: $('#have9').offset().top
                        }, 600);
                        alert("請至少選擇一個筆試類型 出現的階段 ");
                        return false;
                    } 
                    if ($("input[name='testQType[]']:checked").length == 0) {
                        $('html,body').animate({
                            scrollTop: $('#have11').offset().top
                        }, 600);
                        alert("請至少選擇一個 筆試題型 ");
                        return false;
                    } 
                    
                }
            });
        });
    </script>
    <script>
        function setRequired() {
            if (document.getElementById("portfolioY").checked != true && document.getElementById("portfolioN").checked != true) {
                document.getElementById("have2").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have2').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have2").style.display = "none";
            }
            if (document.getElementById("certificationY").checked != true && document.getElementById("certificationN").checked != true) {
                document.getElementById("have3").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have3').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have3").style.display = "none";
            }
            if (document.getElementById("interview").checked != true && document.getElementById("test").checked != true && document.getElementById("other").checked != true) {
                document.getElementById("have1").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have1').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have1").style.display = "none";
            }

            if (document.getElementById("in").checked != true && document.getElementById("waiting").checked != true && document.getElementById("no_in").checked != true) {
                document.getElementById("have4").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have4').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have4").style.display = "none";
            }

            if (document.getElementById("oneweek").checked != true && document.getElementById("twoweeks").checked != true && document.getElementById("onemonth").checked != true && document.getElementById("twomonth").checked != true) {
                document.getElementById("have5").style.display = "inline";
                $('html,body').animate({
                    scrollTop: $('#have5').offset().top
                }, 600);
                return false;
            } else {
                document.getElementById("have5").style.display = "none";
            }
            if (document.getElementById("interview").checked == true) {
                document.getElementById("interviewernumber").setAttribute("required", "required");
                document.getElementById("1p").setAttribute("required", "required");
                if (document.getElementById("1p").checked != true && document.getElementById("group").checked != true) {
                    document.getElementById("have7").style.display = "block";
                    $('html,body').animate({
                        scrollTop: $('#have7').offset().top
                    }, 600);
                    return false;
                } else {
                    document.getElementById("have7").style.display = "none";
                }
                document.getElementById("20min").setAttribute("required", "required");
                if (document.getElementById("20min").checked != true && document.getElementById("20to40").checked != true && document.getElementById("40to60").checked != true && document.getElementById("60min").checked != true) {
                    document.getElementById("have8").style.display = "block";
                    $('html,body').animate({
                        scrollTop: $('#have8').offset().top
                    }, 600);
                    return false;
                } else {
                    document.getElementById("have8").style.display = "none";
                }
                document.getElementById("interviewQ1").setAttribute("required", "required");
            } else {
                document.getElementById("interviewernumber").removeAttribute("required");
                document.getElementById("1p").removeAttribute("required");
                document.getElementById("20min").removeAttribute("required");
                document.getElementById("interviewQ1").removeAttribute("required");
            }

            if (document.getElementById("test").checked == true) {
                document.getElementById("1hour").setAttribute("required", "required");
                if (document.getElementById("1hour").checked != true && document.getElementById("2hours").checked != true && document.getElementById("3hours").checked != true && document.getElementById("over3hours").checked != true) {
                    document.getElementById("have10").style.display = "block";
                    $('html,body').animate({
                        scrollTop: $('#have10').offset().top
                    }, 600);
                    return false;
                } else {
                    document.getElementById("have10").style.display = "none";
                }
                document.getElementById("have12").setAttribute("required", "required");
            } else {
                document.getElementById("1hour").removeAttribute("required");
                document.getElementById("have12").removeAttribute("required");
            }
            if (document.getElementById("other").checked == true) {
                document.getElementById("have13").setAttribute("required", "required");
            }else{
                document.getElementById("have13").removeAttribute("required");
            }

        }

        function setRequired1() {
            if (document.getElementById("portfolioY").checked == true) {
                document.getElementById("portfoliocontent").setAttribute("required", "required");
            } else {
                document.getElementById("portfoliocontent").removeAttribute("required");
            }
        }

        function setRequired2() {
            if (document.getElementById("certificationY").checked == true) {
                document.getElementById("certificationcontent").setAttribute("required", "required");
            } else {
                document.getElementById("certificationcontent").removeAttribute("required");
            }
        }
    </script>
    <style type="text/css">
        .titles{
            color: black;
            font-size: 1em;
        }
        .title{
            color: black;
            font-size: 18px;
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
                            <div id="fh5co-logo"><a href="/newproject/index.php">公司面試分享</a></div>
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
                  echo '  <li class="has-dropdown">
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
        <form action="Submitcompany.php" method="post">
            <div class="rela-block profile-card">
                <div id="fh5co-services" style="min-height: 800px;">
                    <div class="row">
                        <div class="col-md-1" style="float: left;"></div>
                        <div class="col-md-10">


                            <div class="search-box">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>公司名稱</div>
                                <input type="text" autocomplete="off" name="CompanyNameSelected" placeholder="Search company..." required style="border: none; border-bottom: 2px solid #ebedef; width: 400px; height: 50px;">
                                <div class="result"></div>
                            </div>
                            <br><br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>應徵部門</div>
                            <input type="text" name="applydepartment" style="border: none; border-bottom: 2px solid #ebedef; width: 400px;padding: 5px 10px;" placeholder="公關、行銷" required>
                            <br><br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>面試年分
                            <select class="selectpicker" data-size="10" style="min-width: 15%" name="interviewDate" id="datepicker" required>
                                <option disabled selected hidden value="">請選擇面試時間</option>
                                  <?php

                  for($i=1999;$i<date("Y")+1;$i++){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                  }

                  ?>
                                </select></div>
                            <br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>作品集要求<span style="color:#fc0752; display:none" id="have2">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" id="portfolioY" name="portfolio" value="是" onchange="setRequired1()" required>
                                <label class="button-label" for="portfolioY">
                                <p>是</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="portfolioN" name="portfolio" value="否" onchange="setRequired1()">
                                <label class="button-label" for="portfolioN">
                                <p>否</p>
                                </label><br>

                                <div class="hey" id="portfoliopanel" style="display:none;"><br>
                                    <p style="color: #333;"><span style="color:#fc0752;">*&nbsp;</span>麻煩請簡單分享作品集內容</p>                               
                                    <input id="portfoliocontent" type="text" name="portcontent" style="border: none; border-bottom: 2px solid #ebedef; width: 700px; padding: 5px 10px;" placeholder="eg.至少五件自己設計的logo作品" required></div>
                            </div>
                            <br>

                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>證照要求<span style="color:#fc0752; display:none" id="have3">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" id="certificationY" name="certification" value="是" onchange="setRequired2()" required>
                                <label class="button-label" for="certificationY">
                                <p>是</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="certificationN" name="certification" value="否" onchange="setRequired2()">
                                <label class="button-label" for="certificationN">
                                <p>否</p>
                                </label><br>
                                <div class="hey" id="certificationpanel" style="display:none;"><br>
                                    <p style="color: #333;"><span style="color:#fc0752;">*&nbsp;</span>麻煩請簡單闡述所需證照</p>
                                    <input id="certificationcontent" type="text" name="certificationex" style="border: none; border-bottom: 2px solid #ebedef; width: 700px; padding: 5px 10px;" placeholder="eg.國際金融證照，認證理財規劃顧問(CFP)" required>
                                    </div>
                            </div>
                            <br>
                            <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>請選擇有哪些面試方式&nbsp;&nbsp;<sub id="have1" style="color:#fc0752; display:none;">至少選擇一種</sub></div>
                            <br>
                            <input class="hidden radio-label" type="checkbox" id="interview" name="interview" value="面試">
                            <label class="button-label" for="interview">
                            <p>面試</p>
                            </label>
                            <div class="flex hide-on-small" id="interviewpanel" style="display: none;"><br>

                                <div class="hi">
                                    <div class="titles"><span id="have6" style="color:#fc0752; font-size:14px">*&nbsp;</span>請問面試在第幾階段呢? <sub>有的階段都勾選</sub></div>
                                    <input class="hidden radio-label" type="checkbox" id="interview1" name="interviewlevel[]" value="一">
                                    <label class="button-label" for="interview1">第一</label>

                                    <input class="hidden radio-label" type="checkbox" id="interview2" name="interviewlevel[]" value="二">
                                    <label class="button-label" for="interview2">第二</label>

                                    <input class="hidden radio-label" type="checkbox" id="interview3" name="interviewlevel[]" value="三">
                                    <label class="button-label" for="interview3">第三</label>

                                    <input class="hidden radio-label" type="checkbox" id="interview4" name="interviewlevel[]" value="四">
                                    <label class="button-label" for="interview4">第四</label>

                                    <input class="hidden radio-label" type="checkbox" id="interview5" name="interviewlevel[]" value="五">
                                    <label class="button-label" for="interview5">第五</label>

                                    <input class="hidden radio-label" type="checkbox" id="interview6" name="interviewlevel[]" value="六">
                                    <label class="button-label" for="interview6">第六</label>
                                </div>
                                <br>
                                <div class="titles"><span style="color:#fc0752; font-size:14px">*&nbsp;</span>面試官人數 &shy;
                                    <input id="interviewernumber" type="number" name="interviewerNumber" min="1" max="10">
                                </div><br>
                                <div class="hi">
                                    <div class="titles"><span style="color:#fc0752; font-size:14px">*&nbsp;</span>面試類型<span style="color:#fc0752; display:none" id="have7">&nbsp;&nbsp;此題為必填</span></div>
                                    <input class="hidden radio-label" type="radio" name="intervieweeNumber" id="1p" value="個人">
                                    <label class="button-label" for="1p">
                                    <p>個人</p></label>
                                    <input class="hidden radio-label" type="radio" id="group" name="intervieweeNumber" id="group" value="團體">
                                    <label class="button-label" for="group">
                                    <p>團體</p></label>
                                </div><br>

                                <div class="hi">
                                    <div class="titles"><span style="color:#fc0752; font-size:14px">*&nbsp;</span>面試平均時間<span style="color:#fc0752; display:none" id="have8">&nbsp;&nbsp;此題為必填</span></div>
                                    <input class="hidden radio-label" type="radio" name="interviewDuration" value="20分鐘以內" id="20min"> <label class="button-label" for="20min">
                                    <p>20分鐘</p></label>
                                    <input class="hidden radio-label" type="radio" name="interviewDuration" value="20~40分鐘" id="20to40"> <label class="button-label" for="20to40">
                                    <p>20~40分鐘</p></label>
                                    <input class="hidden radio-label" type="radio" name="interviewDuration" value="40~60分鐘" id="40to60"> <label class="button-label" for="40to60">
                                    <p>40~60分鐘</p></label>
                                    <input class="hidden radio-label" type="radio" name="interviewDuration" value="60分鐘以上" id="60min">
                                    <label class="button-label" for="60min">
                                    <p>60分鐘以上</p></label>
                                </div>
                                <br>
                                <div class="titles">&nbsp;&nbsp;服裝要求</div>
                                <input type="text" style="border: none; border-bottom: 2px solid #ebedef; width: 400px; padding: 5px 10px;">
                                <br><br>
                                <div class="titles"><span style="color:#fc0752; font-size:14px">*&nbsp;</span>面試問題</div>
                                <div class="row">
                                    <div class="col-3">
                                        <textarea id="interviewQ1" rows="2" name="interviewQ1" v-model="vote" placeholder="eg.你認為你可以帶給我們公司甚麼改變?" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>

                                    </div>
                                    <div class="col-1" style="padding-top: 20px; padding-left:10px;">
                                        <div class="addq" id="interviewAdd1">
                                            <a href="#0" class="bttn">+</a></div>
                                    </div>
                                    <div class="col-1">
                                        <div class="addq" id="interviewMin1" style="padding-top: 20px;">
                                            <a href="#0" class="bttn">-</a></div>
                                    </div>
                                </div>
                                <div class="titles">&nbsp;&nbsp;回答</div>
                                <div class="row">
                                    <div class="col-3">
                                        <textarea rows="2" name="interviewA1" v-model="vote" placeholder="eg.我可以運用我所學的大數據....." style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div id="QA1" style="display:none;">
                                    <div class="titles">&nbsp;&nbsp;面試問題</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="interviewQ2" v-model="vote" placeholder="eg.你認為你可以帶給我們公司甚麼改變?" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                        <div class="col-1" style="padding-top: 20px; padding-left: 10px;">
                                            <div class="addq" id="interviewAdd2">
                                                <a href="#0" class="bttn">+</a></div>
                                        </div>
                                        <div class="col-1">
                                            <div class="addq" id="interviewMin2" style="padding-top: 20px;">
                                                <a href="#0" class="bttn">-</a></div>

                                        </div>
                                    </div>
                                    <div class="titles">&nbsp;&nbsp;回答</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="interviewA2" v-model="vote" placeholder="eg.我可以運用我所學的大數據....." style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="QA2" style="display: none;">
                                    <div class="titles">&nbsp;&nbsp;面試問題</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="interviewQ3" v-model="vote" placeholder="eg.你認為你可以帶給我們公司甚麼改變?" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                        <div class="col-1" style="padding-top: 20px; padding-left: 10px;">
                                            <div class="addq" id="interviewAdd3">
                                                <a href="#0" class="bttn">+</a></div>
                                        </div>
                                        <div class="col-1">
                                            <div class="addq" id="interviewMin3" style="padding-top: 20px;">
                                                <a href="#0" class="bttn">-</a></div>

                                        </div>
                                    </div>
                                    <div class="titles">&nbsp;&nbsp;回答</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="interviewA3" v-model="vote" placeholder="eg.我可以運用我所學的大數據....." style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="QA3" style="display: none;">
                                    <div class="titles">&nbsp;&nbsp;面試問題</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="interviewQ4" v-model="vote" placeholder="eg.你認為你可以帶給我們公司甚麼改變?" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="titles">&nbsp;&nbsp;回答</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="interviewA4" v-model="vote" placeholder="eg.我可以運用我所學的大數據....." style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="style9">
                            <input class="hidden radio-label" type="checkbox" id="test" name="test" value="筆試">
                            <label class="button-label" for="test">
                            <p>筆試</p>
                            </label>
                            <br><br>
                            <div id="testpanel" style="display: none;">
                                <div class="hi">
                                    <div class="titles"><span id="have9" style="color:#fc0752; font-size:14px">*&nbsp;</span>請問筆試在第幾階段呢? <sub>有的階段都勾選</sub></div>
                                    <input class="hidden radio-label" type="checkbox" id="test1" name="testlevel[]" value="一" data-rule="">
                                    <label class="button-label" for="test1">第一</label>

                                    <input class="hidden radio-label" type="checkbox" id="test2" name="testlevel[]" value="二">
                                    <label class="button-label" for="test2">第二</label>

                                    <input class="hidden radio-label" type="checkbox" id="test3" name="testlevel[]" value="三">
                                    <label class="button-label" for="test3">第三</label>

                                    <input class="hidden radio-label" type="checkbox" id="test4" name="testlevel[]" value="四">
                                    <label class="button-label" for="test4">第四</label>

                                    <input class="hidden radio-label" type="checkbox" id="test5" name="testlevel[]" value="五">
                                    <label class="button-label" for="test5">第五</label>

                                    <input class="hidden radio-label" type="checkbox" id="test6" name="testlevel[]" value="六">
                                    <label class="button-label" for="test6">第六</label>
                                </div>
                                <br>
                                <div class="hi">
                                    <div class="titles"><span style="color:#fc0752; font-size:14px">*&nbsp;</span>筆試平均時間<span style="color:#fc0752; display:none" id="have10">&nbsp;&nbsp;此題為必填</span></div>
                                    <input class="hidden radio-label" type="radio" name="testDuration" value="1小時以內" id="1hour"> <label class="button-label" for="1hour">
                                    <p>1小時以內</p></label>
                                    <input class="hidden radio-label" type="radio" name="testDuration" value="2小時以內" id="2hours"> <label class="button-label" for="2hours">
                                    <p>2小時以內</p></label>
                                    <input class="hidden radio-label" type="radio" name="testDuration" value="3小時以內" id="3hours"> <label class="button-label" for="3hours">
                                    <p>3小時以內</p></label>
                                    <input class="hidden radio-label" type="radio" name="testDuration" value="3小時以上" id="over3hours">
                                    <label class="button-label" for="over3hours">
                                    <p>3小時以上</p></label>
                                </div><br>
                                <div class="hi">
                                    <div class="titles"><span id="have11" style="color:#fc0752; font-size:14px">*&nbsp;</span>筆試題型</div>
                                    <input class="hidden radio-label" type="checkbox" id="testType1" name="testQType[]" value="單選題">
                                    <label class="button-label" for="testType1">單選</label>

                                    <input class="hidden radio-label" type="checkbox" id="testType2" name="testQType[]" value="複選題">
                                    <label class="button-label" for="testType2">複選</label>

                                    <input class="hidden radio-label" type="checkbox" id="testType3" name="testQType[]" value="填空題">
                                    <label class="button-label" for="testType3">填空</label>

                                    <input class="hidden radio-label" type="checkbox" id="testType4" name="testQType[]" value="簡答題">
                                    <label class="button-label" for="testType4">簡答</label>

                                    <input class="hidden radio-label" type="checkbox" id="testType5" name="testQType[]" value="申論題">
                                    <label class="button-label" for="testType5">申論</label>
                                </div><br>

                                <div class="titles"><span style="color:#fc0752; font-size:14px">*&nbsp;</span>問題<span style="color:#fc0752; display:none">&nbsp;&nbsp;此題為必填</span></div>
                                <div class="row">
                                    <div class="col-3">
                                        <textarea id="have12" rows="2" name="testexample1" v-model="vote" placeholder="eg.邏輯題：(大概描述一下題目)" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                    </div>
                                    <div class="col-1" style="padding-top: 20px; padding-left: 10px;">
                                        <div class="addq" id="testAdd1">
                                            <a href="#0" class="bttn">+</a></div>
                                    </div>
                                    <div class="col-1">
                                        <div class="addq" id="testMin1" style="padding-top: 20px;">
                                            <a href="#0" class="bttn">-</a></div>
                                    </div>
                                </div>
                                <div class="titles">&nbsp;&nbsp;回答</div>
                                <div class="row">
                                    <div class="col-3">
                                        <textarea rows="2" name="testA1" v-model="vote" placeholder="你的回答或選項" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                    </div>
                                </div>
                                <div id="TQA1" style="display: none;">
                                    <div class="titles">&nbsp;&nbsp;問題</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="testexample2" v-model="vote" placeholder="eg.邏輯題：(大概描述一下題目)" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                        <div class="col-1" style="padding-top: 20px; padding-left: 10px;">
                                            <div class="addq" id="testAdd2">
                                                <a href="#0" class="bttn">+</a></div>
                                        </div>
                                        <div class="col-1">
                                            <div class="addq" id="testMin2" style="padding-top: 20px;">
                                                <a href="#0" class="bttn">-</a></div>

                                        </div>
                                    </div>
                                    <div class="titles">&nbsp;&nbsp;回答</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="testA2" v-model="vote" placeholder="你的回答或選項" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="TQA2" style="display: none;">
                                    <div class="titles">&nbsp;&nbsp;問題</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="testexample3" v-model="vote" placeholder="eg.邏輯題：(大概描述一下題目)" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                        <div class="col-1" style="padding-top: 20px; padding-left: 10px;">
                                            <div class="addq" id="testAdd3">
                                                <a href="#0" class="bttn">+</a></div>
                                        </div>
                                        <div class="col-1">
                                            <div class="addq" id="testMin3" style="padding-top: 20px;">
                                                <a href="#0" class="bttn">-</a></div>

                                        </div>
                                    </div>
                                    <div class="titles">&nbsp;&nbsp;回答</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="testA3" v-model="vote" placeholder="你的回答或選項" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="TQA3" style="display: none;">
                                    <div class="titles">&nbsp;&nbsp;問題</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="testexample4" v-model="vote" placeholder="eg.邏輯題：(大概描述一下題目)" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="titles">&nbsp;&nbsp;回答</div>
                                    <div class="row">
                                        <div class="col-3">
                                            <textarea rows="2" name="testA4" v-model="vote" placeholder="你的回答或選項" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="style9">
                            <input class="hidden radio-label" type="checkbox" id="other" name="other" value="其他">
                            <label class="button-label" for="other">
                            <p>其他</p>
                            </label>
                            <div id="otherpanel" style="display:none;">
                                <div class="row" style="padding-bottom: 0;">
                                    <div class="col-3">
                                        <p style="color: #333;"><span style="color:#fc0752;">*&nbsp;</span>麻煩請簡單描述其他面試方式</p><textarea id="have13" rows="2" name="reother" v-model="vote" placeholder="其他沒提到的方式" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>是否有錄取<span style="color:#fc0752; display:none" id="have4">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" id="in" name="Admitted" value="錄取" required>
                                <label class="button-label" for="in">
                                <p>錄取</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="no_in" name="Admitted" value="無">
                                <label class="button-label" for="no_in">
                                <p>無</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="waiting" name="Admitted" value="等待中">
                                <label class="button-label" for="waiting">
                                <p>等待中</p>
                                </label>
                                <br>
                            </div>
                            <br>
                            <div class="hi">
                                <div class="titles"><span style="color:#fc0752;">*&nbsp;</span>公布錄取時間<span style="color:#fc0752; display:none" id="have5">&nbsp;&nbsp;此題為必填</span></div>
                                <input class="hidden radio-label" type="radio" id="oneweek" name="admitiontime" value="一周內" required>
                                <label class="button-label" for="oneweek">
                                <p>一周內</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="twoweeks" name="admitiontime" value="兩周內">
                                <label class="button-label" for="twoweeks">
                                <p>兩周內</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="onemonth" name="admitiontime" value="一個月內">
                                <label class="button-label" for="onemonth">
                                <p>一個月內</p>
                                </label>
                                <input class="hidden radio-label" type="radio" id="twomonth" name="admitiontime" value="兩個月內">
                                <label class="button-label" for="twomonth">
                                <p>兩個月內</p>
                                </label>
                            </div>
                            <br>
                            <div class="title">個人經驗分享</div>
                            <br>
                            <textarea name="experienceshare" placeholder="還有甚麼撇步想分享給大家eg.盡量要提出問題問主考官" rows="2" style="width:100% ;height:100px; border-color:#7e7c7c; padding: 5px 10px;"></textarea>
                            <br><br>
                            <button class="button button--secondary" type="submit" value="Submit" onclick="setRequired()" style="border: none;">
              <span class="button__inner" style="font-family:'Open Sans', sans-serif; font-weight: normal;">Submit</span>
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

    <!-- <script>
  $(function() {
    $('a').click(function() {
      $(this).addClass('active').siblings().removeClass('active');
    });
  });

  </script> -->
    <!--   <script>
        $(function(){
        $("#datepicker").datepicker();
      });
  </script> -->
    <script>
        $("#portfolioY").click(function() {
            $("#portfoliopanel").show();
        });
        $("#portfolioN").click(function() {
            $("#portfoliopanel").hide();
        });
        $("#certificationY").click(function() {
            $("#certificationpanel").show();
        });
        $("#certificationN").click(function() {
            $("#certificationpanel").hide();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#interview").click(function() {
                $("#interviewpanel").slideToggle("slow");
                $("#QA1").slideUp("slow");
                $("#QA2").slideUp("slow");
                $("#QA3").slideUp("slow");
            });
        });

        $(document).ready(function() {
            $("#interviewAdd1").click(function() {
                $("#QA1").slideDown("slow");
                // $("#QA2").slideUp("slow");
                // $("#QA3").slideUp("slow");
            });
        });
        $(document).ready(function() {
            $("#interviewMin1").click(function() {
                $("#QA1").slideUp("slow");
                $("#QA2").slideUp("slow");
                $("#QA3").slideUp("slow");
            });
        });

        $(document).ready(function() {
            $("#interviewAdd2").click(function() {
                $("#QA2").slideDown("slow");
                // $("#QA3").slideUp("slow");
            });
        });


        $(document).ready(function() {
            $("#interviewMin2").click(function() {
                $("#QA2").slideUp("slow");
                $("#QA3").slideUp("slow");
            });
        });

        $(document).ready(function() {
            $("#interviewAdd3").click(function() {
                $("#QA3").slideDown("slow");
            });
        });

        $(document).ready(function() {
            $("#interviewMin3").click(function() {
                $("#QA3").slideUp("slow");
            });
        });

        $(document).ready(function() {
            $("#test").click(function() {
                $("#testpanel").slideToggle("slow");
                $("#TQA1").slideUp("slow");
                $("#TQA2").slideUp("slow");
                $("#TQA3").slideUp("slow");
            });
        });

        $(document).ready(function() {
            $("#other").click(function() {
                $("#otherpanel").slideToggle("slow");
                $("#QA2").slideUp("slow");
                $("#QA3").slideUp("slow");
                $("#TQA1").slideUp("slow");
                $("#TQA2").slideUp("slow");
                $("#TQA3").slideUp("slow");
            });
        });


        $(document).ready(function() {
            $("#testAdd1").click(function() {
                $("#TQA1").slideDown("slow");
                // $("#TQA2").slideUp("slow");
                // $("#TQA3").slideUp("slow");

            });
        });
        $(document).ready(function() {
            $("#testMin1").click(function() {
                $("#TQA1").slideUp("slow");
                $("#TQA2").slideUp("slow");
                $("#TQA3").slideUp("slow");

            });
        });

        $(document).ready(function() {
            $("#testAdd2").click(function() {
                $("#TQA2").slideDown("slow");
                // $("#TQA3").slideUp("slow");

            });
        });
        $(document).ready(function() {
            $("#testMin2").click(function() {
                $("#TQA2").slideUp("slow");
                $("#TQA3").slideUp("slow");

            });
        });

        $(document).ready(function() {
            $("#testAdd3").click(function() {
                $("#TQA3").slideDown("slow");

            });
        });

        $(document).ready(function() {
            $("#testMin3").click(function() {
                $("#TQA3").slideUp("slow");

            });
        });
    </script>


</body>

</html>