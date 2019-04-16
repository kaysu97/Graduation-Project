<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Neat &mdash;</title>
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
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container-wrap">
                <div class="top-menu">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="index.html">Neat</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="share_1.html">Share</a></li>
                                <li class="has-dropdown active">
                                    <a href="#">Service</a>
                                    <ul class="dropdown">
                                        <li>School</li>
                                        <li><a href="/newproject/workingspace/workingspace-1.php">Working Space</a></li>
                                        <li><a href="/newproject/workingspace/workingspace-1.php">Working Space</a></li>
                                        <li><a href="#">for Work</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </div>
                        <div class="container">
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
                        <div class="col-md-2 col-sm-1">
                            <div class="card" style="margin-left:0;">
                                <div class="p" style="width: 150px; height: 120px; font-size: 30px; color: black; text-align: center; border: 3px solid black; padding-top: 30px;">
                                    醫療
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4" style="margin-left: 100px;">
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0; padding-top: 60px; letter-spacing: 2px;">文章編號 5</div>
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;">(證照名稱)</div>
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;　">應考年度 () 年</div>
                        </div>
                        <div class="col-md-3 col-sm-4"></div>
                        <div class="col-md-2 col-sm-2" style="padding-top: 40px; float: right;">
                            <table>
                                <tr>
                                    <td>
                                        <p style="white-space:nowrap; padding-top: 10px;">發表時間 2018/02/12</p>
                                    </td>
                                    <td>
                                      <?php
                                      $id = $_REQUEST['id'];
                                      $email = $_SESSION['email'];
                                      $sql = mysqli_query($conn,"SELECT * FROM favorite WHERE email = '$email' AND articleid='$id'");

                                      if(mysqli_num_rows($sql)>0){
                                        echo '<input type="checkbox" id="checkbox" checked=true />  <label for="checkbox">
                                            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg"><g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)"><path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/><circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/><g id="grp7" opacity="0" transform="translate(7 6)"><circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/><circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/></g><g id="grp6" opacity="0" transform="translate(0 28)"><circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/><circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/></g><g id="grp3" opacity="0" transform="translate(52 28)"><circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/><circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/></g><g id="grp2" opacity="0" transform="translate(44 6)" fill="#CC8EF5"><circle id="oval2" transform="matrix(-1 0 0 1 10 0)" cx="5" cy="6" r="2"/><circle id="oval1" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp5" opacity="0" transform="translate(14 50)" fill="#91D2FA"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp4" opacity="0" transform="translate(35 50)" fill="#F48EA7"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp1" opacity="0" transform="translate(24)" fill="#9FC7FA"><circle id="oval1" cx="2.5" cy="3" r="2"/><circle id="oval2" cx="7.5" cy="2" r="2"/></g></g></svg>
                                          </label>';
                                      }else{
                                        echo '<input type="checkbox" id="checkbox" />  <label for="checkbox">
                                            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg"><g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)"><path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/><circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/><g id="grp7" opacity="0" transform="translate(7 6)"><circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/><circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/></g><g id="grp6" opacity="0" transform="translate(0 28)"><circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/><circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/></g><g id="grp3" opacity="0" transform="translate(52 28)"><circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/><circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/></g><g id="grp2" opacity="0" transform="translate(44 6)" fill="#CC8EF5"><circle id="oval2" transform="matrix(-1 0 0 1 10 0)" cx="5" cy="6" r="2"/><circle id="oval1" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp5" opacity="0" transform="translate(14 50)" fill="#91D2FA"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp4" opacity="0" transform="translate(35 50)" fill="#F48EA7"><circle id="oval1" transform="matrix(-1 0 0 1 12 0)" cx="6" cy="5" r="2"/><circle id="oval2" transform="matrix(-1 0 0 1 4 0)" cx="2" cy="2" r="2"/></g><g id="grp1" opacity="0" transform="translate(24)" fill="#9FC7FA"><circle id="oval1" cx="2.5" cy="3" r="2"/><circle id="oval2" cx="7.5" cy="2" r="2"/></g></g></svg>
                                          </label>';
                                      }
                                      ?>
                                    </td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1" style="width:8.33%; float: left;"></div>
                <div class="col-md-10" style="padding-left: 0px;">
                    <table style="width: 100%;">
                        <tr>
                            <td rowspan="2" style="background-color: #f6f6f6; border-right: 30px solid white; width: 25%;">
                                <div class="row">
                                    <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">報名方式</div>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;">線上表單</div>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;">&nbsp;&nbsp;&nbsp;&nbsp;郵寄</div>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 0;letter-spacing: 2px;">&nbsp;&nbsp;&nbsp;&nbsp;email報名</div>
                                    <br><br>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">&nbsp;&nbsp;&nbsp;準備時間</div>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding: 5px 0;letter-spacing: 2px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;從兩個月前開始</div>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1em;color: #333; padding: 5px 0;letter-spacing: 2px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平均一週5小時</div>
                                    <br><br>
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;">&nbsp;&nbsp;&nbsp;上補習班 在家自學</div>
                                </div>
                            </td>
                            <td colspan="2" style="background-color: #f6f6f6; border-bottom: 30px solid white; width: 75%;">
                                <div class="row">
               <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                               <div class="col-md-10" style="background-color: #f6f6f6; padding: 30px 20px;">
                    <div class="row" style="padding-bottom: 0px;">
                        <div class="col-md-4" style="margin:0px auto; color: black;!important">
                            <div class="word">
                                <span>S</span>
                                <span>T</span>
                                <span>A</span>
                                <span>G</span>
                                <span>E</span>
                                <span>1</span>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top: 0px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333;letter-spacing: 2px;text-align: right;">
                                        口試
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;text-align: center;">
                                        面試時間 30 分鐘
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 15px; padding-top: 50px; letter-spacing: 2px;">
                            口試內容補充
                        </div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 15px;letter-spacing: 2px;">
                            A：他問我怕不怕血。
                        </div>
                        </div>

                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background-color: #f6f6f6; width: 75%;">
                                <div class="row">
               <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                               <div class="col-md-10" style="background-color: #f6f6f6; padding: 30px 20px;">
                    <div class="row" style="padding-bottom: 0px;">
                        <div class="col-md-4" style="margin:0px auto; color: black;!important">
                            <div class="word">
                                <span>S</span>
                                <span>T</span>
                                <span>A</span>
                                <span>G</span>
                                <span>E</span>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top: 0px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333; padding: 5px 0;letter-spacing: 2px;text-align: right;">
                                        筆試
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.5em;color: #333; padding: 5px 0;letter-spacing: 2px;text-align: center;">
                                        筆試時間 50 分鐘
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 15px; padding-top: 50px; letter-spacing: 2px;">
                            題目類型
                        </div>
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding: 5px 15px;letter-spacing: 2px;">
                            A：有打針題
                        </div>
                        </div>
                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="row" style="padding-bottom: 10px; padding-top: 10px;">
                <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                <div class="col-md-10" style="background-color: #f6f6f6; padding: 30px 20px;">
                    <div class="row">
                        <div class="col-md-2" style="margin:0px auto; color: black;!important">
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333;letter-spacing: 2px;text-align: right;">
                                        推薦用書
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                       <div class="col-md-10">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 30px;letter-spacing: 2px;">
                            A：如何當醫生</div>
                    </div>
                    </div>
                    <hr style="border:0.5px dashed black" width="97%">
                    <div class="row">
                        <div class="col-md-2" style="margin:0px auto; color: black;!important">
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333;letter-spacing: 2px;text-align: right; padding-bottom: 30px;">其他資源</div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                       <div class="col-md-10">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 30px;letter-spacing: 2px;">
                            A：多去看醫生</div>
                    </div>
                    </div>
                    <hr style="border:0.5px dashed black" width="97%">
                    <div class="row">
                        <div class="col-md-2" style="margin:0px auto; color: black;!important">
                            <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.8em;color: #333;letter-spacing: 2px;text-align: center; padding-bottom: 30px;">備註</div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                       <div class="col-md-10">
                        <div class="p" style="font-family:Microsoft JhengHei; font-size: 1.2em;color: #333; padding-left: 30px;letter-spacing: 2px;">A：無</div>
                    </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row" style="padding-bottom: 20px;">
                <div class="col-md-1" style="width:8.33%; float: left;!improtant"></div>
                <div class="col-md-10" style="padding: 30px 20px; border: 4px dashed #333; margin-bottom: 20px;">
                    <div class="freetosay">
                        <h3>想說的話！</h3>
                        <div class="fts">
                            <p>我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我一直都想說的是我很棒。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
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
                                    <li class="active">
                                        <a href="#comments-logout" role="tab" data-toggle="tab">
                                            <h4 class="reviews text-capitalize">Comments</h4>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#add-comment" role="tab" data-toggle="tab">
                                            <h4 class="reviews text-capitalize">Add comment</h4>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="comments-logout">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" src="images/IMG_5499.jpg" alt="profile">
                                                </a>
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

    <script>
        let spans = document.querySelectorAll(".word span");
        spans.forEach((span, idx) => {
            span.addEventListener("click", e => {
                e.target.classList.add("active");
            });
            span.addEventListener("animationend", e => {
                e.target.classList.remove("active");
            });

            // Initial animation
            setTimeout(() => {
                span.classList.add("active");
            }, 750 * (idx + 1));
        });

    </script>
</body>

</html>
