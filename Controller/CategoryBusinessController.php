<?php
    $act="CategoryBusinessController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'CategoryBusiness':
            include "../../View/back/CategoryBusiness.php";
            break;
        case 'insert':
            include '../../View/back/AddCategoryBusiness.php';
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $description=$_POST['description'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $image=$_FILES['image']['name'];
            $url=$_POST['url'];
            $categorybusiness=new CategoryBusiness();
            $check=$categorybusiness->insert($name,$description,$phone,$email,$image,$url);
            if($check!==false){
                uploadimage();
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/CategoryBusiness.php";
            }else{
                echo "<script>alert('Thêm không thành công!')</script>";
                include "../../View/back/AddCategoryBusiness.php";
            }
            break;
        case "edit":
            include '../../View/back/EditCategoryBusiness.php';
            break;
        case "edit_action":
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $description=$_POST['description'];
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $image=$_FILES['image']['name'];
                $url=$_POST['url'];
                $categorybusiness=new CategoryBusiness();
                $check=$categorybusiness->update($id,$name,$description,$phone,$email,$image,$url);
                if($check!==false){
                    uploadimage();
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    include "../../View/back/CategoryBusiness.php";
                }else{
                    echo "<script>alert('Cập nhật không thành công!')</script>";
                    include "../../View/back/EditCategoryBusiness.php";
                }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $categorybusiness=new CategoryBusiness();
                $categorybusiness->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                include "../../View/back/CategoryBusiness.php";
            }
    }
?>