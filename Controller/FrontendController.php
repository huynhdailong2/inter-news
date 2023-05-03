<?php
    $act="FrontendController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'gioithieu':
            include "./View/front/gioithieu_trangchu.php";
            break;
        case 'doanhnghiep':
            include "./View/front/doanhnghiep_trangchu.php";
            break;
        case 'dautu':
            include "./View/front/dautu_trangchu.php";
            break;
        case 'giayphep':
            include "./View/front/giayphep_trangchu.php";
            break;
        case 'sohuutritue':
            include "./View/front/sohuutritue_trangchu.php";
            break;
        case 'vuviecvuan':
            include "./View/front/vuviec-vuan_trangchu.php";
            break;
        case 'ketoan-thue':
            include "./View/front/ketoan-thue.php";
            break;

    }
?>