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
.pagination {
	list-style-type: none;
	padding: 10px 0;
	display: inline-flex;
	justify-content: space-between;
	box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}

</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->CategoryRelatedAll();
    $count=$result->rowCount();
    $limit=20;
    $p=new pagination();
     $current_page=$p->findPage($count,$limit);
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
        <form action="index.php?action=CategoryRelatedController&act=search" method="POST">
            <input type="text" placeholder="Search.."  name="search">
            <input  type="submit" value="Search">
        </form>
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
                                href="index.php?action=CategoryRelatedControllerController&act=edit&id=<?php echo $set['id'];?>">Edit</a>
                        </td>
                        <td><a
                                href="index.php?action=CategoryRelatedControllerController&act=delete&id=<?php echo $set['id'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                      endwhile;
                    ?>
                </div>
            </div>
        </tbody>
    </table>
</div>
<div class="col-md-12 col-lg-12 col-sm-12" width="100%" style="margin-right:300px;">
    <?php if (ceil($count / $limit) > 0): ?>
        <ul class="pagination" style="margin-left:400px;">
                <?php if ($current_page > 1): ?>
            <li class="prev"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="index.php?action=CategoryRelatedController&act=CategoryRelated&page=<?php echo $current_page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
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