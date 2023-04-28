<style>
  div.title{
    margin-top:30px;
  }
</style>
<?php
  if(isset($_GET['act'])){
    if($_GET['act']=='editlevel'){
      $ac=1;
    } 
    if($_GET['act']=='addlevel'){
      $ac=2;
    }
  }
?>
<!--hiển thị tiêu đề-->
<?php
if($ac==1){
  echo '<div class="col-md-4 col-md-offset-4 title"><h3><b>CẬP NHẬT CHỨC VỤ</b></h3></div>';
}
if($ac==2){
  echo '<div class="col-md-4 col-md-offset-4 title"><h3><b>THÊM CHỨC VỤ</b></h3></div>';
}
?>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $lv=new level();
      $result=$lv->getlevelID($id);
      $level_id=$result['level_id'];
      $level_name=$result['level_name'];
    }
  ?>
  <!--tạo thẻ form-->
  <?php
  if($ac==1)
  {
    echo '<form action="index.php?action=level&act=editlevel_action&id='.$id.'" method="post" enctype="multipart/form-data">';
  }
  if($ac==2){
    echo '<form action="index.php?action=level&act=addlevel_action" method="post" enctype="multipart/form-data">';

  }
  ?>
    <table class="table" style="border: 0px;">
<tr>
  <td>Mã chức vụ</td>
  <td> <input type="text" class="form-control" name="level_id" value="<?php if(isset($level_id)) echo $level_id;?>"readonly/></td>
</tr>
<tr>
  <td>Tên chức vụ</td>
  <td><input type="text" class="form-control" name="level_name" value="<?php if(isset($level_name)) echo $level_name;?>"  maxlength="100px"></td>
</tr>      
<tr>
  <td colspan="2">
    <input type="submit" value="submit">
  </td>
</tr>

</table>
    <!-- </form> -->
    </form>
</div>
