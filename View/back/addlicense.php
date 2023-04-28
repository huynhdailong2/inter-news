<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title">
    <h3><b>THÊM THÔNG TIN GIẤY PHÉP</b></h3>
</div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $gp=new license();
      $result=$gp->getGpId($id);
      $gp_id=$result['gp_id'];
      $gp_name=$result['gp_name'];
      $gp_disc=$result['gp_disc'];
      $gp_phone=$result['gp_phone'];
      $gp_email=$result['gp_email'];
      $image=$result['image'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=license&act=addlicense_action" method="post" enctype="multipart/form-data">
        <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=license&act=giayphep" type="button"
            class="btn btn-default">Back</a>
        <table class="table" style="border: 0px;">
            <tr>
                <td>Mã Giấy Phép</td>
                <td> <input type="text" class="form-control" name="gp_id" value="<?php if(isset($gp_id)) echo $gp_id;?>"
                        readonly /></td>
            </tr>
            <tr>
                <td>Tên Giấy Phép</td>
                <td><input type="text" class="form-control" name="gp_name"
                        value="<?php if(isset($gp_name)) echo $gp_name;?>" maxlength="100px"></td>
            </tr>
            <tr>
                <td>Dịch Vụ</td>
                <td><input type="text" class="form-control" name="gp_disc"
                        value="<?php if(isset($gp_disc)) echo $gp_disc;?>" maxlength="100px"></td>
            </tr>
           
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" class="form-control" name="gp_phone"
                        value="<?php if(isset($gp_phone)) echo $gp_phone;?>" maxlength="100px"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control" name="gp_email"
                        value="<?php if(isset($gp_email)) echo $gp_email;?>" maxlength="100px"></td>
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