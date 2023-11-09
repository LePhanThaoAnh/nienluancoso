
<div class="row"> 

<?php 
  // unset($_SESSION['dangky']);
    if(isset($_SESSION["dangky"])){
                  // hiện tên người đăng nhập từ file login
      echo 'xin chào: '.'<span style="color:red;">'.$_SESSION["dangky"].'</span>' ;
    }
    
?>

</div>
<style>
  .tieude{
        text-align: center;
        font-family: Georgia;
        font-weight: bold;
        font-size: 40px;
        border: 2px double ;
        border-radius: 3px;
        background-color: white;
  }
</style>
<h1 class="tieude"> GIỎ HÀNG </h1>
<table class="table border border-dark text-center rounded" style="background-color: white" >
  <thead >
    <tr >
      <th class="border border-dark" scope="col">ID</th>
      <th class="border border-dark"  scope="col">Mã SP</th>
      <th class="border border-dark" scope="col">Tên sản phẩm</th>
      <th class="border border-dark" scope="col">Hình ảnh</th>
      <th class="border border-dark" scope="col">Số lượng</th>
      <th class="border border-dark" scope="col">Giá sản phẩm</th>
      <th class="border border-dark" scope="col">Thành tiền</th>
      <th class="border border-dark" scope="col">Quản lý</th>
    </tr>
  </thead>
  <?php 
    //thêm để lưu sess từ bên kia truyền qua
    if(isset($_SESSION["cart"])){
        $i=0;
        $tongtien = 0;
        foreach($_SESSION["cart"] as $cart_item){
            $thanhtien = $cart_item["soluong"]* $cart_item["giasp"];
            $tongtien = $tongtien + $thanhtien;
        $i++;
  
?>
  <tbody class="border border-dark">

    <tr>
      <td class="border border-dark"><?php echo $i ?></td>
      <td class="border border-dark"><?php  echo $cart_item["masp"] ?></td>
      <td class="border border-dark"><?php  echo $cart_item["tensanpham"] ?></td>
      <td class="border border-dark"><img src="../../nienluancoso/admin/modules/quanlysp/uploads/<?php echo $cart_item["hinhanh"] ?>" width="150px" alt=""></td>
      <td class="border border-dark" style="text-align:center;">
        <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item["id"]?>"><i class="fa-solid fa-plus"></i></a>
        <?php  echo $cart_item["soluong"] ?>
        <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item["id"]?>"><i class="fa-solid fa-minus"></i></a>
    
      </td>
      <td class="border border-dark"><?php  echo number_format($cart_item["giasp"],0,',','.').'vnd' ?></td>
      <td class="border border-dark"><?php  echo number_format($thanhtien,0,',','.').'vnd' ?></td>
      <td class="border border-dark"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item["id"]?>">XÓA</a></td>
    </tr>
  
  </tbody>
  <?php 
   }
   ?>
   <tr >
        <td class="border border-dark" colspan="8">
            <p  >TỔNG TIỀN: <?php echo number_format($tongtien,0,',','.').'vnd' ?></p>
            <p><a href="pages/main/themgiohang.php?xoatatca=1">XÓA TẤT CẢ</a></p>
            <div style="clear:both;"></div>
            <?php 
              if(isset($_SESSION["dangky"])){
            ?>
                  <p style="text-align:center"><a href="pages/main/thanhtoan.php">ĐẶT HÀNG</a></p>
            <?php
              }else{
            ?>
                <p style="text-align:center"><a href="index.php?quanly=dangky">ĐĂNG KÝ ĐẶT HÀNG</a></p>
            <?php
              }
            ?>
            
            
        </td>
   </tr>
   <?php 
    }else{
    ?> 
    <tr>
        <td class="border border-dark"><p>Hiện tại giỏ hàng trống</p></td>
    </tr>
    <?php
    }
   ?>
</table>