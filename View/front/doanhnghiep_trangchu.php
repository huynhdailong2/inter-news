<style>
    <?php
        include "./Assets/front/css/style.css";
    ?>
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_Business();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div class="gioithieu" style="background: rgb(251, 255, 251);">
    <h3 style="color: green; text-align: center;">TƯ VẤN PHÁP LUẬT DOANH NGHIỆP</h3>
    <p>
        Một doanh nghiêp muốn tồn tại và phát triển tốt thì phải dựa trên các quy phạm pháp luật để tạo dựng nên một cơ
        sở nền
        móng vững chắc về nguồn lực trong quá trình thực hiện các hoạt động kinh doanh. Tất các các nguồn lực cốt lõi
        như nguồn nhân lực,
        tài chính, cơ sở hạ tầng, máy móc, trang thiết bị, nhà xưởng, công nghệ, sản phẩm trí tuệ, bí quyết kinh doanh
        …đều được xây dựng
        có sự ràng buộc pháp lý… Để xây dựng các mối quan hệ chặt chẽ cho các nguồn lực của doanh nghiệp, doanh nghiệp
        phải dựa trên các quy
        phạm pháp luật để điều chỉnh các muốn quan hệ pháp luật đó để phục vụ tốt nhất cho quá trình hoạt động kinh
        doanh.
        <br>
        Công ty luật Việt An với kinh nghiệm chuyên sâu và chuyên nghiệp chúng tôi sẽ cung cấp cho doanh nghiệp những
        giải pháp pháp ly tối ưu nhất,
        qua đó giúp cho doanh nghiệp có sự ổn định trong kinh doanh, tránh được những rui ro pháp lý có thể xẩy ra trong
        tương lai cũng như xây dựng
        phát triển bền vững cho doanh nghiệp trên con đường kinh doanh tại Việt Nam cũng như hội nhập thị trường quốc
        tế.
    </p>
    <img src="./Assets/front/images/doanhnghiep_trangchu.jpg" style="width: 100%;">
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">DỊCH VỤ TƯ VẤN PHÁP LUẬT DOANH NGHIỆP</a>
        </span>
    </div>
    <!--Phần hiển thị thông tin database-->
    <div class="row">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryBusiness();
          while($set=$result->fetch()):
        ?>
        <div class="col-lg-3 col-md-4 mb-3 text-left form-all">
            <!--Thẻ hình ảnh-->
            <div class="view overlay z-depth-1-half">
                <img width="380" height="280" style="max-width:100%"
                    src="./Assets/back/images/<?php echo $set['image']?>" alt="">
            </div>
            <!--Thẻ tên-->
            <p class="font-weight-bold form-name"><?php echo $set['name']?></p>
            <div class="form-in4">
                <p>
                    <strong><?php echo $set['description']?></strong>
                </p>
                <p>Phone:<?php echo $set['phone']?></p>
                <p>Email:<?php echo $set['email']?></p>
            </div>
            <a href="#" class="link" title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
        </div>
        <?php
          endwhile;
        ?>
    </div>
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">BÀI VIẾT LIÊN QUAN ĐẾN TƯ VẤN DOANH NGHIỆP</a>
        </span>
    </div>
    <div class="relate">
      <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->Business_pagination($start,$limit);
        while($set=$result->fetch()):
      ?>
      <div class="cate-related">
          <div class="title">
              <a href="<?php echo $set['url']?>" title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
          </div>
          <div class="desc">
              <p><?php echo $set['description']?></p>
          </div>
          <div class="more">
              <a href="<?php echo $set['url']?>" title="<?php echo $set['name']?>">Xem chi tiết</a>
          </div>  
      </div>
      <?php
        endwhile;
      ?>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-md-offset-3" style="margin-left:450px;">
        <ul class="pagination">
        <?php
                    // nút lùi
                    if($current_page > 1 && $page > 1){
                        echo '<li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="tu-van-doanh-nghiep'.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                    <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="tu-van-doanh-nghiep<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="tu-van-doanh-nghiep'.($current_page+1).'">Next</a></li>';
                        }
                    ?>
        </ul>
    </div>
</div>