<style>
h3 {
    font-weight: 400;
}

span.gioithieu-tv a {
    margin-top: 20px;
    font-size: 1.5em;
    font-weight: bold;
    color: #ff6600;
    text-align: center
}

span.gioithieu-tv {}

.gioithieu-full {
    position: relative;
    padding-bottom: 20px;
    margin-top: 20px;

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
    font-size: 18px;
    font-weight: 600;
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

a.link {
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
}

div.cate-related div.title a {
    color: #00578a;
    text-decoration: none;
    font-size: 20px;
    line-height: 26px;
    font-weight: 600;
}
div.cate-related .desc{
  margin-top: 5px;
}
div.cate-related .more{
  font-size: 13px;
  font-weight: 600;
  margin-top: 5px;
}
div.cate-related .more a{
  color:#268c52;
  line-height: 13px;
}
div.cate-related{
  border-bottom:1px dashed #dcdcdc;
    padding-bottom: 10px;
    margin-bottom: 10px;
    align-items: center;
}
.relate{
  width:100%;
}
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_Doanhnghiep();
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
          $CategoryBusiness=new CategoryBusiness();
          $result=$CategoryBusiness->CategoryBusinessAll($start,$limit);
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
        $result=$CategoryRelated->Doanhnghiep_pagination($start,$limit);
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
                        border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=doanhnghiep&page='.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                    <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=doanhnghiep&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="index.php?action=FrontendController&act=doanhnghiep&page='.($current_page+1).'">Next</a></li>';
                        }
                    ?>
        </ul>
    </div>
</div>