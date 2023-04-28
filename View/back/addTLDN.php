<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title">
    <h3><b>THÊM Bài Viết Liên Quan Thành Lập Doanh Nghiệp</b></h3>
</div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $tldn=new thanhlapdoanhnghiep();
      $result=$tldn->getTLDNId($id);
      $tldn_id=$result['tldn_id'];
      $tldn_name=$result['tldn_name'];
      $tldn_disc=$result['tldn_disc'];
      $link=$result['link'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=thanhlapdoanhnghiep&act=addTLDN_action" method="post" enctype="multipart/form-data">
        <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=thanhlapdoanhnghiep&act=thanhlapdoanhnghiep" type="button"
            class="btn btn-default">Back</a>
        <table class="table" style="border: 0px;">
            <tr>
                <td>Mã Bài Viết Liên Quan TLDN</td>
                <td> <input type="text" class="form-control" name="tldn_id" value="<?php if(isset($tldn_id)) echo $dn_id;?>"
                        readonly /></td>
            </tr>
            <tr>
                <td>Tên Bài Viết Liên Quan TLDN</td>
                <td><input type="text" class="form-control" name="tldn_name"
                        value="<?php if(isset($tldn_name)) echo $tldn_name;?>" maxlength="255px"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" class="form-control" name="tldn_disc"
                        value="<?php if(isset($tldn_disc)) echo $tldn_disc;?>" maxlength="255px"></td>
            </tr>
            <tr>
                <td>Link</td>
                <td><input type="text" class="form-control" name="link"
                        value="<?php if(isset($link)) echo $link;?>" maxlength="255px"></td>
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