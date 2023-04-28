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
        <span style="color:gray;"><a style="color:gray;" href="index.php?action=license&act=giayphep">License</a></span>
        <span style="color:gray;">></span>
        <span style="color:blue;">License Details</span>
        </div>
        <a style="margin-top:20px;" href="index.php?action=license&act=giayphep" type="button" class="btn btn-default">Back</a>
        <div class="col-12">
            <h1 style="padding-bottom:20px;color:blue">Thông Tin Giấy Phép</h1>
        </div>
        <div class="row">
            <?php
               if(isset($_GET['id'])){
                $id=$_GET['id'];
                $gp=new license();
                $result=$gp->getGpId($id);
                $gp_id=$result['gp_id'];
                $gp_name=$result['gp_name'];
                $gp_disc=$result['gp_disc'];
                $gp_phone=$result['gp_phone'];
                $gp_email=$result['gp_email'];
                $image=$result['image'];
               }
            ?>
            <div class="col-md-4 col-4 col-sm-5">
                <img style="border:1px solid black;" width="200" name="image" height="200" src="Content/images/<?php if(isset($image)) echo $image;?>" alt="">
            </div>
            <div class="col-md-8 col-8 col-sm-7">
                <p name="gp_name" class="ten">Tên Giấy Phép: <?php if(isset($gp_name)) echo $gp_name;?></p>
                <p name="gp_disc">Dịch Vụ: <?php if(isset($gp_disc)) echo $gp_disc;?></p>
                <p name="phone_phone">Phone: <?php if(isset($gp_phone)) echo $gp_phone;?></p>
                <p name="gp_email">Email: <?php if(isset($gp_email)) echo $gp_email;?></p>
            </div>
            
        </div>
        </section>
