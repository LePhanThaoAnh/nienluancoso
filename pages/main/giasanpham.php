<?php 
    $sql_pro ="SELECT * FROM sanpham WHERE sanpham.id_gia_sp='$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //lấy tên danh mục
    $sql_cate ="SELECT * FROM giasanpham WHERE giasanpham.id_gia='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

?>
<h3> Giá sản phẩm : <?php echo $row_title["khoanggia"] ?> </h3>
<div class="row">
                <?php
                    while($row_pro = mysqli_fetch_array($query_pro)){
                ?>
                    <div class="col-lg-4 col-md-6 mb-4  mt-4 ">
                        <div class="card h-100 border border-warning">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro["id_sanpham"] ?>" class="text text-dark">
                                <div style="height: 200px; width:100%;">
                                    <img class="" style="width:100%; height: 100%;" src="../../nienluancoso/admin/modules/quanlysp/uploads/<?php echo $row_pro["hinhanh"] ?>" alt="">
                                </div >   
                                <div class="card-body m-2 text-center">
                                        <p href="#" class="card-title text-uppercase"><?php echo $row_pro['tensanpham'] ?></p>
                                        <p href="#" class="card-title "> Mã: <?php echo $row_pro['masp'] ?></p>
                                        <h6 class="">Giá: <?php echo number_format($row_pro['giasp'],0,',','.').'vnd'?></h6>
                                        <p href="#" class="card-text"><?php echo $row_pro['tomtat'] ?></p>
                                </div>
                            </a>
                        </div>
                    </div>     

                <?php
                    }
                ?>

</div>