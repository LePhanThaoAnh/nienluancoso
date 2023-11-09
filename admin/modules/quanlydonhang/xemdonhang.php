
<?php 
    
    $sql_lietke_dh = "SELECT * FROM cart_details,sanpham WHERE cart_details.id_sanpham = sanpham.id_sanpham 
                    -- 'code' từ trang lietke đem qua
     AND cart_details.code_cart = '$_GET[code]'  ORDER BY cart_details.id_cart_details DESC ";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<h2 class="pt-2 mt-2">XEM ĐƠN HÀNG</h2>

    <table class="table table-bordered table-white" style="background-color: white">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Thành tiền</th>
        
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
        $thanhtien = $row["giasp"]*$row["soluongmua"];
        $tongtien += $thanhtien;
    ?>
        <tbody>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["code_cart"]  ?></td>
            <td><?php echo $row["tensanpham"]  ?></td>
            <td><?php echo $row["soluongmua"]  ?></td>
            <td><?php echo number_format( $row["giasp"],0,',','.' ).'vnd' ?></td>
            <td><?php echo  number_format( $row["giasp"]*$row["soluongmua"],0,',','.' ).'vnd' ?></td>
            
        </tr>
    <?php 
     }
    ?>

            <td colspan="6">
                <p>Tổng tiền: <?php echo number_format( $tongtien,0,',','.' ).'vnd' ?> </p>
            </td>
  </tbody>
</table>