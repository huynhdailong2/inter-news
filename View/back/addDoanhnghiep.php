<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title">
    <h3><b>THÊM TƯ VẤN DOANH NGHIỆP</b></h3>
</div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $dn=new doanhnghiep();
      $result=$dn->getGpId($id);
      $dn_id=$result['dn_id'];
      $dn_name=$result['dn_name'];
      $dn_disc=$result['dn_disc'];
      $dn_phone=$result['dn_phone'];
      $dn_phone=$result['dn_phone'];
      $image=$result['image'];
      $link=$result['link'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=doanhnghiep&act=addDoanhnghiep_action" method="post" enctype="multipart/form-data">
        <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=doanhnghiep&act=doanhnghiep" type="button"
            class="btn btn-default">Back</a>
        <table class="table" style="border: 0px;">
            <tr>
                <td>Mã TVDN</td>
                <td> <input type="text" class="form-control" name="dn_id" value="<?php if(isset($dn_id)) echo $dn_id;?>"
                        readonly /></td>
            </tr>
            <tr>
                <td>Tên TVDN</td>
                <td><input type="text" class="form-control" name="dn_name"
                        value="<?php if(isset($dn_name)) echo $dn_name;?>" maxlength="100px"></td>
            </tr>
            <tr>
                <td>Dịch Vụ</td>
                <td><input type="text" class="form-control" name="dn_disc"
                        value="<?php if(isset($dn_disc)) echo $dn_disc;?>" maxlength="100px"></td>
            </tr>
           
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" class="form-control" name="dn_phone"
                        value="<?php if(isset($dn_phone)) echo $dn_phone;?>" maxlength="100px"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control" name="dn_email"
                        value="<?php if(isset($dn_email)) echo $dn_email;?>" maxlength="100px"></td>
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
                <td>Link</td>
                <td><input type="text" class="form-control" name="link"
                        value="<?php if(isset($link)) echo $link;?>" maxlength="100px"></td>
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