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
        <span style="color:gray;"><a style="color:gray;" href="index.php?action=information">Information</a></span>
        <span style="color:gray;">></span>
        <span style="color:blue;">Information Details</span>
        </div>
        <a style="margin-top:20px;" href="index.php?action=information" type="button" class="btn btn-default">Back</a>
        <div class="col-12">
            <h1 style="padding-bottom:20px;color:blue">Thông Tin Thành Viên</h1>
        </div>
        <div class="row">
            <?php
               if(isset($_GET['id'])){
                $id=$_GET['id'];
                $in4=new information();
                $result=$in4->getIn4Id($id);
                $in4_id=$result['in4_id'];
                $in4_name=$result['in4_name'];
                $level_name=$result['level_name'];
                $in4_phone=$result['in4_phone'];
                $in4_email=$result['in4_email'];
                $skype=$result['skype'];
                $image=$result['image'];
               }
            ?>
            <div class="col-md-4 col-4 col-sm-5">
                <img width="200" name="image" height="200" src="Content/images/<?php if(isset($image)) echo $image;?>" alt="">
            </div>
            <div class="col-md-8 col-8 col-sm-7">
                <p name="in4_name" class="ten">Họ và Tên: <?php if(isset($in4_name)) echo $in4_name;?></p>
                <p name="level_name">Chức Vụ: <?php if(isset($level_name)) echo $level_name;?></p>
                <p name="in4_phone">Phone: <?php if(isset($in4_phone)) echo $in4_phone;?></p>
                <p name="in4_email">Email: <?php if(isset($in4_email)) echo $in4_email;?></p>
                <p name="skype">Skype: <?php if(isset($skype)) echo $skype;?></p>
            </div>
            
        </div>
        </section>
