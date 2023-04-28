<style>
  th{
    text-align:center;
  }
</style>
</br>
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH CHỨC VỤ</b></h3></div>
<div class="row col-12">
<a href="index.php?action=level&act=addlevel"><h4>THÊM CHỨC VỤ</h4></a>
</div>
<!-- <div class="row col-12">
<a href="index.php?action=hoadon"><h4>Xem hóa đơn</h4></a><br/>
</div>
<div class="row col-12">
<a href="index.php?action=feedback"><h4>Feedback Khách hàng</h4></a><br/>
</div> -->
<div class="row">
<table class="table"  border="1px solid black">
    <thead >
      <tr class="table-primary" align="center">
        <th>Mã chức vụ</th>
        <th>Tên chức vụ</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $lv=new level();
        $result=$lv->levelAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['level_id'];?> </td>
        <td><?php echo $set['level_name'];?></td>
        <td><a href="index.php?action=level&act=editlevel&id=<?php echo $set['level_id'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=level&act=deletelevel&id=<?php echo $set['level_id'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>