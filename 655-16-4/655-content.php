<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="container">
        <div class="row">
            <div class="box_mid">
                <div class="mid-title">
                    <div class="titleL"><h1>Giới thiệu</h1></div>
                    <div class="titleR"></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="mid-content col-md-12 col-sm-6 col-xs-12">
                <div class='menu-category'  >
                    <ul >
                        <li class="current" ><a class='active hovers_effect hovers_effect1'><span class='hovers_text'>Giới thiệu</span></a></li>
                        <li><a class='hovers_effect' href="#"><span class='hovers_text'>Triết lý hoạt động</span></a></li>
                        <li><a class='hovers_effect' href="#"><span class='hovers_text'>Lịch sử hình thành</span></a></li>
                        <li><a class='hovers_effect' href="#"><span class='hovers_text'>Hệ thống phân phối</span></a></li>
                        <li><a class='hovers_effect' href="#"><span class='hovers_text'>Đội ngũ nhân sự</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
