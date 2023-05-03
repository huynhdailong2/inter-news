<style>
   <?php
        include "./Assets/front/css/style.css";
    ?>
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_IntellectualProperty();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div class="gioithieu" style="background: rgb(251, 255, 251);">
    <h3 style="color: green; text-align: center;">TƯ VẤN SỞ HỮU TRÍ TUỆ</h3>
    <p>
        Công ty Luật Việt An được khách hàng biết đến không chỉ là một đơn vị cung cấp dịch vụ pháp lý mà còn là một Tổ chức đại diện sở hữu trí
        tuệ hoạt động hợp pháp và có uy tín tại Việt Nam.
        <br>
        Được thành lập và hoạt động hợp pháp từ năm 2007 Tổ chức đại diện sở hữu trí tuệ -Công ty Luật Việt An đã tư vấn cho hàng ngàn lượt
        đơn đăng ký, gia hạn, chuyển nhượng quyền sở hữu trí tuệ, khiếu nại liên quan đến quyền sở hữu trí tuệ mỗi năm tại Việt Nam cũng như
        đăng ký quyền sở hữu trí tuệ cho doanh nghiệp tại nước ngoài tại Việt Nam, tư vấn pháp luật sở hữu trí tuệ và đăng ký quyền sở hữu trí
        tuệ từ Việt Nam ra nước ngoài.
        <br>
        Ngoài ra, hàng năm dịch vụ tư vấn pháp luật sở hữu trí tuệ của Công ty luật Việt An đã giúp các doanh nghiệp xử lý hàng trăm vụ tranh chấp
        về quyền sở hữu trí tuệ, tư vấn xử lý hành vi cạnh tranh không lành mạnh liên quan đến quyền sở hữu trí tuệ của các doanh nghiệp.
        <br>
        Với đội ngũ luật sư và người đại diện sở hữu trí tuệ có chuyên môn giỏi, kinh nghiệm hành nghề nhiều năm, có trách nhiệm nghề nghiệp và 
        chuyên nghiệp trong công việc Luật Việt An tin tưởng rằng sẽ đem đến cho Quý khách hàng các dịch vụ tư vấn pháp luật sở hữu trí tuệ hoàn 
        hảo nhất, nhanh nhất và hiệu quả nhất nhằm giúp doanh nghiệp bảo vệ được tài sản sở hữu trí tuệ của mình tại Việt Nam và các quốc gia trên 
        thế giới.
    </p>
    <img src="./Assets/front/images/ls-so-huu-tri-tue_trangchu.jpg" style="width: 100%;">
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">DỊCH VỤ TƯ VẤN SỞ HỮU TRÍ TUỆ</a>
        </span>
    </div>
     <!--Phần hiển thị thông tin database-->
     <div class="row">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryIntellectualProperty();
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
            <a href="">BÀI VIẾT LIÊN QUAN</a>
        </span>
    </div>
    <div class="relate">
      <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->IntellectualProperty_pagination($start,$limit);
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
                        border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=sohuutritue&page='.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                    <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=sohuutritue&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=sohuutritue&page='.($current_page+1).'">Next</a></li>';
                        }
                    ?>
        </ul>
    </div>
</div>