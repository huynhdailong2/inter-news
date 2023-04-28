<?php
require "../../Model/CategoryPost.php";
?>
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

<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>CATEGORY POSTS</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=CategoryPostController&act=insert"><h4>ADD CATEGORY POST</h4></a>
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
        <th>Name</th>
        <th>Slug</th>
        <th>Icon</th>
        <th>Description</th>
        <th>image</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $categoryPost=new CategoryPost();
        $result=$categoryPost->AllCategoryPost();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['id'];?> </td>
        <td><?php echo $set['name'];?></td>
        <td><?php echo $set['slug'];?></td>
        <td><?php echo $set['icon'];?></td>
        <td><?php echo $set['description'];?></td>
        <th><i class="<?php echo $set['icon'];?>"></i></th>
        <td><a href="index.php?action=CategoryPostController&act=edit&id=<?php echo $set['id'];?>">Edit</a></td>
        <td><a href="index.php?action=CategoryPostController&act=delete&id=<?php echo $set['id'];?>">Delete</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js" integrity="sha512-c41hNYfKMuxafVVmh5X3N/8DiGFFAV/tU2oeNk+upk/dfDAdcbx5FrjFOkFhe4MOLaKlujjkyR4Yn7vImrXjzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>