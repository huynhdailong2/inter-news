
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
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>DANH SÁCH THÔNG TIN THÀNH VIÊN</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=information&act=addIn4"><h4>THÊM THÔNG TIN THÀNH VIÊN</h4></a>
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
        <th>Mã Thành Viên</th>
        <th>Tên Thành Viên</th>
        <th>Chức Vụ</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $In4=new information();
        $result=$In4->In4All();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['in4_id'];?> </td>
        <td><?php echo $set['in4_name'];?></td>
        <td><?php echo $set['level_name'];?></td>
        <td><a href="index.php?action=information&act=information_detail&id=<?php echo $set['in4_id'];?>">Chi tiết</a></td>
        <td><a href="index.php?action=information&act=editIn4&id=<?php echo $set['in4_id'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=information&act=deleteIn4&id=<?php echo $set['in4_id'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>