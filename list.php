<!DOCTYPE html>
<html>
  <head>
    <title>ECGUIDE</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="./script/jquery.touchSwipe.min.js"></script>
    <script src="./script/slide.js"></script>
    <script src="./script/search_room.js"></script>

    <!-- COMMON -->
    <link rel="stylesheet" href="./style/common/list.css">
    <link rel="stylesheet" href="./style/common/slide.css">
    <link rel="stylesheet" href="./style/common/search_input.css">
    <link rel="stylesheet" href="./style/common/scrollbar.css?ver=1">

    <!-- PAD -->
    <link rel="stylesheet" href="./style/pad/list_p.css">

    <!-- DESKTOP -->
    <link rel="stylesheet" href="./style/desktop/list_d.css">

    <!-- KIOSK -->
    <link rel="stylesheet" href="./style/kiosk/list_k.css">
  </head>
  <body>
    <div class="container">
      <div id="sidebar">
        <div id="leftside-navigation" class="nano">
          <ul class="nano-content">
            <!-- home -->
            <li>
              <a href="./home.php">
                <img src="./img/home.png" alt="go_to_home" style="width:24px;height:24px;margin-left:-7px;vertical-align: -webkit-baseline-middle;"/>
                <span style="font-weight:bold; margin-left:10px; vertical-align: -webkit-baseline-middle">Home</span>
              </a>
            </li>

            <!-- search -->
            <li>
              <a id="search_btn">
                <img src="./img/search_btn.png" alt="" style="width:24px; height:24px; margin-left:-7px; vertical-align: -webkit-baseline-middle;"/>

                <input id="stretchy_input" type="text" placeholder="검색어를 입력하세요.">
                <div id="search_box">
                </div>
              </a>
            </li>

            <!-- 층별 전체 약도 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>층별 전체 약도</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="1-0-0" class="depth-1">
                <li><a href="./location.php?floor=1&room_nm=&path_url=./img/path/floor_v1/BLACK/floor1.jpg">1층</a></li>
                <li><a href="./location.php?floor=2&room_nm=&path_url=./img/path/floor_v1/BLACK/floor2.jpg">2층</a></li>
                <li><a href="./location.php?floor=3&room_nm=&path_url=./img/path/floor_v1/BLACK/floor3.jpg">3층</a></li>
                <li><a href="./location.php?floor=4&room_nm=&path_url=./img/path/floor_v1/BLACK/floor4.jpg">4층</a></li>
                <li><a href="./location.php?floor=5&room_nm=&path_url=./img/path/floor_v1/BLACK/floor5.jpg">5층</a></li>
              </ul>
            </li>

            <!--강의실-->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>강의실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="2-0-0" class="depth-1">
                <!-- 일반강의실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>일반강의실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="2-1-0" class="depth-2">
                    <!--층구분-->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>1층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-1-1" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-1120-00');">1120호 일반물리실험실B</a></li>
                        <li><a href="javascript:requestByMenu('I01-1134-00');">1134호 일반물리실험실A</a></li>
                        <li><a href="javascript:requestByMenu('I01-1123-00');">1123호 102강의실</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>2층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-1-2" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-2201-00');">2201호 103강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2207-00');">2207호 104강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2133-00');">2133호 105강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2134-00');">2134호 106강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2139-00');">2139호 107강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2342-00');">2342호 108강의실</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>3층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-1-3" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-3402-00');">3402호 301강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3408-00');">3408호 302강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3416-00');">3416호 303강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3422-00');">3422호 304강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3215-00');">3215호 305강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3207-00');">3207호 306강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3342-00');">3342호 307강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3122-00');">3122호 308강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3132-00');">3132호 309강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3140-00');">3140호 310강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3137-00');">3137호 311강의실</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>4층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-1-4" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-4402-00');">4402호 401강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4408-00');">4408호 402강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4111-00');">4111호 404강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4133-00');">4133호 405강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4139-00');">4139호 406강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4140-00');">4140호 407강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4132-00');">4132호 408강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-4128-00');">4128호 409강의실</a></li>
                      </ul>
                    </li>
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>5층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-1-5" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-5416-00');">5416호 501강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5140-00');">5140호 506강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5123-00');">5123호 507강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5402-00');">5402호 PBL강의실</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- PBL강의실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>PBL강의실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="2-2-0" class="depth-2">
                    <!-- 창의공과대학 공용 PBL실 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>창의공과대학 공용 PBL실</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-1" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-2338-00');">2338호 PBL강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5352-00');">5352호 선과 인격수련 PBL실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5355-00');">5355호 PBL강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5356-00');">5356호 PBL강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-5359-00');">5359호 PBL강의실</a></li>
                        <!-- <li><a href="javascript:requestByMenu('I01-5360-00');">5360호 PBL강의실</a></li> -->
                        <li><a href="javascript:requestByMenu('I01-5363-00');">5363호 PBL강의실</a></li>
                        <!-- <li><a href="javascript:requestByMenu('I01-5364-00');">5364호 PBL강의실</a></li> -->
                        <li><a href="javascript:requestByMenu('I01-2337-00');">2337호 PBL강의실</a></li>
                      </ul>
                    </li>

                    <!-- 건축학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>건축학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-2" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 건축공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>건축공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-3" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 도시공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>도시공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-4" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-4110-00');">4110호 PBL강의실</a></li>
                      </ul>
                    </li>

                    <!-- 기계공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>기계공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-6" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 기계설계공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>기계설계공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-7" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 스마트자동차공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>스마트자동차공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-8" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 전기공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>전기공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-9" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-2301-00');">2301호 PBL강의실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2303-01');">2303호 PBL강의실</a></li>
                      </ul>
                    </li>

                    <!-- 전자공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>전자공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-10" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-3113-00');">3113호 PBL강의실</a></li>
                      </ul>
                    </li>

                    <!-- 정보통신공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>정보통신공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-11" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 전자융합공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>전자융합공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-2-12" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-4359-00');">4359호 PBL강의실</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- 캡스톤디자인실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>캡스톤디자인실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="2-3-0" class="depth-2">
                    <!-- 건축학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>건축학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-1" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 건축공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>건축공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-2" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-5339-00');">5339호 캡스톤디자인실</a></li>
                      </ul>
                    </li>

                    <!-- 도시공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>도시공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-3" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-4102-00');">4102호 캡스톤디자인실</a></li>
                      </ul>
                    </li>

                    <!-- 토목환경공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>토목환경공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-4" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-1109-01');">1109-1호 캡스톤디자인실</a></li>
                      </ul>
                    </li>

                    <!-- 기계공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>기계공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-5" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 기계설계공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>기계설계공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-6" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 스마트자동차공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>스마트자동차공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-7" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 전기공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>전기공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-8" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-2213-00');">2213호 캡스톤디자인실</a></li>
                      </ul>
                    </li>

                    <!-- 전자공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>전자공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-9" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-3301-00');">3301호 캡스톤디자인실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3305-00');">3305호 캡스톤디자인실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3309-00');">3309호 캡스톤디자인실</a></li>
                        <li><a href="javascript:requestByMenu('I01-3327-00');">3327호 캡스톤디자인실</a></li>
                      </ul>
                    </li>

                    <!-- 정보통신공학과 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>정보통신공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-10" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 전자융합공학과 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>전자융합공학과</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-3-11" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-4363-00');">4363호 캡스톤디자인실</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- 공동전산실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>공동전산실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="2-4-0" class="depth-2">
                    <!-- 1층 -->
                    <!-- <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>1층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-4-1" class="depth-3">
                        <li><a href="#"></a></li>
                      </ul>
                    </li> -->

                    <!-- 2층 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>2층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-4-2" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-2424-00');">2424호 공동전산실 전실</a></li>
                        <li><a href="javascript:requestByMenu('I01-2416-00');">2416호 공동전산실1</a></li>
                        <li><a href="javascript:requestByMenu('I01-2140-00');">2140호 공동전산실2(Eco-Green 정보화학습실)</a></li>
                      </ul>
                    </li>

                    <!-- 3층 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>3층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-4-3" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-3322-00');">3322호 공동전산실3</a></li>
                        <li><a href="javascript:requestByMenu('I01-3330-00');">3330호 공동전산실4</a></li>
                      </ul>
                    </li>

                    <!-- 4층 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>4층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-4-4" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-4416-00');">4416호 공동전산실5</a></li>
                      </ul>
                    </li>

                    <!-- 5층 -->
                    <li class="sub-menu">
                      <a href="javascript:void(0);">
                        <span>5층</span>
                        <i class="arrow fa fa-angle-right pull-right"></i>
                      </a>
                      <ul id="2-4-5" class="depth-3">
                        <li><a href="javascript:requestByMenu('I01-5161-00');">5161호 공동전산실6</a></li>
                        <li><a href="javascript:requestByMenu('I01-5153-00');">5153호 공동전산실7</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- 건축설계실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축설계실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="2-5-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5332-00');">5332호 건축설계실1</a></li>
                    <li><a href="javascript:requestByMenu('I01-5336-00');">5336호 건축설계실2</a></li>
                    <li><a href="javascript:requestByMenu('I01-5340-00');">5340호 건축설계실3</a></li>
                    <li><a href="javascript:requestByMenu('I01-5344-00');">5344호 건축설계실4</a></li>
                    <li><a href="javascript:requestByMenu('I01-5301-00');">5301호 건축설계실5</a></li>
                    <li><a href="javascript:requestByMenu('I01-5307-00');">5307호 건축설계실6</a></li>
                    <li><a href="javascript:requestByMenu('I01-5221-00');">5221호 건축설계실7</a></li>
                    <li><a href="javascript:requestByMenu('I01-5217-00');">5217호 건축설계실8</a></li>
                    <li><a href="javascript:requestByMenu('I01-5213-00');">5213호 건축설계실9</a></li>
                    <li><a href="javascript:requestByMenu('I01-5209-00');">5209호 건축설계실10</a></li>
                    <li><a href="javascript:requestByMenu('I01-5205-00');">5205호 건축설계실11</a></li>
                    <li><a href="javascript:requestByMenu('I01-5130-00');">5130호 건축설계실12</a></li>
                    <li><a href="javascript:requestByMenu('I01-5136-00');">5136호 건축설계실13</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!--교수연구실-->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>교수연구실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="3-0-0" class="depth-1">

                <!-- 건축학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-1-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5108-00');">5108호 박연정교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5109-00');">5109호 박기우교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5110-00');">5110호 안선호교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5113-00');">5113호 윤기병교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5314-00');">5314호 홍승재교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5308-00');">5308호 이성균교수실</a></li>
                  </ul>
                </li>

                <!-- 건축공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-2-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5104-00');">5104호 소광호교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5107-00');">5107호 김재수교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5112-00');">5112호 최세진교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5312-00');">5312호 이용수교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5135-01');">5135-1호 노준석교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5139-00');">5139호 임우영교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5143-00');">5143호 조재희교수실</a></li>
                  </ul>
                </li>

                <!-- 도시공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>도시공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-3-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4304-00');">4304호 이경찬교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4306-00');">4306호 신동호교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4310-00');">4310호 정정권교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4308-00');">4308호 이창섭교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4312-00');">4312호 최성진교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4314-01');">4314-1호 박경섭교수실</a></li>
                  </ul>
                </li>

                <!-- 토목환경공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>토목환경공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-4-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1302-00');">1302호 정신택교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1304-00');">1304호 이진선교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1306-00');">1306호 최혁순교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1310-00');">1310호 김선용교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1312-00');">1312호 남궁문교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1314-00');">1314호 박주남교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1316-00');">1316호 정용교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1308-00');">1308호 김경석교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1336-00');">1336호 김권식교수실/Eco-Green 교육센터</a></li>
                  </ul>
                </li>

                <!-- 기계자동차공학부 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계자동차공학부</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-5-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3360-00');">3360호 정현조교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3362-00');">3362호 이상호교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3356-00');">3356호 이승재교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3358-00');">3358호 조영삼교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3352-00');">3352호 김병삼교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3162-00');">3162호 장일도교수실</a></li>
                    <!-- <li><a href="javascript:requestByMenu('I01-5156-01');">5156-1호 원대희교수실</a></li> -->
                    <li><a href="javascript:requestByMenu('I01-3164-00');">3164호 서경덕교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3156-00');">3156호 모정하교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2164-00');">2164호 장익황교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2158-00');">2158호 차영엽교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3165-00');">3165호 조인성,신임교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3158-01');">3158-1호 교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3158-02');">3158-2호 교수실</a></li>
                  </ul>
                </li>

                <!-- 기계공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-6-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3164-00');">3164호 서경덕교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2158-00');">2158호 차영엽교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3360-00');">3360호 정현조교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3362-00');">3362호 이상호교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3156-00');">3156호 모정하교수실</a></li>
                  </ul>
                </li>

                <!-- 기계설계공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계설계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-7-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3356-00');">3356호 이승재교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3358-00');">3358호 조영삼교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3165-00');">3165호 조인성,신임교수실</a></li>
                  </ul>
                </li>

                <!-- 스마트자동차공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>스마트자동차공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-8-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2164-00');">2164호 장익황교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3352-00');">3352호 김병삼교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3162-00');">3162호 장일도교수실</a></li>
                    <!-- <li><a href="javascript:requestByMenu('I01-5156-01');">5156-1호 원대희교수실</a></li> -->
                  </ul>
                </li>

                <!-- 전기공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전기공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-9-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2103-00');">2103호 이상설교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2104-00');">2104호 김재혁교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2110-00');">2110호 박형준교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2312-00');">2312호 신용덕교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2106-00');">2106호 진창성교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2314-00');">2314호 박정민교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2105-00');">2105호 오훈교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2129-01');">2129-1호 유석주교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2311-00');">2311호 김덕규교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2304-00');">2304호 박희정교수실</a></li>
                  </ul>
                </li>

                <!-- 전자공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-10-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3104-00');">3104호 손혁민교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3304-00');">3304호 변철우교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3306-00');">3306호 조경주교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3310-00');">3310호 문성룡교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3314-00');">3314호 신홍규교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3106-00');">3106호 조영식교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3337-00');">3337호 임순자교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3110-00');">3110호 교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3112-00');">3112호 교수실</a></li>
                  </ul>
                </li>

                <!-- 정보통신공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>정보통신공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-11-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4324-00');">4324호 박광진교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4326-00');">4326호 박대희교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4332-00');">4332호 김용갑교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4340-00');">4340호 최세영교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3339-00');">3339호 염성관교수실</a></li>
                    <!-- <li><a href="javascript:requestByMenu('I01-4344-01');">4344-1호 박상준교수실</a></li> -->
                    <!-- <li><a href="javascript:requestByMenu('I01-4336-00');">4336호 신임교수실</a></li> -->
                  </ul>
                </li>

                <!-- 전자융합공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자융합공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-12-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4160-00');">4160호 김성훈교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4354-00');">4354호 송문규교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4358-00');">4358호 박인규교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4362-00');">4362호 안태천교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4364-00');">4364호 황형수교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4156-00');">4156호 조준호교수실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4158-00');">4158호 장경원교수실</a></li>
                  </ul>
                </li>

                <!-- 공과대학 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>공과대학</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="3-13-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4160-00');">4160호 김성훈교수실</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!--교수연구실험실-->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>교수 연구실험실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="4-0-0" class="depth-1">

                <!-- 건축학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-1-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5115-00');">5115호 윤기병교수연구실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5316-00');">5316호 홍승재교수연구실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5106-00');">5106호 박연정교수연구실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5306-00');">5306호 이성균교수연구실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5109-00');">5109호 박기우교수연구실험실</a></li>
                  </ul>
                </li>

                <!-- 건축공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-2-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5105-00');">5105호 김재수교수연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5310-00');">5310호 이용수교수연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5135-00');">5135호 건축디자인공학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5102-00');">5102호 소광호교수연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5133-00');">5133호 건축재료,시공연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5141-00');">5141호 건축구조시스템연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5135-02');">5135-2 건축디자인공학연구실</a></li>
                  </ul>
                </li>

                <!-- 도시공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>도시공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-3-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4307-00');">4307호 도시계획연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4309-01');">4309-1 도시역사연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4309-02');">4309-2 커뮤니티연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4305-00');">4305호 교통공학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4302-00');">4302호 모형제작실</a></li>
                  </ul>
                </li>

                <!-- 토목환경공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>토목환경공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-4-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1101-00');">1101호 환경분석실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1102-00');">1102호 환경공학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1209-00');">1209호 지반공학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1223-00');">1223호 수리연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1209-01');">1209-1호 토질기계실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1109-02');">1109-2호 교량및동역학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1115-00');">1115호 건설관리연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1342-00');">1342호 구조공학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1344-00');">1344호 구조역학실험준비실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1301-00');">1301호 해안공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1311-00');">1311호 도로&교통시스템실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1335-00');">1335호 측량실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1339-00');">1339호 측량실습실</a></li>
                  </ul>
                </li>

                <!-- 기계자동차공학부 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계자동차공학부</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                </li> -->

                <!-- 기계공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-6-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3163-00');">3163호 열시스템공학연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3166-00');">3166호 미세유체유동연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2156-00');">2156호 제어자동화연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3359-00');">3359호 고체역학연구실</a></li>
                  </ul>
                </li>

                <!-- 기계설계공학과 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계설계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-7-0" class="depth-2">
                  </ul>
                </li> -->

                <!-- 스마트자동차공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>스마트자동차공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-8-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2166-00');">2166호 신에너지연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3354-00');">3354호 음향공학연구실</a></li>
                  </ul>
                </li>

                <!-- 전기공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전기공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-9-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2102-00');">2102호 전력전자연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2112-00');">2112호 신호처리연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2302-00');">2302호 에너지및전력시스템연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2316-00');">2316호 자동제어연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2101-00');">2101호 컴퓨터응용연구실</a></li>
                  </ul>
                </li>

                <!-- 전자공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-10-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3102-00');">3102호 다차원통신 및 신호처리연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3108-00');">3108호 마이크로파연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3302-00');">3302호 RF회로시스템연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3308-00');">3308호 VLSI시스템설계연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3312-00');">3312호 비선형회로및신경망시스템연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3316-00');">3316호 직접회로연구실</a></li>
                  </ul>
                </li>

                <!-- 전자융합공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자융합공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-11-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4162-00');">4162호 바이오자기메카트로닉스연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4352-00');">4352호 무선통신연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4360-00');">4360호 지능정보제어시스템연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4356-00');">4356호 전력변환기연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4366-00');">4366호 제어시스템및컴퓨터응용연구실</a></li>
                  </ul>
                </li>

                <!-- 정보통신공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>정보통신공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-12-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4322-00');">4322호 이동컴퓨터연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4328-00');">4328호 광전자응용연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4342-00');">4342호 WMC Lab</a></li>
                    <li><a href="javascript:requestByMenu('I01-4330-00');">4330호 광통신시스템연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4344-02');">4344-2 통신신호처리연구실</a></li>
                  </ul>
                </li>

                <!-- 공과대학 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>공과대학</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="4-13-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4322-00');">4322호 이동컴퓨터연구실</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- 교육용실험실습실 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>교육용실험실습실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="5-0-0" class="depth-1">

                <!-- 건축학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-1-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5201-00');">5201호 프로젝트평가및전시실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5134-01');">5134호 출력실 및 건축학과 학생회실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5332-00');">5332호 건축설계실1</a></li>
                    <li><a href="javascript:requestByMenu('I01-5336-00');">5336호 건축설계실2</a></li>
                    <li><a href="javascript:requestByMenu('I01-5340-00');">5340호 건축설계실3</a></li>
                    <li><a href="javascript:requestByMenu('I01-5344-00');">5344호 건축설계실4</a></li>
                    <li><a href="javascript:requestByMenu('I01-5301-00');">5301호 건축설계실5</a></li>
                    <li><a href="javascript:requestByMenu('I01-5307-00');">5307호 건축설계실6</a></li>
                    <li><a href="javascript:requestByMenu('I01-5221-00');">5221호 건축설계실7</a></li>
                    <li><a href="javascript:requestByMenu('I01-5217-00');">5217호 건축설계실8</a></li>
                    <li><a href="javascript:requestByMenu('I01-5213-00');">5213호 건축설계실9</a></li>
                    <li><a href="javascript:requestByMenu('I01-5209-00');">5209호 건축설계실10</a></li>
                    <li><a href="javascript:requestByMenu('I01-5205-00');">5205호 건축설계실11</a></li>
                    <li><a href="javascript:requestByMenu('I01-5130-00');">5130호 건축설계실12</a></li>
                    <li><a href="javascript:requestByMenu('I01-5136-00');">5136호 건축설계실13</a></li>
                  </ul>
                </li>

                <!-- 건축공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-2-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5322-00');">5322호 건설환경계열 전공기초실험실2</a></li>
                    <li><a href="javascript:requestByMenu('I01-5328-00');">5328호 건설환경계열 전공기초실험실3</a></li>
                    <li><a href="javascript:requestByMenu('I01-5325-00');">5325호 건축환경실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5337-00');">5337호 건축공학설계실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5333-00');">5333호 구조재료실험실</a></li>
                  </ul>
                </li>

                <!-- 도시공학부 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>도시공학부</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-3-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4302-00');">4302호 모형제작실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4106-01');">4106호 기자재실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4103-00');">4103호 건설환경계열전공 기초실험실1(MacCAD실습실)</a></li>
                    <li><a href="javascript:requestByMenu('I01-4215-00');">4215호 도시설계실A</a></li>
                    <li><a href="javascript:requestByMenu('I01-4201-00');">4201호 도시설계실B</a></li>
                  </ul>
                </li>

                <!-- 토목환경공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>토목환경공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-4-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1201-00');">1201호 토질실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1338-00');">1338호 구조실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1101-00');">1101호 환경실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1215-00');">1215호 수리실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1209-01');">1209-1호 토질기계실</a></li>
                  </ul>
                </li>

                <!-- 기계자동차공학부 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계자동차공학부</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-5-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2160-00');">2160호 자연모사공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2162-00');">2162호 생산기술응용실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2402-00');">2402호 3D프린팅실 및 CAD실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3151-00');">3151호 제어공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3159-00');">3159호 기계역학실험실</a></li>
                  </ul>
                </li>

                <!-- 기계공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-6-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3151-00');">3151호 제어공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3159-00');">3159호 기계역학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3156-00');">3156호 전산유체공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2151-00');">2151호 열공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2157-00');">2157호 유체공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2165-00');">2165호 열유체측정실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3155-00');">3155호 고체역학실험실</a></li>
                  </ul>
                </li>

                <!-- 기계설계공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계설계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-7-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2402-00');">2402호 3D프린팅실및실습실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2160-00');">2160호 자연모사공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2162-00');">2162호 생산기술응용실험실</a></li>
                  </ul>
                </li>

                <!-- 스마트자동차공학과 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>스마트자동차공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-8-0" class="depth-2">
                    <li><a href="#"></a></li>
                  </ul>
                </li> -->

                <!-- 전기공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전기공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-9-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2101-00');">2101호 컴퓨터응용연구실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2109-00');">2109호 전력전자실험실</a></li>
                    <!-- <li><a href="javascript:requestByMenu('I01-2213-00');">2213호 capstone design(1)</a></li> -->
                    <li><a href="javascript:requestByMenu('I01-2215-00');">2215호 전기기계실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3123-00');">3123호 전기전자정보 공동실험실1</a></li>
                    <li><a href="javascript:requestByMenu('I01-2107-00');">2107호 전력전자실험준비실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3133-00');">3133호 전기전자정보실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2306-00');">2306호 전기물성실험실</a></li>
                  </ul>
                </li>

                <!-- 전자공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-10-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3101-00');">3101호 마이크로프로세서실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3107-00');">3107호 임베디드응용실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3201-00');">3201호 전기전자정보 공동실험실2</a></li>
                    <li><a href="javascript:requestByMenu('I01-3221-00');">3221호 캡스톤디자인실</a></li>
                  </ul>
                </li>

                <!-- 전자융합공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자융합공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-11-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4151-00');">4151호 LINC-임베디드 실습실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4159-00');">4159호 LINC-3D프린팅융합설계실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4165-00');">4165호 LINC-3D FABLAB</a></li>
                    <li><a href="javascript:requestByMenu('I01-4122-00');">4122호 LINC-전자회로실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4164-00');">4164호 LINC-3D프린팅융합설계준비실</a></li>
                  </ul>
                </li>

                <!-- 정보통신공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>정보통신공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-12-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4123-00');">4123호 정보통신공학실험실</a></li>
                    <li><a href="javascript:requestByMenu('I01-4131-00');">4131호 실험준비실</a></li>
                  </ul>
                </li>

                <!-- 과학관 운영관리과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>과학관 운영관리과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-13-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2140-00');">2140호 공동전산실2(Eco-Green정보화실습실)</a></li>
                    <li><a href="javascript:requestByMenu('I01-2416-00');">2416호 공동전산실1</a></li>
                    <li><a href="javascript:requestByMenu('I01-2424-00');">2424호 공동전산실 전실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3322-00');">3322호 공동전산실3</a></li>
                    <li><a href="javascript:requestByMenu('I01-3330-00');">3330호 공동전산실4</a></li>
                    <li><a href="javascript:requestByMenu('I01-4416-00');">4416호 공동전산실5</a></li>
                    <li><a href="javascript:requestByMenu('I01-5153-00');">5153호 공동전산실7</a></li>
                    <li><a href="javascript:requestByMenu('I01-5161-00');">5161호 공동전산실6</a></li>
                    <li><a href="javascript:requestByMenu('I01-2424-02');">2424-2호 공동전산실사무실</a></li>
                  </ul>
                </li>

                <!-- 교무처 학사지원과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>교무처 학사지원과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-14-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1120-00');">1120호 일반물리학실험실B</a></li>
                    <li><a href="javascript:requestByMenu('I01-1134-00');">1134호 일반물리학실험실A</a></li>
                  </ul>
                </li>

                <!-- 창의공과대학 교학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>창의공과대학 교학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="5-15-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5160-00');">5160호 지능로봇실험실습실</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- 세미나실 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>세미나실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="6-0-0" class="depth-1">

                <!-- 건축학과 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-1-0" class="depth-2">
                    <li><a href="#"></a></li>
                  </ul>
                </li> -->

                <!-- 건축공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-2-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5309-00');">5309호 건축공학세미나실</a></li>
                  </ul>
                </li>

                <!-- 도시공학부 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>도시공학부</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-3-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4110-00');">4110호 세미나실A</a></li>
                  </ul>
                </li>

                <!-- 토목환경공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>토목환경공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-4-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1305-00');">1305호 세미나실</a></li>
                    <li><a href="javascript:requestByMenu('I01-1104-00');">1104호 Eco-Green전공학습역량개발실</a></li>
                  </ul>
                </li>

                <!-- 기계공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-5-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3355-00');">3355호 LINC+산학협력협의체실2</a></li>
                  </ul>
                </li>

                <!-- 기계설계공학과 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계설계공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-6-0" class="depth-2">
                    <li><a href="#"></a></li>
                  </ul>
                </li> -->

                <!-- 스마트자동차공학과 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>스마트자동차공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-6-0" class="depth-2">
                    <li><a href="#"></a></li>
                  </ul>
                </li> -->

                <!-- 전기공학과 -->
                <!-- <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전기공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-7-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2301-00');">2301호 PBL강의실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2303-01');">2303호 PBL강의실</a></li>
                  </ul>
                </li> -->

                <!-- 전자공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-8-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3333-00');">3333호 LINC+산학협력협의체실1</a></li>
                  </ul>
                </li>

                <!-- 정보통신공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>정보통신공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-9-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4339-00');">4339호 정보통신공학세미나실</a></li>
                  </ul>
                </li>

                <!-- 전자융합공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자융합공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-10-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4355-00');">4355호 LINC+산학협력협의체실3</a></li>
                  </ul>
                </li>

                <!-- 공과대학 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>창의공과대학</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="6-12-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1320-00');">1320호 창의공과대학 멀티미디어 세미나실</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- 연구소 및 사업단 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>연구소 및 사업단</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="7-0-0" class="depth-1">
                <!-- 정보전산원 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>정보전산원</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="7-1-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-2352-00');">2352호 정보전산원 원장실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2354-00');">2354호 정보전산원 회의실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2356-00');">2356호 정보전산원 사무실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2361-00');">2361호 시스템실1</a></li>
                    <li><a href="javascript:requestByMenu('I01-2357-00');">2357호 시스템실2</a></li>
                    <li><a href="javascript:requestByMenu('I01-2355-00');">2355호 시스템실3</a></li>
                    <li><a href="javascript:requestByMenu('I01-2363-00');">2363호 시스템프린터실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2365-00');">2365호 자료보관실</a></li>
                    <li><a href="javascript:requestByMenu('I01-2366-01');">2366호 정보전산원 창고</a></li>
                    <li><a href="javascript:requestByMenu('I01-2366-02');">2366-2호 정보전산원 탕비실</a></li>
                  </ul>
                </li>

                <!-- 산학협력실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>산학협력실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="7-2-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4303-00');">4303호 산학협력체실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3355-00');">3355호 LINC+산학협력협의체실2</a></li>
                    <li><a href="javascript:requestByMenu('I01-3333-00');">3333호 LINC+산학협력협의체실1</a></li>
                    <li><a href="javascript:requestByMenu('I01-4355-00');">4355호 LINC+산학협력협의체실3</a></li>
                    <!-- <li><a href="javascript:requestByMenu('I01-4303-00');">4303호 산학협력체실</a></li> -->
                  </ul>
                </li>

                <li><a href="javascript:requestByMenu('I01-2125-00');">2125호 공업기술개발연구소</a></li>
                <li><a href="javascript:requestByMenu('I01-2127-00');">2127호 중소기업산학협력센터</a></li>
                <li><a href="javascript:requestByMenu('I01-4301-00');">4301호 도시문화연구소</a></li>
                <li><a href="javascript:requestByMenu('I01-3364-00');">3364호 취업연계형인력양성 사업단실(자동차학사)</a></li>
                <li><a href="javascript:requestByMenu('I01-4314-02');">4314-2 드론사업단</a></li>
                <li><a href="javascript:requestByMenu('I01-2129-02');">2129-2 태양광인력양성 사업단실(전기공학과)</a></li>
              </ul>
            </li>

            <!-- 학회실 및 동아리실 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>학회실 및 동아리실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="8-0-0" class="depth-1">
                <!-- 건축학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-1-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5134-01');">5134호 출력실 및 건축학과 학생회실</a></li>
                  </ul>
                </li>

                <!-- 건축공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>건축공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-2-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5128-00');">5128호 건축공학과 학생회실</a></li>
                  </ul>
                </li>

                <!-- 도시공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>도시공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-3-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4109-00');">4109호 도시공학과학회실</a></li>
                  </ul>
                </li>

                <!-- 토목환경공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>토목환경공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-4-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1129-00');">1129호 토목공학과학회실</a></li>
                  </ul>
                </li>

                <!-- 기계자동차공학부 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>기계자동차공학부</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-5-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3414-00');">3414호 기계자동차공학부학회실</a></li>
                  </ul>
                </li>

                <!-- 전기공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전기공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-6-0" class="depth-2">
                    <!-- <li><a href="javascript:requestByMenu('I01-2123-00');">2123호 전기공학과 학생회실</a></li> -->
                    <li><a href="javascript:requestByMenu('I01-3133-01');">3133호 EES동아리실</a></li>
                  </ul>
                </li>

                <!-- 전자공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-7-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-3213-00');">3213호 전자공학과 학생회실</a></li>
                    <li><a href="javascript:requestByMenu('I01-3341-00');">3341호 WEIST동아리실</a></li>
                  </ul>
                </li>

                <!-- 정보통신공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>정보통신공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-8-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1323-00');">1323호 정보통신공학과 학생회실</a></li>
                    <li><a href="javascript:requestByMenu('I01-5146-00');">5146호 GEMF동아리실</a></li>
                  </ul>
                </li>

                <!-- 전자융합공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>전자융합공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-9-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-4166-00');">4166호 전자융합공학과학생회실</a></li>
                  </ul>
                </li>

                <!-- 컴퓨터소프트웨어공학과 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>컴퓨터소프트웨어공학과</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-9-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-5414-00');">5414호 컴퓨터소프트웨어공학과 동아리실</a></li>
                  </ul>
                </li>

                <!-- 창의공과대학 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>창의공과대학</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="8-8-0" class="depth-2">
                    <li><a href="javascript:requestByMenu('I01-1325-00');">1325호 창의공과대학 학생회실</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- 학과사무실 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>학과사무실</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="9-0-0" class="depth-1">
                <li><a href="javascript:requestByMenu('I01-2328-00');">2328호 공과대학학장실</a></li>
                <li><a href="javascript:requestByMenu('I01-5101-00');">5101호 건축학과사무실, 시청각자료실</a></li>
                <li><a href="javascript:requestByMenu('I01-5103-00');">5103호 건축공학과사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-4213-00');">4213호 도시공학과사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-3363-00');">3363호 기계자동차공학부사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-4414-00');">4414호 전자융합공학과사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-4338-00');">4338호 정보통신공학과사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-3325-01');">3325호 전자공학과사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-2129-02');">2129호 전기공학과사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-5363-00');">5363호 헬스케어기술개발사무실</a></li>
                <li><a href="javascript:requestByMenu('I01-1110-00');">1110호 Eco-Green특성화사업단</a></li>
                <li><a href="javascript:requestByMenu('I01-2322-00');">2322호 공대교학과</a></li>
                <li><a href="javascript:requestByMenu('I01-2328-00');">2328호 공학교육원</a></li>
                <li><a href="javascript:requestByMenu('I01-3364-00');">3364호 취업연계형인력양성사업단실(자동차학사)</a></li>
                <li><a href="javascript:requestByMenu('I01-1329-00');">1329호 교학창고</a></li>
                <li><a href="javascript:requestByMenu('I01-2337-00');">2337호 진로및취업상담실</a></li>
              </ul>
            </li>

            <!-- 독서실 및 쉼터 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>독서실 및 쉼터</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="9-1-0" class="depth-2">
                <li><a href="javascript:requestByMenu('I01-2122-00');">2122호 공과대학도서실</a></li>
                <li><a href="javascript:requestByMenu('I01-1133-00');">1133호 휴게실</a></li>
              </ul>
            </li>

            <!-- 기타 -->
            <li class="sub-menu">
              <a href="javascript:void(0);">
                <span>기타</span>
                <i class="arrow fa fa-angle-right pull-right"></i>
              </a>
              <ul id="9-2-0" class="depth-2">
                <li><a href="javascript:requestByMenu('I01-1333-00');">1333호 공학관 관리실</a></li>
                <li><a href="javascript:requestByMenu('I01-1341-00');">1341호 청소관리실</a></li>
                <li><a href="javascript:requestByMenu('I01-1345-00');">1345호 창고1</a></li>
                <li><a href="javascript:requestByMenu('I01-1346-00');">1346호 창고2</a></li>
                <li><a href="javascript:requestByMenu('I01-1133-00');">1133호 휴게실</a></li>
                <li><a href="javascript:requestByMenu('I01-1141-00');">1141호 복사실</a></li>

                <!-- 화장실 -->
                <li class="sub-menu">
                  <a href="javascript:void(0);">
                    <span>화장실</span>
                    <i class="arrow fa fa-angle-right pull-right"></i>
                  </a>
                  <ul id="9-2-1" class="depth-3">
                    <li><a href="#">1층</a></li>
                    <li><a href="#">2층</a></li>
                    <li><a href="#">3층</a></li>
                    <li><a href="#">4층</a></li>
                    <li><a href="#">5층</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="main-content">
        <header>
          <a href="#" class="bread_wrap">
            <img data-toggle=".container" id="sidebar-toggle" src="./img/bread_menu.png">
          </a>
          <div class="prev_btn_wrap">
            <a href="javascript:window.history.back();">
              <img src="./img/prev_btn.png" alt="">
            </a>
          </div>
        </header>
        <section>
          <div class="logo_wrap">
            <img src="./img/wku_logo.jpg" alt="">
          </div>
          <div class="search_display_outer">
            <div class="search_display_inner">
              <font id="search_display"></font>
            </div>
          </div>
          <center>
            <div id="search_list" class="list_wrap">
            </div>
          </center>
        </section>
        <footer>
          <div class="developBy">
              Developed By Artineer
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
