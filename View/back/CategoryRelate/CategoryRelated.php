<style>
div.title {
    margin-top: 20px;
}

div.title-2 {
    margin-top: 20px;
}

th {
    text-align: center;
}

i {
    color: #ff9800;
    font-size: 12px;
    line-height: 12px;
    margin-right: 5px;
}

/* The sidebar menu */
.nav {
    height: 100%;
    /* 100% Full-height */
    width: 0;
    /* 0 width - change this with JavaScript */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Stay on top */
    top: 0;
    left: 0;
    background-color: #00578a;
    /* Black*/
    overflow-x: hidden;
    /* Disable horizontal scroll */
    padding-top: 60px;
    /* Place content 60px from the top */
    transition: 0.5s;
    /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.nav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.nav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.nav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
    font-size: 15px;
    border-radius: 100px;
    cursor: pointer;
    background-color: #00578a;
    color: white;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color: #f58634;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    /* If you want a transition effect */
    padding-bottom: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .nav {
        padding-top: 15px;
    }

    .nav a {
        font-size: 18px;
    }
}
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->CategoryRelatedAll();
    $count=$result->rowCount();
    $limit=20;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div class="col-md-12 col-12 col-md-offset-4 title">
    <h3><b>CATEGORIES RELATED</b></h3>
</div>
<div class="row col-12 title-2">
    <div class="col-4">
        <a href="index.php?action=CategoryRelatedController&act=insert">
            <h4>ADD CATEGORY RELATED</h4>
        </a>
    </div>
    <div class="col-7">
        
    </div>
</div>

<!-- <div class="row col-12">
<a href="index.php?action=hoadon"><h4>Xem hóa đơn</h4></a><br/>
</div>
<div class="row col-12">
<a href="index.php?action=feedback"><h4>Feedback Khách hàng</h4></a><br/>
</div> -->
<div class="row">
    <table class="table" border="1px solid black">
        <thead>
            <tr class="table-primary" align="center">
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Note</th>
                <th>URL</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <h5 style="font-size:20px;color:#fff;">&nbsp;DANH MỤC CON</h5>
                <a class="nav-link" style="color:#fff;" data-toggle="tab" href="#All" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">All</a>
                <a class="nav-link" style="color:#fff;" data-toggle="tab" href="#doanhnghiep" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">Doanh nghiệp</a>
              </div>

            <div id="main">
                <button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
            </div>
          <div class="tab-content">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <?php
                      $CategoryRelated=new CategoryRelated();
                      $result=$CategoryRelated->CategoryRelatedAll_pagination($start,$limit);
                      while($set=$result->fetch()):
                    ?>
                    <tr>
                        <td><?php echo $set['id'];?> </td>
                        <td><?php echo $set['name'];?></td>
                        <td><?php echo $set['description'];?></td>
                        <td><?php echo $set['note'];?></td>
                        <td><?php echo $set['url'];?></td>
                        <td><a
                                href="index.php?action=CategoryRelatedController&act=edit&id=<?php echo $set['id'];?>">Edit</a>
                        </td>
                        <td><a
                                href="index.php?action=CategoryRelatedController&act=delete&id=<?php echo $set['id'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                      endwhile;
                    ?>
                </div>
            </div>
        </tbody>
    </table>
    <div class="col-md-12 col-lg-12 col-sm-12" width="100%" style="margin-right:300px;">
        <ul class="pagination">
        <?php
                    // nút lùi
                    if($current_page > 1 && $page > 1){
                        echo '<li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;" class="active"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page='.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                    <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;" class="active"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page='.($current_page+1).'">Next</a></li>';
                        }
                    ?>
        </ul>
    </div>
</div>
<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("v-pills-tab").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("v-pills-tab").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>