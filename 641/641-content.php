<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="mod-custom-1">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img alt="" src="images/8.png"></div>
                <div class="swiper-slide"><img alt="" src="images/9.png"></div>
                <div class="swiper-slide"><img alt="" src="images/10.png"></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next">&#10095;</div>
            <div class="swiper-button-prev">&#10094;</div>
        </div>
    </div>
    
    <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
