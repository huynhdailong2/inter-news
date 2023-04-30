
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
  i{
  color: #ff9800;
  font-size: 12px;
  line-height: 12px;
  margin-right: 5px;
}
</style>
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>CATEGORY BUSINESS MANAGEMENT</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=CategoryBusinessController&act=insert"><h4>ADD CATEGORY BUSINESS</h4></a>
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
        <th>Id</th>
        <th>Image</th>
        <th>test</th>
        <th>Name</th>
        <th>Description</th>
        <th>Phone</th>
        <th>Email</th>
        <th>URL</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $CategoryBusiness=new CategoryBusiness();
        $result=$CategoryBusiness->CategoryBusinessAll();
        while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['id'];?></td>
        <td>
          <img width="50" name="image" height="50" src="../../Assets/back/images/<?php echo $set['image'];?>" alt="">
        </td>
        <td><?php echo $set['name'];?></td>
        <td><?php echo $set['description'];?></td>
        <td><?php echo $set['phone'];?></td>
        <td><?php echo $set['email'];?></td>
        <td><?php echo $set['url'];?></td>
        <td><a href="index.php?action=CategoryBusinessController&act=edit&id=<?php echo $set['id'];?>">Edit</a></td>
        <td><a href="index.php?action=CategoryBusinessController&act=delete&id=<?php echo $set['id'];?>">Delete</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>