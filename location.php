<!DOCTYPE html>
<html>
  <head>
    <title>ECGUIDE</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="./script/jquery.touchSwipe.min.js"></script>
    <script src="./script/slide.js"></script>
    <script src="./script/search_fnr.js"></script>
    <script src="./script/location.js"></script>

    <!-- COMMON -->
    <link rel="stylesheet" href="./style/common/location.css?ver=1">
    <link rel="stylesheet" href="./style/common/scrollbar.css?ver=1">

    <!-- PAD -->
    <link rel="stylesheet" href="./style/pad/location_p.css?ver=1">

    <!-- DESKTOP -->
    <link rel="stylesheet" href="./style/desktop/location_d.css?ver=1">

    <!-- KIOSK -->
    <link rel="stylesheet" href="./style/kiosk/location_k.css?ver=1">
  </head>
  <body>
    <div class="main-content">
      <header>
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
        <center><div class="link_wrap">
          <span>창의공과대학 길찾기 안내시스템<br></span><span>(http://ecguide.wku.ac.kr)</span>
        </div></center>
        <div class="title_wrap">
          <div id="location_name"></div>
        </div>
        <div class="floor_wrap">
          <div id="floor_value"></div>
        </div>
        <div class="path_wrap">
          <a href="javascript:goSpacePHP();">
            <img id="path_img" src=""/>
          </a>
        </div>
        <div id="qr_code" class="btn">
            <a href="#"><img src="./img/ecguide_qr_colored.png" alt="qr_code"></a>
        </div>
      </section>
      <footer>
        <div class="developBy">
            Developed By Artineer
        </div>
      </footer>
    </div>
  </body>
</html>
