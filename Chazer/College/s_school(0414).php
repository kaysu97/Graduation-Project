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
  <link rel="stylesheet" href="/newproject/css/bootstrap.css">
  <link rel="stylesheet" href="/newproject/css/magnific-popup.css">
  <link rel="stylesheet" href="/newproject/css/flexslider.css">
  <link rel="stylesheet" href="/newproject/css/style.css">
  <link rel="stylesheet" href="/newproject/css/school-2.css">
  <link rel="stylesheet" href="/newproject/college/share.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(document).ready(function(){
    $('#CollegeNameSelected').on('change',function(){
      var cCollegeName = $(this).val();
      if(cCollegeName){
        $.ajax({
          type:'POST',
          url:'Ajax2.php',
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

</head>

<body>
  <div id="page">
    <nav class="fh5co-nav" role="navigation">
      <div class="container-wrap">
        <div class="top-menu">
          <div class="row">
            <div class="col-xs-3">
              <div id="fh5co-logo">學校面試分享</div>
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
                    <li><a href="/newproject/workingspace/workingspace-1.php">Working Space</a></li>
                    <li><a href="#">for Work</a></li>
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
    <form action="collegesubmit.php" method="post">
      <div class="rela-block profile-card">
        <div id="fh5co-services" style="min-height: 800px;">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

              <div class="titles">校名
                <select class="selectpicker" data-size="10" style="min-width: 15%" name="CollegeNameSelected" id="CollegeNameSelected" required>
                  <option disabled selected hidden>請選擇面試學校</option>

                  <?php
                  include('collegeconfig.php');
                  $query = mysqli_query($conn,"SELECT * FROM CollegeList");

                  while($dbrow = mysqli_fetch_array($query)){
                    echo '<option value="'.$dbrow['CollegeName'].'">'.$dbrow['CollegeName'].'</option>';
                  }

                  ?>
                </select>
              </div><br>
              <div class="titles">面試科系
                <select class="selectpicker" data-size="10" style="min-width: 15%" name="CollegeDepartmentSelected" id="CollegeDepartmentSelected" required>
                  <option value="">請選擇面試科系</option>
                </select>
                <br>
                <!-- <input type="text" style="min-width: 100px; max-height: 25px;"> -->
              </div>
              <br>

              <div class="titles">級分
                <select class="selectpicker" data-size="10" style="min-width: 5%;" name="Score">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                  <option>32</option>
                  <option>33</option>
                  <option>34</option>
                  <option>35</option>
                  <option>36</option>
                  <option>37</option>
                  <option>38</option>
                  <option>39</option>
                  <option>40</option>
                  <option>41</option>
                  <option>42</option>
                  <option>43</option>
                  <option>44</option>
                  <option>45</option>
                  <option>46</option>
                  <option>47</option>
                  <option>48</option>
                  <option>49</option>
                  <option>50</option>
                  <option>51</option>
                  <option>52</option>
                  <option>53</option>
                  <option>54</option>
                  <option>55</option>
                  <option>56</option>
                  <option>57</option>
                  <option>58</option>
                  <option>59</option>
                  <option>60</option>
                  <option>61</option>
                  <option>62</option>
                  <option>63</option>
                  <option>64</option>
                  <option>65</option>
                  <option>66</option>
                  <option>67</option>
                  <option>68</option>
                  <option>69</option>
                  <option>70</option>
                  <option>71</option>
                  <option>72</option>
                  <option>73</option>
                  <option>74</option>
                  <option>75</option>
                </select>
              </div><br>
              <div class="hi">
                <div class="titles">有無錄取</div>
                <input class="hidden radio-label" type="radio" name="Admitted" id="in" checked="checked" value="正取" />
                <label class="button-label" for="in">
                  <p>正取</p>
                </label>
                <input class="hidden radio-label" type="radio" name="Admitted" id="waiting" value="備取" />
                <label class="button-label" for="waiting">
                  <p>備取</p>
                </label>
                <input class="hidden radio-label" type="radio" name="Admitted" id="no_in" value="無" />
                <label class="button-label" for="no_in">
                  <p>無</p>
                </label>
              </div>

              <!-- <div class="hi">
              <div class="titles">有無錄取</div>
              <input type="radio" name="Admitted" value="正取">正取
              <input type="radio" name="Admitted" value="備取">備取
              <input type="radio" name="Admitted" value="無">無
            </div> -->
            <br>
            <div class="titles">面試年份
              <select class="selectpicker" data-size="10" style="width: 8%;" name="InterviewDate">
                <option>1999</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
              </select>
            </div><br>
            <div class="hi">
              <div class="titles">備審資料</div>
              <input class="hidden radio-label" type="radio" name="Application" id="yes-button" value="制式" checked="checked" />
              <label class="button-label" for="yes-button">
                <p>制式</p>
              </label>
              <input class="hidden radio-label" type="radio" name="Application" value="自製" id="no-button" />
              <label class="button-label" for="no-button">
                <p>自製</p>
              </label>
              <input class="hidden radio-label" type="radio" name="Application" value="無" id="maybe-button" />
              <label class="button-label" for="maybe-button">
                <p>無</p>
              </label>
            </div>

            <!-- <div class="hi">
            <div class="titles">備審資料</div>
            <input type="radio" class="btn btn-item active" name="Application" value="制式">制式
            <input type="radio" class="btn btn-item" name="Application" value="自製">自製
            <input type="radio" class="btn btn-item" name="Application" value="無">無
          </div> -->
          <br>

          <div class="hi">
            <h4>第一階段</h4>

            <input class="hidden radio-label" type="radio" name="InterviewType01" value="面試" id="oralflip" checked="checked" />
            <label class="button-label" for="oralflip">
              <p>面試</p>
            </label>
            <input class="hidden radio-label" type="radio" name="InterviewType01" value="筆試" id="testflip" />
            <label class="button-label" for="testflip">
              <p>筆試</p>
            </label>
            <input class="hidden radio-label" type="radio" name="InterviewType01" value="參訪" id="doingflip" />
            <label class="button-label" for="doingflip">
              <p>參訪<p>
              </label>
            </div>

            <!-- <h4>第一階段</h4>
            <input type="radio" id="oralflip" name="InterviewType01" value="面試">面試
            <input type="radio" id="testflip" name="InterviewType01" value="筆試">筆試
            <input type="radio" id="doingflip" name="InterviewType01" value="參訪">參訪
            <br><br> -->

            <div class="flex hide-on-small" id="oralpanel" style="display:none;">
              <div class="hi">
                <div class="titles">面試官人數</div>
                <input class="hidden radio-label" type="radio" value="1" name="InterviewerNumber01" id="1p" />
                <label class="button-label" for="1p">
                  <p>1人</p>
                </label>
                <input class="hidden radio-label" type="radio" value="2" name="InterviewerNumber01" id="2p" />
                <label class="button-label" for="2p">
                  <p>2人</p>
                </label>
                <input class="hidden radio-label" type="radio" value="3" name="InterviewerNumber01" id="3p" />
                <label class="button-label" for="3p">
                  <p>3人</p>
                </label>
                <input class="hidden radio-label" type="radio" value="4" name="InterviewerNumber01" id="4p" />
                <label class="button-label" for="4p">
                  <p>4人</p>
                </label>
                <input class="hidden radio-label" type="radio" value="5" name="InterviewerNumber01" id="5p" />
                <label class="button-label" for="5p">
                  <p>5人或以上</p>
                </label>
              </div>
              <br>
              <div class="hi">
                <div class="titles">面試類型</div>
                <input class="hidden radio-label" type="radio" value="個人" name="IntervieweeNumber01" id="self" />
                <label class="button-label" for="self">
                  <p>個人</p>
                </label>
                <input class="hidden radio-label" type="radio" value="團體" name="IntervieweeNumber01" id="group" />
                <label class="button-label" for="group">
                  <p>團體</p>
                </label>
              </div>
              <br>
              <div class="hi">
                <div class="titles">時間長度</div>
                <input class="hidden radio-label" type="radio" value="5分鐘以內" name="InterviewDuration01" id="5min" />
                <label class="button-label" for="5min">
                  <p>5分鐘</p>
                </label>
                <input class="hidden radio-label" type="radio" value="15分鐘以內" name="InterviewDuration01" id="15min" />
                <label class="button-label" for="15min">
                  <p>15分鐘</p>
                </label>
                <input class="hidden radio-label" type="radio" value="30分鐘以內" name="InterviewDuration01" id="30min" />
                <label class="button-label" for="30min">
                  <p>30分鐘</p>
                </label>
              </div>
              <br>
              <div class="hii">
                <div class="titles">題目</div>
                <div class="row">
                  <div class="col-3">
                    <input class="effect-4" type="text" name="oralquestion011" placeholder="例如：為什麼要申請我們學校？">
                    <span class="focus-border"></span>
                  </div>
                  <div class="col-1">
                    <div class="addq" id="o_new1">
                      <a href="#0" class="bttn">+</a></div>
                    </div>
                    <div class="col-1">
                      <div class="addq" id="o_del1">
                        <a href="#0" class="bttn">-</a></div>
                      </div>
                    </div>
                    <div class="titles">答案</div>
                    <div class="row">
                      <div class="col-3">
                        <input class="effect-4" type="text" name="oralanswer011" placeholder="">
                        <span class="focus-border"></span>
                      </div>
                    </div>
                    <div class="newq" id="or_new1" style="display: none;">

                      <div class="titles">題目</div>
                      <div class="row">
                        <div class="col-3">
                          <input class="effect-4" type="text" name="oralquestion012" placeholder="例如：為什麼要申請我們學校？">
                          <span class="focus-border"></span>
                        </div>
                      </div>
                      <div class="titles">答案</div>
                      <div class="row">
                        <div class="col-3">
                          <input class="effect-4" type="text" name="oralanswer012" placeholder="">
                          <span class="focus-border"></span>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <!-- <div class="flex hide-on-small" id="oralpanel" style="display:none;">
                <div class="hi">
                <div class="titles">面試官人數</div>
                <a class="btn btn-item active" name="InterviewerNumber01" value="1">1人</a>
                <a class="btn btn-item" name="InterviewerNumber01" value="2">2人</a>
                <a class="btn btn-item" name="InterviewerNumber01" value="3">3人</a>
                <a class="btn btn-item" name="InterviewerNumber01" value="4">4人</a>
                <a class="btn btn-item" name="InterviewerNumber01" value="5">5人</a>
              </div>
              <br>
              <div class="hi">
              <div class="titles">面試類型</div>
              <a class="btn btn-item active" name="IntervieweeNumber01" value="個人">個人</a>
              <a class="btn btn-item" name="IntervieweeNumber01" value="團體">團體</a>
              <br><br>
            </div>
            <div class="hi">
            <div class="titles">時間長度</div>
            <a class="btn btn-item active" name="InterviewDuration01" value="5分鐘以內">5分鐘</a>
            <a class="btn btn-item" name="InterviewDuration01" value="15分鐘以內">15分鐘</a>
            <a class="btn btn-item" name="InterviewDuration01" value="30分鐘以內">30分鐘</a>
          </div>
          <br><br>
          <div class="titles">題目：<input type="text" style="min-width: 450px;" name="oralquestion011"></div>
          <br>
          <div class="titles">個人回答：<input type="text" style="min-width: 450px;" name="oralanswer011"></div>
        </div> -->
        <div class="flex hide-on-small" id="textpanel" style="display:none;">
          <br>
          <div class="ha">
            <div class="titles">題型</div>
            <input id="toggle5" type="checkbox" name="QuestionType01[]" value="單選" data-rule="checked" checked>
            <label for="toggle5">單選</label>

            <input id="toggle6" type="checkbox" name="QuestionType01[]" value="多選">
            <label for="toggle6">多選</label>

            <input id="toggle7" type="checkbox" name="QuestionType01[]" value="申論">
            <label for="toggle7">申論</label>

            <input id="toggle8" type="checkbox" name="QuestionType01[]" value="簡答">
            <label for="toggle8">簡答</label>
          </div>

          <div class="hii">
            <div class="titles">題目</div>
            <div class="row">
              <div class="col-3">
                <input class="effect-4" type="text" name="Question011" placeholder="例如：為什麼要申請我們學校？">
                <span class="focus-border"></span>
              </div>
              <div class="col-1">
                <div class="addq" id="t_new1">
                  <a href="#0" class="bttn">+</a></div>
                </div>
                <div class="col-1">
                  <div class="addq" id="t_del1">
                    <a href="#0" class="bttn">-</a></div>
                  </div>
                </div>
                <div class="titles">答案</div>
                <div class="row">
                  <div class="col-3">
                    <input class="effect-4" type="text" name="PersonalAnswer011" placeholder="">
                    <span class="focus-border"></span>
                  </div>
                </div>
                <div class="newq" id="te_new1" style="display: none;">

                  <div class="titles">題目</div>
                  <div class="row">
                    <div class="col-3">
                      <input class="effect-4" type="text" name="Question012" placeholder="例如：為什麼要申請我們學校？">
                      <span class="focus-border"></span>
                    </div>
                  </div>
                  <div class="titles">答案</div>
                  <div class="row">
                    <div class="col-3">
                      <input class="effect-4" type="text" name="PersonalAnswer012" placeholder="">
                      <span class="focus-border"></span>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          <div class="flex hide-on-small" id="doingpanel" style="display:none;">
            <div class="titles">特殊需求</div>
            <div class="row">
              <div class="col-5">
                <input class="effect-4" type="text" name="SpecialRequirement01" placeholder="例如：需不需要穿正裝？">
                <span class="focus-border"></span>
              </div>
            </div>
          </div>
      <br><br>

      <div id="stage2">
      <div class="hi">
        <h4>第二階段</h4>

        <input class="hidden radio-label" type="radio" name="InterviewType02" value="面試" id="oralflip1" checked="checked" />
        <label class="button-label" for="oralflip1">
          <p>面試</p>
        </label>
        <input class="hidden radio-label" type="radio" name="InterviewType02" value="筆試" id="testflip1" />
        <label class="button-label" for="testflip1">
          <p>筆試</p>
        </label>
        <input class="hidden radio-label" type="radio" name="InterviewType02" value="參訪" id="doingflip1" />
        <label class="button-label" for="doingflip1">
          <p>參訪<p>
          </label>
        </div>

        <div class="flex hide-on-small" id="oralpanel1" style="display:none;">
          <div class="hi">
            <div class="titles">面試官人數</div>
            <input class="hidden radio-label" type="radio" value="1" name="InterviewerNumber02" id="1p" checked="checked" />
            <label class="button-label" for="1p">
              <p>1人</p>
            </label>
            <input class="hidden radio-label" type="radio" value="2" name="InterviewerNumber02" id="6p" />
            <label class="button-label" for="6p">
              <p>2人</p>
            </label>
            <input class="hidden radio-label" type="radio" value="3" name="InterviewerNumber02" id="7p" />
            <label class="button-label" for="7p">
              <p>3人</p>
            </label>
            <input class="hidden radio-label" type="radio" value="4" name="InterviewerNumber02" id="8p" />
            <label class="button-label" for="8p">
              <p>4人</p>
            </label>
            <input class="hidden radio-label" type="radio" value="5" name="InterviewerNumber02" id="9p" />
            <label class="button-label" for="9p">
              <p>5人或以上</p>
            </label>
          </div>
          <br>
          <div class="hi">
            <div class="titles">面試類型</div>
            <input class="hidden radio-label" type="radio" value="個人" name="IntervieweeNumber02" id="self1" checked="checked" />
            <label class="button-label" for="self1">
              <p>個人</p>
            </label>
            <input class="hidden radio-label" type="radio" value="團體" name="IntervieweeNumber02" id="group1" />
            <label class="button-label" for="group1">
              <p>團體</p>
            </label>
          </div>
          <br>
          <div class="hi">
            <div class="titles">時間長度</div>
            <input class="hidden radio-label" type="radio" value="5分鐘以內" name="InterviewDuration02" id="5min1" checked="checked" />
            <label class="button-label" for="5min1">
              <p>5分鐘</p>
            </label>
            <input class="hidden radio-label" type="radio" value="15分鐘以內" name="InterviewDuration02" id="15min1" />
            <label class="button-label" for="15min1">
              <p>15分鐘</p>
            </label>
            <input class="hidden radio-label" type="radio" value="30分鐘以內" name="InterviewDuration02" id="30min1" />
            <label class="button-label" for="30min1">
              <p>30分鐘</p>
            </label>
          </div>
          <br>
          <div class="hii">
            <div class="titles">題目</div>
            <div class="row">
              <div class="col-3">
                <input class="effect-4" type="text" name="oralquestion021" placeholder="例如：為什麼要申請我們學校？">
                <span class="focus-border"></span>
              </div>
              <div class="col-1">
                <div class="addq" id="o_new">
                  <a href="#0" class="bttn">+</a></div>
                </div>
                <div class="col-1">
                  <div class="addq" id="o_del">
                    <a href="#0" class="bttn">-</a></div>
                  </div>
                </div>
                <div class="titles">答案</div>
                <div class="row">
                  <div class="col-3">
                    <input class="effect-4" type="text" name="oralanswer021" placeholder="">
                    <span class="focus-border"></span>
                  </div>
                </div>
                <div class="newq" id="or_new" style="display: none;">

                  <div class="titles">題目</div>
                  <div class="row">
                    <div class="col-3">
                      <input class="effect-4" type="text" name="oralquestion022" placeholder="例如：為什麼要申請我們學校？">
                      <span class="focus-border"></span>
                    </div>
                  </div>
                  <div class="titles">答案</div>
                  <div class="row">
                    <div class="col-3">
                      <input class="effect-4" type="text" name="oralanswer022" placeholder="">
                      <span class="focus-border"></span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
    <div class="flex hide-on-small" id="textpanel1" style="display:none;">
      <br>
      <div class="ha">
        <div class="titles">題型</div>
        <input id="toggle1" type="checkbox" name="QuestionType02[]" value="單選" data-rule="checked" checked>
        <label for="toggle1">單選</label>

        <input id="toggle2" type="checkbox" name="QuestionType02[]" value="多選">
        <label for="toggle2">多選</label>

        <input id="toggle3" type="checkbox" name="QuestionType02[]" value="申論">
        <label for="toggle3">申論</label>

        <input id="toggle4" type="checkbox" name="QuestionType02[]" value="簡答">
        <label for="toggle4">簡答</label>
      </div>

      <div class="hii">
        <div class="titles">題目</div>
        <div class="row">
          <div class="col-3">
            <input class="effect-4" type="text" name="Question021" placeholder="例如：為什麼要申請我們學校？">
            <span class="focus-border"></span>
          </div>
          <div class="col-1">
              <div class="addq" id="new">
                  <a href="#0" class="bttn">+</a></div>
          </div>
          <div class="col-1">
              <div class="addq" id="del">
              <a href="#0" class="bttn">-</a></div>
          </div>
            </div>
            <div class="titles">答案</div>
            <div class="row">
              <div class="col-3">
                <input class="effect-4" type="text" name="PersonalAnswer021" placeholder="">
                <span class="focus-border"></span>
              </div>
            </div>
            <div class="newq" id="newq" style="display: none;">

              <div class="titles">題目</div>
              <div class="row">
                <div class="col-3">
                  <input class="effect-4" type="text" name="Question022" placeholder="例如：為什麼要申請我們學校？">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="titles">答案</div>
              <div class="row">
                <div class="col-3">
                  <input class="effect-4" type="text" name="PersonalAnswer022" placeholder="">
                  <span class="focus-border"></span>
                </div>

              </div>
            </div>
          </div>

        </div>
      <div class="flex hide-on-small" id="doingpanel1" style="display:none;">
        <div class="titles">特殊需求</div>
        <div class="row">
          <div class="col-5">
            <input class="effect-4" type="text" name="SpecialRequirement02" placeholder="例如：需不需要穿正裝？">
            <span class="focus-border"></span>
          </div>
        </div>
      </div>
      <br><br>
      <div class="titles">想說的話:</div> <textarea name="PersonalOpinion" style="width:300px;height:100px;">
</textarea>
      <br>

    </div>
      <div>
        <button class="btn" type="submit">submit</button>
      </div>
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
$(function() {
  $('a').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
});

</script>
<script>
    var timeout;
    var $mt = 0;
    $(document).ready(function() {
        $(".next").click(function() {
            clearTimeout(timeout);
            setTimeout(function() {
                $mt = $mt - 125;
                $("#jump").css("margin-top", $mt);
            }, 10);
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
        $("#oralflip1").click(function() {
            $("#textpanel1").slideUp("slow");
            $("#doingpanel1").slideUp("slow");
            $("#oralpanel1").slideDown("slow");
        });
    });
    $(document).ready(function() {
        $("#testflip1").click(function() {
            $("#oralpanel1").slideUp("slow");
            $("#doingpanel1").slideUp("slow");
            $("#textpanel1").slideDown("slow");
        });
    });
    $(document).ready(function() {
        $("#doingflip1").click(function() {
            $("#oralpanel1").slideUp("slow");
            $("#textpanel1").slideUp("slow");
            $("#doingpanel1").slideDown("slow");
        });
    });
    $(document).ready(function() {
        $("#other").click(function() {
            $("#othertext").slideToggle("slow");
        });
    });


    $(document).ready(function() {
        $("#ReExamY").click(function() {
            $("#stage2").slideDown("slow");
        });
    });
    $(document).ready(function() {
        $("#ReExamN").click(function() {
            $("#stage2").slideUp("slow");
        });
    });

</script>

<script>
$("#new").click(function () {
  $("#newq").show();
});
$("#del").click(function () {
  $("#newq").hide();
});
$("#o_new").click(function () {
  $("#or_new").show();
});
$("#o_del").click(function () {
  $("#or_new").hide();
});

$("#2_del").click(function () {
  $("#oralpanel1").hide();
  $("#textpanel1").hide();
  $("#doingpanel1").hide();
});
$("#o_new1").click(function () {
  $("#or_new1").show();
});
$("#o_del1").click(function () {
  $("#or_new1").hide();
});
$("#t_new1").click(function () {
  $("#te_new1").show();
});
$("#t_del1").click(function () {
  $("#te_new1").hide();
});

</script>


</body>

</html>
