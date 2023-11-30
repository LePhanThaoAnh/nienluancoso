<?php 
    $sql_pro ="SELECT * FROM sanpham WHERE sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //lấy tên danh mục
    $sql_cate ="SELECT * FROM danhmuc WHERE danhmuc.id='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

    
?>
<style>
    /* #tieude{
    font-weight: bold;
    font-size:40px;
    font-family: Georgia; */

    .tieude{
        text-align: center;
        /* font-family: Georgia; */
        font-weight: bold;
        font-size: 25px;
        /* border: 2px double ; */
        border-radius: 3px;
        background-color: white;
        width: 600px;
        margin-left: 7px;
        padding-left: 1px;
  }
    #ten{
        /* font-family: 'Courier New', Courier, monospace; */
        box-shadow:  0px 2px 10px rgba(0, 0, 0,0.7);;
    }

</style>

<div class="container" style="padding:0px 50px">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
        <h3 class="text-center   mt-3 tieude rounded" id=""> Danh mục sản phẩm : <?php echo $row_title["tendanhmuc"] ?> </h3>

        </div>
    </div>
    <div class="row">

    <div class="col-3">
                <p class="mt-3 mb-0  text-center" style="font-weight: bold;font-size:20px" id="locsp">DANH MỤC LIÊN QUAN </p>
                
                <div class="list-group m-0 " style="font-weight: bold;">
                <?php 
                    $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while($row = mysqli_fetch_array($query_danhmuc)){
                ?>
                    <a style="text-decoration: none;background: white; color: bule; font-size:17px; " href="index.php?quanly=danhmucsanpham&id=<?php echo ($row["id"]) ?>" class=" list-group-item border border-white">
                        <?php echo ($row["tendanhmuc"]) ?></a>
                   <?php 
                    }
                   ?>
                </div>
    </div>

    <div class="col">
        <div class="row">
                        <?php
                            while($row_pro = mysqli_fetch_array($query_pro)){
                        ?>
                            <div class="col-lg-4 col-md-6 mb-4  mt-3 ">
                                <div class="card h-100 border border-warning"  style="box-shadow: 0px 2px 10px rgba(255, 215, 0,0.7);">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro["id_sanpham"] ?>" class="text text-dark" style="text-decoration: none;">
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

    </div>
    </div>

    
</div>

