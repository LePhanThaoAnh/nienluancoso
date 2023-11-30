<?php 
    $sql_chitiet ="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id AND sanpham.id_sanpham = '$_GET[id]'  LIMIT 9";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
<style>
  .tieude{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 25px;
        /* border: 2px double ; */
        border-radius: 3px;
        background-color: white;
  }
</style>


    <div class="container " style="padding: 0px 100px;">
    <h2 class="text-uppercase mt-3 tieude">Chi tiết sản phẩm <?php echo $row_chitiet["masp"] ?> </h2>
        <div class="row border border-dark mb-4 rounded" style="background-color: white; ">
            <div class="col  m-2 rounded" style="background-color: white; ">
            <div style="height: 450px; width:100%;">
                    <img class="" style="width:100%; height: 100%;" 
                    src="../../nienluancoso/admin/modules/quanlysp/uploads/<?php echo $row_chitiet["hinhanh"] ?>" alt="">
                </div > 

                
            </div>


            <div class="col border border-warning m-2 rounded" style="background-color: white;">
                <form action="./pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet["id_sanpham"] ?>" method="POST">
                    <h3 class="font-weight-bold mt-2"><?php echo $row_chitiet["tensanpham"] ?></h3>
                    <p>Mã SP:  <?php echo $row_chitiet["masp"] ?></p>
                    <p>Giá SP:  <?php echo $row_chitiet["giasp"] ?></p>
                    <p>Số lượng SP:  <?php echo $row_chitiet["soluong"] ?></p>
                    <p>Danh mục SP:  <?php echo $row_chitiet["tendanhmuc"] ?></p>
                    <p> <?php echo $row_chitiet["tomtat"] ?></p>
                    <div style="height: 50px; margin: 0px; display:flex;"><i  style="color: black; height: 42px; width:55px; font-size:43px;" class="fa-solid fa-cart-shopping "> </i> <input type="submit" name="themgiohang" value="MUA HÀNG" class="input " style="cursor:pointer"></div>
                </form>
            </div>
        </div>
        
    </div>

    <div class="clear"></div>
    <div class="tabs m-2">
        <ul id="tabs-nav"  >
            <li style="background-color: white;"><a href="#tab1">Nội dung chi tiết</a></li>
            <!-- <li style="background-color: white;"><a href="#tab2">Hình ảnh</a></li> -->
        
        
        </ul> <!-- END tabs-nav -->
        <div id="tabs-content">
            <div id="tab1" class="tab-content" style="padding-left: 25px;">
                <?php echo $row_chitiet["noidung"] ?>
            </div>
            
            <div id="tab2" class="tab-content">
                <?php echo $row_chitiet["noidung"] ?>
            </div>
    
    
  </div> <!-- END tabs-content -->
    </div> <!-- END tabs -->

<?php
    }

?>