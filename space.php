<!DOCTYPE html>
<html>
  <head>
    <title>ECGUIDE</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=720">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js?ver=1"></script>
    <script src="./script/jquery.touchSwipe.min.js?ver=1"></script>
    <script src="./script/space.js?ver=1"></script>

    <!-- COMMON -->
    <link rel="stylesheet" href="./style/common/space.css?ver=1">
    <link rel="stylesheet" href="./style/common/scrollbar.css?ver=1">

    <!-- PAD -->
    <link rel="stylesheet" href="./style/pad/space_p.css?ver=1">

    <!-- DESKTOP -->
    <link rel="stylesheet" href="./style/desktop/space_d.css?ver=1">

    <!-- KIOSK -->
    <link rel="stylesheet" href="./style/kiosk/space_k.css?ver=1">
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
        <iframe id="ifr" frameborder="0" scrolling="no"></iframe>
      </section>
      <footer>
        <div class="developBy">
            Developed By Artineer
        </div>
      </footer>
    </div>
  </body>
</html>
