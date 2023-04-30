<style>
  .click{
    color:#ff9800;
  }
  body .header-content.fixed .logo-img img {
  max-height: 50px;
  width: auto;
  transition: all 365ms ease
}
.header-content.fixed {
  position: fixed;
  top: 0;
  max-width:1200px;
  width:100%;
  left: 50%;
  transform: translatex(-50%);
  z-index: 999;
  box-shadow: 0 5px 5px 0 rgba(0,0,0,.25);

}
</style>
<section id="main_header" class="head-menu  hide-col" >
  <div class="menu-container-row head-col header-content">
    <div class="menu-head-logo logo-img">
      <div class="thumb">
        <img width="186" height="90" src="./Assets/front/images/logocopy.png" alt="">
      </div>
      <a href="#" class="link" title="Công ty Cổ phần Vinasimex">
        <span class="link-title">Công ty Cổ phần Vinasimex</span>
      </a>
    </div>
    <div id="menu_header" class="vnsm-elm menu-header vnsm-menu">
      <a href="#" class="close-menu" onclick data-toggle="modal" data-target="#menu_header">
        <i class="fa-times"></i>
      </a>
      <ul class="vnsm-title prog-container" id="nav_header">
        <li class="menu-item menu-item-post-type menu-li1">
          <a class="hasub menu_link a-ac nav-link active" style="color:#00578a;" href="index.php?action=home">TRANG CHỦ</a>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="index.php?action=link&act=gioithieu" class="hasub menu_link" >GIỚI THIỆU</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
              $categoryPost=new CategoryPost();
              $result=$categoryPost->showCategoryGT();
              while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
                <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="#" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php endwhile; ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="index.php?action=link&act=doanhnghiep" class="hasub menu_link a-ac">DOANH NGHIỆP</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Thành lập Công ty / Doanh nghiệp</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thành lập Công ty</a>
              </div>
              <div class="item item-1 current">
              <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Đăng ký kinh doanh</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Đăng ký kinh doanh</a>
              </div>
              <div class="item item-1 current">
              <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Thay đổi đăng ký kinh doanh</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thay đổi đăng ký kinh doanh</a>
              </div>
              <div class="item item-1 current">
              <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Tư vấn pháp luật thường xuyên</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn pháp luật thường xuyên</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Thành lập chi nhánh công ty</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thành lập chi nhánh công ty</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Thành lập văn phòng đại diện</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thành lập văn phòng đại diện</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Thủ tục chuyển đổi loại hình doanh nghiệp</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thủ tục chuyển đổi loại hình doanh nghiệp</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Tư vấn mua bán doanh nghiệp</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn mua bán doanh nghiệp</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Giải thể doanh nghiệp</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giải thể doanh nghiệp</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Dịch vụ luật sư riêng cho doanh nghiệp</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Dịch vụ luật sư riêng cho doanh nghiệp</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Tư vấn hợp đồng</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn hợp đồng</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Tư vấn thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn thuế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Giải quyết tranh chấp hợp đồng</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giải quyết tranh chấp hợp đồng</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-arrow-circle-right"></i>
                <div class="title">Tư vấn pháp luật lao động</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn pháp luật lao động</a>
              </div>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="#" class="hasub menu_link a-ac">SỞ HỮU TRÍ TUỆ</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Tư vấn đăng ký nhãn hiệu</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn đăng ký nhãn hiệu</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Đăng ký chỉ dẫn địa lý</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Đăng ký chỉ dẫn địa lý</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Trình tự thủ tục đăng ký nhãn hiệu</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Trình tự thủ tục đăng ký nhãn hiệu</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Đăng ký kiểu dáng công nghiệp</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Đăng ký kiểu dáng công nghiệp</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Đăng ký sáng chế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Đăng ký sáng chế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Đăng ký bảo hộ quyền tác giả</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Đăng ký bảo hộ quyền tác giả</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Xử lý vi phạm nhãn hiệu</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Xử lý vi phạm nhãn hiệu</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Thủ tục cấp phép sử dụng tácn phẩm Âm nhạc</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thủ tục cấp phép sử dụng tácn phẩm Âm nhạc</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Chấm dứt hiệu lực Giấy chứng nhận đăng ký nhãn hiệu</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Chấm dứt hiệu lực Giấy chứng nhận đăng ký nhãn hiệu</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Khiếu nại sở hữu trí tuệ</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Khiếu nại sở hữu trí tuệ</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Xin cấp phép sử dụng tác phẩm Âm nhạc</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Xin cấp phép sử dụng tác phẩm Âm nhạc</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-caret-right"></i>
                <div class="title">Nhượng quyền thương mại</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Nhượng quyền thương mại</a>
              </div>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="index.php?action=link&act=dautu" class="hasub menu_link a-ac">ĐẦU TƯ</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Thành lập Công ty 100% vốn nước ngoài</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thành lập Công ty 100% vốn nước ngoài</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Thành lập doanh nghiệp có vốn đầu tư nước ngoài</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Thành lập doanh nghiệp có vốn đầu tư nước ngoài</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-bullseye"></i>
                <div class="title">Giới thiệu chung</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Công ty Cổ phần Vinasimex</a>
              </div>

            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="index.php?action=link&act=giayphep" class="hasub menu_link a-ac">GIẤY PHÉP</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép lao động</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép lao động</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-check-circle"></i>
                <div class="title">Giấy phép kinh doanh lữ hành quốc tế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Giấy phép kinh doanh lữ hành quốc tế</a>
              </div>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="#" class="hasub menu_link a-ac">KẾ TOÁN-THUẾ</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <div class="item item-1 current">
                <i class="icon fa-dot-circle"></i>
                <div class="title">Tư vấn kế toán thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Tư vấn kế toán thuế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-dot-circle"></i>
                <div class="title">Dịch vụ báo cáo thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Dịch vụ báo cáo thuế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-dot-circle"></i>
                <div class="title">Dịch vụ báo cáo thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Dịch vụ báo cáo thuế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-dot-circle"></i>
                <div class="title">Dịch vụ báo cáo thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Dịch vụ báo cáo thuế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-dot-circle"></i>
                <div class="title">Dịch vụ báo cáo thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Dịch vụ báo cáo thuế</a>
              </div>
              <div class="item item-1 current">
                <i class="icon fa-dot-circle"></i>
                <div class="title">Dịch vụ báo cáo thuế</div>
                <a href="#" title="Công ty Cổ phần Vinasimex" class="link">Dịch vụ báo cáo thuế</a>
              </div>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="#" class="hasub menu_link a-ac">VỤ VIỆC-VỤ ÁN</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
          </section>
        </li>
      </ul>
    </div>
  </div>
</section>
<script>
  if (document.getElementById("main_header") != null) {
    setInterval(function () {
      var MenuHeight = document.getElementById("main_header").offsetHeight;
      $("#main_header").css("height", MenuHeight + "px");
      var scroll_position = jQuery("#main_header").offset().top;
      var screen_height = jQuery(window).height();
      var activation_offset = 0;
      var max_scroll_height = jQuery("body").height() + screen_height;
      var scroll_activation_point =
        scroll_position - screen_height * activation_offset;
      $(window).scroll(function () {
        var y_scroll_pos = window.pageYOffset;
        var element_in_view = y_scroll_pos > scroll_activation_point;
        var has_reached_bottom_of_page =
          max_scroll_height <= y_scroll_pos && !element_in_view;
        if (element_in_view || has_reached_bottom_of_page) {
          jQuery(".header-content").addClass("fixed").fadeIn();
        } else {
          jQuery(".header-content").removeClass("fixed");
        }
      });
    }, 500);
  }
</script>
