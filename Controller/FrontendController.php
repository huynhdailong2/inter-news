<?php
    $act="FrontendController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'gioithieu':
            include "./View/front/gioithieu_trangchu.php";
            break;
        case 'trangchu':
            include "./View/front/home.php";
            break;
    }
?>