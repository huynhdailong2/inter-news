
<style>
div.title {
    margin-top: 30px;
}   
</style>

<div class="col-md-12 col-12  title">
    <h3><b>Edit CATEGORY POST</b></h3>
</div>

<div class="col-md-12">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $CategoryPostModel=new CategoryPost();
      $result=$CategoryPostModel->getCategoryPostId($id);
      $id=$result['id'];
      $name=$result['name'];
      $slug=$result['slug'];
      $icon=$result['icon'];
      $description=$result['description'];
      
    }
  ?>
    <!--tạo thẻ form-->
    <?php
        echo '<form action="index.php?action=CategoryPostController&act=edit_action&id='.$id.'"method="post" enctype="multipart/form-data">';
    ?>
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=CategoryPostController&act=CategoryPost"
        type="button" class="btn btn-default">Back</a>
    <table class="table" style="border: 0px;">
        <tr>
            <td>Id</td>
            <td> <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id;?>" readonly />
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" name="name" value="<?php if(isset($name)) echo $name;?>"
                    maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Slug</td>
            <td><input type="text" class="form-control" name="slug" value="<?php if(isset($slug)) echo $slug;?>"
                    maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="text" class="form-control" name="icon" value="<?php if(isset($icon)) echo $icon;?>" 
                    maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" class="form-control" name="description"
                    value="<?php if(isset($description)) echo $description;?>" maxlength="1000px"></td>
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