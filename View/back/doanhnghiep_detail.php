<style>
    div h1{
        text-align:center;
    }
    p{
        font-size:20px;
        text-align:left;
        margin-left:50px;
    }
</style>
        <section style="padding:100px;margin-left:150px;">
        <div class="link-page">
        <span style="color:gray;"><a style="color:gray;" href="index.php?action=doanhnghiep&act=doanhnghiep">Tư Vấn Doanh nghiệp</a></span>
        <span style="color:gray;">></span>
        <span style="color:blue;">Chi Tiết Tư Vấn Doanh Nghiệp</span>
        </div>
        <a style="margin-top:20px;" href="index.php?action=doanhnghiep&act=doanhnghiep" type="button" class="btn btn-default">Back</a>
        <div class="col-12">
            <h1 style="padding-bottom:20px;color:blue">Thông Tin Tư Vấn Doanh Nghiệp</h1>
        </div>
        <div class="row">
            <?php
               if(isset($_GET['id'])){
                $id=$_GET['id'];
                $dn=new doanhnghiep();
                $result=$dn->getDnId($id);
                $dn_id=$result['dn_id'];
                $dn_name=$result['dn_name'];
                $dn_disc=$result['dn_disc'];
                $dn_phone=$result['dn_phone'];
                $dn_email=$result['dn_email'];
                $image=$result['image'];
               }
            ?>
            <div class="col-md-4 col-4 col-sm-5">
                <img style="border:1px solid black;" width="200" name="image" height="200" src="Content/images/<?php if(isset($image)) echo $image;?>" alt="">
            </div>
            <div class="col-md-8 col-8 col-sm-7">
                <p name="gp_name" class="ten">Tên TVDN: <?php if(isset($dn_name)) echo $dn_name;?></p>
                <p name="gp_disc">Dịch Vụ: <?php if(isset($dn_disc)) echo $dn_disc;?></p>
                <p name="phone_phone">Phone: <?php if(isset($dn_phone)) echo $dn_phone;?></p>
                <p name="gp_email">Email: <?php if(isset($dn_email)) echo $dn_email;?></p>
            </div>
            <div class="col-12">
            <h2 style="float:left;padding-bottom:20px;color:blue">Bài viết liên quan <?php if(isset($dn_name)) echo $dn_name;?> </h2>
        </div>
        
        </div>
        </section>
