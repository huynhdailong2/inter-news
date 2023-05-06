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
            //danh muc trang con ( giới thiệu )
        case 'gioithieu_thuonghieuluatvietan':
            include "./View/front/danhmuc_gioithieu/thuonghieuluatvietan.php";
            break;
        case 'gioithieu_chinhsachbaomatthongtin':
            include "./View/front/danhmuc_gioithieu/chinhsachbaomatthongtin.php";
            break;
        case 'gioithieu_congtyluattaivietnam':
            include "./View/front/danhmuc_gioithieu/congtyluattaivietnam.php";
            break;
        case 'gioithieu_danhgiacuacoquanquanly':
            include "./View/front/danhmuc_gioithieu/danhgiacuacoquanquanly.php";
            break;
        case 'gioithieu_tuyendung':
            include "./View/front/danhmuc_gioithieu/tuyendung.php";
            break;
            //danh muc trang con ( doanh nghiep )
        case 'doanhnghiep_thanhlapcongtydoanhnghiep':
            include "./View/front/danhmuc_doanhnghiep/thanhlapcongty_doanhnghiep.php";
            break;
        case 'doanhnghiep_thaydoidangkykinhdoanh':
            include "./View/front/danhmuc_doanhnghiep/thaydoidangkykinhdoanh.php";
            break;
        case 'doanhnghiep_thanhlapchinhanhcongty':
            include "./View/front/danhmuc_doanhnghiep/thanhlapchinhanhcongty.php";
            break;
        case 'doanhnghiep_thutucchuyendoiloaihinhdoanhnghiep':
            include "./View/front/danhmuc_doanhnghiep/thutucchuyendoiloaihinhdoanhnghiep.php";
            break;
        
        
    }
?>