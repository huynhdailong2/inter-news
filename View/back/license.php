
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
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>DANH SÁCH GIẤY PHÉP</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=license&act=addlicense"><h4>THÊM GIẤY PHÉP</h4></a>
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
        <th>Mã Giấy Phép</th>
        <th>Tên Giấy phép</th>
        <th>Dịch Vụ</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $gp=new license();
        $result=$gp->licenseAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['gp_id'];?> </td>
        <td><?php echo $set['gp_name'];?></td>
        <td><?php echo $set['gp_disc'];?></td>
        <td><a href="index.php?action=license&act=chitiet_giayphep&id=<?php echo $set['gp_id'];?>">Chi tiết</a></td>
        <td><a href="index.php?action=license&act=editlicense&id=<?php echo $set['gp_id'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=license&act=deletelicense&id=<?php echo $set['gp_id'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>