
<style>
  div.title{
    margin-top: 20px;
  }
  div.title-2{
    margin-top: 20px;
  }
  th{
    text-align:center;
  }
</style>
<div  class="col-md-12 col-12 title"><h3 ><b>DANH SÁCH BÀI VIẾT LIÊN QUAN ĐẾN THÀNH LẬP DOANH NGHIỆP</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=thanhlapdoanhnghiep&act=addTLDN"><h4>THÊM THÔNG TIN BÀI VIẾT</h4></a>
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
        <th>Mã bài viết</th>
        <th>Tên bài viết</th>
        <th>Description</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $tldn=new thanhlapdoanhnghiep();
        $result=$tldn->TLDNAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['tldn_id'];?> </td>
        <td><?php echo $set['tldn_name'];?></td>
        <td><?php echo $set['tldn_disc'];?></td>
        <td><a href="index.php?action=thanhlapdoanhnghiep&act=information_detail&id=<?php echo $set['tldn_id'];?>">Chi tiết</a></td>
        <td><a href="index.php?action=information&act=editIn4&id=<?php echo $set['tldn_id'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=thanhlapdoanhnghiep&act=deleteIn4&id=<?php echo $set['tldn_id'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>