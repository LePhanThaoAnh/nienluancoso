
<?php 
    $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

?>
<?php 
    if(isset($_GET["dangxuat"])&&$_GET["dangxuat"]==1){
        unset($_SESSION["dangky"]);
    }
?>

<style>
    #tieude{
        font-weight: bold;
        color: black;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top "  style="height: 100px" style="font-family: 'UTMSwissCondensed';">
        <a id="tieude" class="navbar-brand pl-4" href="https://nentang.vn">ANHLIGHT SHOP</a>
        <div class="container " height="50px" style="font-weight: bold; font-size:18px">
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" height="40px" width="100%" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-info mr-2" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ
                        </a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link btn btn-info mr-2" href="index.php?quanly=gioithieu">Giới thiệu
                        </a>
                    </li>


                    

                    <div class="dropdown " >
                    <button class="btn btn-info mr-2 dropdown-toggle" style="height: 42px;"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danh mục sản phẩm
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php 
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc["id"] ?>">
                        
                        <?php echo $row_danhmuc['tendanhmuc'] ?>
                        </a>
                    </li>


                    <?php 
                        }
                    ?>
                    </div>
                    </div>


                    <li class="nav-item active ">
                        <a class="nav-link btn btn-info mr-2" href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
                    </li>

                    <?php 
                        if(isset($_SESSION["dangky"])){
                    ?>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-info mr-2" href="index.php?dangxuat=1">Đăng xuất</a>
                            
                        </li>

                        <li class="nav-item active">
                        <a class="nav-link btn btn-info mr-2" href="index.php?quanly=doimatkhau"><i class="fa-solid fa-user"></i>Thay đổi mật khẩu</a>
                            
                        </li>

                        
                    <?php 
                    } else {
                    ?>
                        <li class="nav-item active">
                        <a class="nav-link btn btn-info mr-2" href="index.php?quanly=dangky"><i class="fa-solid fa-user"></i> Đăng ký</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link btn btn-info mr-2" href="index.php?quanly=dangnhap"><i class="fa-solid fa-user"></i> Đăng nhập</a>
                        </li>

                    <?php 
                    }
                    ?>
                   
                </ul>
            </div>
        </div>
    </nav>