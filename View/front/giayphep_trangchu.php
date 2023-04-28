<style>
span.gioithieu-tv a {
    margin-top: 20px;
    font-size: 1.5em;
    font-weight: bold;
    color: #ff6600;
    text-align: center;
}

.gioithieu-full {
    position: relative;
    padding-bottom: 20px;

}

.gioithieu-full::after {
    margin-left: auto;
    margin-right: auto;
    content: "";
    width: 280px;
    height: 2px;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0), #268c52, rgba(255, 255, 255, 0));
    display: block;
    clear: both;
    margin-top: 5px;
}

.form-all {
    display: flex;
    flex-flow: wrap;
    position: relative;
    transition: all 500ms ease;
}

.form-name {
    text-transform: uppercase;
    width: 100%;
    color: #00578a;
    font-size: 16px;
    font-weight: 700;
    margin-top: 6px;
    margin-bottom: 0px;
}

.form-in4 {
    width: 100%;
    font-size: 15px;
    line-height: 22px;
}

p {
    margin: 0 0 8px 0;
    margin-bottom: 0px;
}

.p-title {
    margin-bottom: 10px;
}

hr {
    color: gray;
}
a.a-for-link{
  position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    font-size: 0;
    z-index: 55;
    border: 0;
    background: repeat;
    outline: none;
    cursor: pointer;
    text-decoration: none;
    transition: all 300ms ease;
}
</style>
<hr>
<div class="gioithieu" style="background: rgb(251, 255, 251);">
    <h3 style="color: green; text-align: center;">DỊCH VỤ XIN GIẤY PHÉP CON</h3>
    <p class="p-title">
        Thành lập công ty, doanh nghiệp là bước khởi đầu cho quá trình thực hiện hoạt động kinh doanh cho doanh nghiệp.
        Có rất nhiều ngành nghề
        không cần phải xin phép hoạt động cho ngành nghề kinh doanh mà chỉ cần có giấy phép đăng ký kinh doanh là có thể
        thực hiện được các hoạt
        động kinh doanh. Theo quy định của pháp luật Việt Nam có 243 ngành nghề kinh doanh có điều kiện, trong số đó có
        rất nhiều ngành nghề phải
        thực hiện xin giấy phép con mới đủ điều kiện để kinh doanh theo quy định của pháp luật.
    </p>
    <p class="p-title">
        Doanh nghiệp muốn xin được các giấy phép con phải đáp ứng đủ các điều kiện do luật định và phải thực hiện đúng
        trình tự thủ tục xin được
        cấp phép giấy phép con từ các cơ quan chức năng có thẩm quyền quản lý trực tiếp ngành nghề kinh doanh đó. Trên
        cơ sở nhu cầu xin giấy phép
        của doanh nghiệp, Công ty Luật Việt An cung cấp dịch vụ xin giấy phép con dưới đây.
    </p>
    <img style="padding-bottom:30px;" src="./Content/img/Giay-phep-con_trangchu.jpg" style="width: 100%;">
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a class="a-title" href="">DỊCH VỤ GIẤY PHÉP KINH DOANH (GIẤY PHÉP CON)</a>
        </span>
    </div>
    <!--Phần hiển thị thông tin database-->
    <div class="row">
        <?php
          $gp=new licensefe();
          $result=$gp->showlicense();
          while($set=$result->fetch()):
        ?>
        <div class="col-lg-3 col-md-4 mb-3 text-left form-all">
            <!--Thẻ hình ảnh-->
            <div class="view overlay z-depth-1-half">
                <img width="380" height="280" style="max-width:100%"
                    src="admin/Content/images/<?php echo $set['image']?>" alt="">
                <noscript>
                    <img width="380" height="280" style="max-width:100%"
                        src="admin/Content/images/<?php echo $set['image']?>" alt="">
                </noscript>
            </div>
            <!--Thẻ tên-->
            <h5 class="font-weight-bold form-name"><?php echo $set['gp_name']?></h5>
            <div class="form-in4">
                <p>
                    <strong><?php echo $set['gp_disc']?></strong>
                </p>
                <p>Phone: <?php echo $set['gp_phone']?></p>
                <p>Email: <?php echo $set['gp_email']?></p>
            </div>
            <?php echo $set['link_details']?>
        </div>
        <?php
          endwhile;
        ?>
    </div>
</div>