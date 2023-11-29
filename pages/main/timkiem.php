<?php 
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = '';
    }
    $sql_pro ="SELECT * FROM sanpham WHERE tensanpham LIKE '%".$tukhoa."%' ";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    

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
        font-size: 40px;
        border: 2px double ;
        border-radius: 3px;
        background-color: white;
        width: 1090px;
        margin-left: 7px;
        padding-left: 1px;
  }
    #ten{
        /* font-family: 'Courier New', Courier, monospace; */
        box-shadow:  0px 2px 10px rgba(0, 0, 0,0.7);;
    }

</style>
<h3 class="tieude" id="">Kết quả tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
<div class="row m-1">
            <?php
                while($row_pro = mysqli_fetch_array($query_pro)){
            ?>
                    <div class="col-lg-4 col-md-6 mb-4  mt-3 ">
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