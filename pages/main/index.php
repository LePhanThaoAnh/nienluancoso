<?php 
    //nếu tồn tại cái get trang thì lấy trang gán vào page, 
    //cho begin bằng 0 rồi lấy page rồi tính sau đó gán cho begin
    if(isset($_GET["trang"])){
        $page = $_GET["trang"];
    }else{
        $page = "";
    }
    if($page == "" || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*6) - 6;
    }
    $sql_pro ="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id ORDER BY id_sanpham DESC LIMIT $begin,6";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>
<style>
  @-webkit-keyframes my {
	 0% { color: #F8CD0A; } 
	 50% { color: #fff;  } 
	 100% { color: #F8CD0A;  } 
    }
    @-moz-keyframes my { 
        0% { color: #F8CD0A;  } 
        50% { color: #fff;  }
        100% { color: #F8CD0A;  } 
    }
    @-o-keyframes my { 
        0% { color: #F8CD0A; } 
        50% { color: #fff; } 
        100% { color: #F8CD0A;  } 
    }
    @keyframes my { 
        0% { color: #F8CD0A;  } 
        50% { color: #fff;  }
        100% { color: #F8CD0A;  } 
    } 
    .tieude {
            background:white;
            font-size:24px;
            font-weight:bold;
        -webkit-animation: my 2000ms infinite;
        -moz-animation: my 5000ms infinite; 
        -o-animation: my 3000ms infinite; 
        animation: my 5000ms infinite;
        font-size: 50px;
        text-align: center;
    }
</style>
<h3 class="text-center pt-2 ml-5 mr-5 tieude rounded" >SẢN PHẨM MỚI NHẤT</h3>
<div class="row  m-1 rounded" style=" ">
            <?php
                while($row_pro = mysqli_fetch_array($query_pro)){
            ?>
                    <div class="col-lg-4 col-md-6 mb-4  mt-4 " >
                        <div class="card h-100 border border-warning " style="box-shadow: 0px 2px 10px rgba(255, 215, 0,0.7);" >
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


<div class="pt-2 pl-4" style="color:black">
                <!-- đếm số dòng sản phẩm có  -->
                <?php 
                    $sql_trang= mysqli_query($mysqli,"SELECT * FROM sanpham");
                    $row_count = mysqli_num_rows($sql_trang);
                    $trang = ceil($row_count/6);
                ?>
                <!-- code mẫu phân trang boostrap -->
                <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a style="color:black" class="page-link" href="index.php?trang=<?php echo ($i-1) ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <!-- chạy dòng lặp for -->
                            <?php 
                                for($i=1;$i<=$trang;$i++){
                            ?>
                            <li  class="page-item <?php if($i == $page){ echo 'active'; }else{} ?> "><a style="color:black" class="page-link"
                            href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>

                            <?php 
                                }
                            ?>
                            <li class="page-item">
                            <a style="color:black" class="page-link" href="index.php?trang=<?php echo ($i+1) ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                </nav>
</div>
        

