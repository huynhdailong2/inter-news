<?php
    $act="PositionController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'positions':
            include '../../View/back/Positions.php';
            break;
        case 'insert':
            include '../../View/back/AddPositions.php';
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $name=$_POST['description'];
            $Positions=new Positions();
            $check=$Positions->insert($name,$description,$datecreate);
            if($check!=false){
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/Positions.php";
            }else{
                echo "<script>alert('Thêm không thành công!')</script>";
                include "../../View/back/AddPosition.php";
            }
            break;
        case 'edit':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $description=$_POST['description'];
                $Positions=new Positions();
                $check=$Positions->update($id,$name,$description);
                if($check!=false){
                    echo "<script>alert('Update thành công!')</script>";
                    include "../../View/back/Positions.php";
                    }else{
                        echo "<script>alert('Update không thành công!')</script>";
                        include "../../View/back/EditPosition.php";
                    }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $Positions=new Positions();
                $Positions->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                    include "../../View/back/Positions.php";
            }
            break;
            
    }
?>