<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title"><h3><b>THÊM THÔNG TIN THÀNH VIÊN</b></h3></div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $in4=new information();
      $result=$in4->getIn4Id($id);
      $in4_id=$result['in4_id'];
      $in4_name=$result['in4_name'];
      $level_name=$result['level_name'];
      $in4_phone=$result['in4_phone'];
      $in4_email=$result['in4_email'];
      $skype=$result['skype'];
      $image=$result['image'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=information&act=addIn4_action" method="post" enctype="multipart/form-data">
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=information" type="button" class="btn btn-default">Back</a>
    <table class="table" style="border: 0px;">
        <tr>
            <td>Mã thành viên</td>
            <td> <input type="text" class="form-control" name="in4_id" value="<?php if(isset($in4_id)) echo $in4_id;?>"
                    readonly /></td>
        </tr>
        <tr>
            <td>Tên Thành viên</td>
            <td><input type="text" class="form-control" name="in4_name"
                    value="<?php if(isset($in4_name)) echo $in4_name;?>" maxlength="100px"></td>
        </tr>
        <tr>
            <td>Chức vụ</td>
            <td>
                <select name="level_name" class="form-control" style="width:150px;">
                    <?php
      $lv=new level();
      $result=$lv->levelAll();
      while($set=$result->fetch()):
      ?>
                    <option value="<?php echo $set['level_name'];?>"><?php echo $set['level_name'];?></option>
                    <?php
      endwhile;
      ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" class="form-control" name="in4_phone"
                    value="<?php if(isset($in4_phone)) echo $in4_phone;?>" maxlength="100px"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" name="in4_email"
                    value="<?php if(isset($in4_email)) echo $in4_email;?>" maxlength="100px"></td>
        </tr>
        <tr>
            <td>Skype</td>
            <td><input type="text" class="form-control" name="skype" value="<?php if(isset($skype)) echo $skype;?>"
                    maxlength="100px"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td>

                <label><img width="50px" height="50px" src=""></label>
                Chọn file để upload:
                <input type="file" name="image" id="fileupload">

            </td>
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