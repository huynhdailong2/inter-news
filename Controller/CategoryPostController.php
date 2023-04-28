<?php
    $act="CategoryPostController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case "CategoryPost":
            include "../../View/back/CategoryPost.php";
            break;
        case "insert":
            include "../../View/back/AddCategoryPost.php";
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $slug=$_POST['slug'];
            $icon=$_POST['icon'];
            $description=$_POST['description'];
            $categoryPost=new CategoryPost();
            $check=$categoryPost->insert($name,$slug,$icon,$description);
            if($check!==false){
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/CategoryPost.php";
            }else{
                echo "<script>alert('Thêm không thành công,Vui lòng nhập lại!')</script>";
                include "../../View/back/AddCategoryPost.php";
            }
            break;
        case 'edit':
            include "../../View/back/EditCategoryPost.php";
            break;
        case 'edit_action':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $slug=$_POST['slug'];
                $icon=$_POST['icon'];
                $description=$_POST['description'];
                $categoryPost=new CategoryPost();
                $check=$categoryPost->update($id,$name,$slug,$icon,$description);
                if($check!==false){
                    echo '<script>alert ("Cập nhật thành công !!")</script>';
                    include "../../View/back/CategoryPost.php";
                }else{
                    echo '<script>alert ("Cập nhật thành công !!")</script>';
                    include "../../View/back/EditCategoryPost.php";
                }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $categoryPost=new CategoryPost();
                $categoryPost->delete($id);
                echo "<script>alert('Xoá thành công')</script>";
                include "../../View/back/CategoryPost.php";
            }
    }
?>  