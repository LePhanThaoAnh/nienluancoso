<div class="col-lg-10">

        <nav class="navbar navbar-light bg-light justify-content-between border border-dark m-2 rounded">
                <a class="navbar-brand"></a>
                <form class="form-inline" action="index.php?quanly=timkiem" method="POST">
                    <input class="form-control mr-sm-2"  type="text" placeholder="Tìm kiếm" name="tukhoa" aria-label="Search">
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem" value="Tìm kiếm"></input>
                </form>
        </nav>


        <?php 
             if(empty($_REQUEST)){
                echo'
                
                ';
             }
        ?>


               <!-- Trình chiếu chuyển 2 ảnh -->
          
               


                <!-- Hiển thị sản phẩm-->
                <!-- Kiểm tra xem url có tồn tại hay không, có để chuyển trang-->
                <?php 
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam ='';
                }

                if($tam =='danhmucsanpham'){
                    include("main/danhmuc.php");
                }elseif($tam=='giasanpham'){
                    include("main/giasanpham.php");
                }elseif($tam=='giohang'){
                    include("main/giohang.php");
                }elseif($tam=='gioithieu'){
                    include("main/gioithieu.php");
                }elseif($tam=='sanpham'){
                    include("main/sanpham.php");
                }elseif($tam=='dangky'){
                    include("main/dangky.php");
                }elseif($tam=='dangnhap'){
                    include("main/login.php");
                }elseif($tam=='thanhtoan'){
                    include("main/thanhtoan.php");
                }elseif($tam=='thanhtoan'){
                    include("main/thanhtoan.php");
                }elseif($tam=='camon'){
                    include("main/camon.php");
                }elseif($tam=='doimatkhau'){
                    include("main/doimatkhau.php");
                }elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }elseif($tam=='timkiem'){
                    include("main/timkiem.php");
                }else{
                    include("main/index.php");
                }
                ?>
                <!-- /.row Product List -->

            </div>