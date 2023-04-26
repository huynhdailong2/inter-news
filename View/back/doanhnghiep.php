
<style>
  div.title{
    /* margin-top: 20px; */
  }
  div.title-2{
    margin-top: 20px;
  }
  th{
    text-align:center;
  }
</style>
<div class="col-sm-4">
  <div class="nav-item dropdown" style="margin-top:40px;">
      <a style="color:blue" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Bài viết liên quan
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?action=thanhlapdoanhnghiep&act=thanhlapdoanhnghiep">Thành lập doanh nghiệp</a>
          <a class="dropdown-item" href="index.php?action=information">Quản Trị Thành Viên</a>
      </div>
    </div>
</div>
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>Quản Lý TV Doanh Nghiệp</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=doanhnghiep&act=addDoanhnghiep"><h4>THÊM TV Doanh Nghiệp</h4></a>
</div>
<!-- <div class="row col-12">
<a href="index.php?action=hoadon"><h4>Xem hóa đơn</h4></a><br/>
</div>
<div class="row col-12">
<a href="index.php?action=feedback"><h4>Feedback Khách hàng</h4></a><br/>
</div> -->
<div class="row">
<table class="table"border="1px solid black">
    <thead >
      <tr class="table-primary" align="center">
        <th>Mã TVDN</th>
        <th>Tên TVDN</th>
        <th>Dịch Vụ</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $dn=new doanhnghiep();
        $result=$dn->DnAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['dn_id'];?> </td>
        <td><?php echo $set['dn_name'];?></td>
        <td><?php echo $set['dn_disc'];?></td>
        <td><a href="index.php?action=doanhnghiep&act=ChitietTVDN&id=<?php echo $set['dn_id'];?>">Chi tiết</a></td>
        <td><a href="index.php?action=license&act=editlicense&id=<?php echo $set['dn_id'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=doanhnghiep&act=deleteDoanhnghiep&id=<?php echo $set['dn_id'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>