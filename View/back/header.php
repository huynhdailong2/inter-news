<style>
    .mn2{
        position: relative;
    }
    .submn2{
        top:  0;
        left: 100%;
        margin-top: -1px;
    }
    .fa-chevron-right{
        font-size:10px;
    }
</style>
<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <!-- Brand -->
                    <img style="margin-left:10px;" width="100" height="50" src="../../Assets/back/images/logocopy.png" alt="">
                    <a class="navbar-brand" href="index.php?action=home">ADMIN</a>

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=home">Trang Chủ</a>
                        </li>
                        
                        <!-- Quản trị Doanh Mục -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Quản Lý Thông Tin
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=level">Quản Trị Chức Vụ</a>
                                <a class="dropdown-item" href="index.php?action=information">Quản Trị Thành Viên</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Doanh nghiệp
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=doanhnghiep">Quản lý TV Doanh nghiệp</a>
                                <a class="dropdown-item" href="index.php?action=information">Quản Trị Thành Viên</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=license&act=giayphep">Quản Lý Giấy Phép</a>
                        </li>
                        <!-- Báo cáo -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Báo Cáo
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=thongkeMonth">Tháng</a>
                                <a class="dropdown-item" href="index.php?action=thongkeYear">Năm</a>
                                <a class="dropdown-item" href="index.php?action=thongkeQuy">Quý</a>
                            </div>
                        </li> -->
                        
                        <!-- Báo cáo Tồn kho -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tồn Kho</a>
                        </li>
                        <!--Đăng xuất-->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=AdminController&act=logout">Đăng xuất</a>
                        </li>
                        <?php
                            if(isset($_SESSION['email'])&& isset($_SESSION['password'])):
                                $name=$_SESSION['username'];
                        ?>
                        <li class="nav-item">
                            <h5 style="color:red;" class="nav-link"><?php echo 'Xin chào'.' '.$name?></h5>
                        </li>
                        <?php endif;?>
                    </ul>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>



</header>
<!-- dang ky -->