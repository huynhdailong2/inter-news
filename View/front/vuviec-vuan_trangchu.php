<style>
    <?php
        include "./Assets/front/css/style.css";
    ?>
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_VVVA();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div class="gioithieu" style="background: rgb(251, 255, 251);">
      <h3 style="color: green; text-align: center;">VỤ VIỆC, VỤ ÁN, GIẢI QUYẾT TRANH CHẤP</h3>
      <p style="font-size: 15px;">
        Công ty Luật Việt An với đội ngũ luật sư giàu kinh nghiệm, am hiểu về pháp luật pháp luật dân sự, hợp đồng, kinh doanh thương mại, 
        lao động, sở hữu trí tuệ, thuế, tài chính-ngân hàng, doanh nghiệp,... Công ty Luật Việt An tự hào là một công ty luật có uy tín trong 
        việc thực hiện dịch vụ tư vấn, giải quyết tranh chấp như: tranh chấp dân sự, tranh chấp hợp đồng, tranh chấp đất đai, ở hữu trí tuệ,… 
        đặc biệt là các tranh chấp kinh doanh thương mại, tranh chấp nội bộ doanh nghiệp. Chúng tôi tự hào đã tư vấn toàn diện các thủ tục pháp 
        lý, đại diện khách hàng thực hiện giải quyết các tranh chấp liên thông qua hình thức thương lượng, hòa giải cũng như tiến hành các thủ 
        tục tố tụng tại cơ quan toà án, trọng tài. Đại diện cho khách hàng, cá nhân, doanh nghiệp, thương nhân nước ngoài thực hiện thủ tục thi 
        hành án tại Việt Nam.
        <br>
      </p>
      <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">DỊCH VỤ TƯ VẤN PHÁP LUẬT LIÊN QUAN</a>
        </span>
    </div>
       <!--Phần hiển thị thông tin database-->
       <div class="row">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryVVVA();
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
    <div class="relate" style="text-align:left;">
      <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->VVVA_pagination($start,$limit);
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
                        border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=vuviecvuan&page='.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                    <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=vuviecvuan&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=vuviecvuan&page='.($current_page+1).'">Next</a></li>';
                        }
                    ?>
        </ul>
    </div>
  </div>