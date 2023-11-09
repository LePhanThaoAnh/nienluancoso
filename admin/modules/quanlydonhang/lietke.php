
<?php 
    
    $sql_lietke_dh = "SELECT * FROM cart,users WHERE cart.id_khachhang = users.id_dangky ORDER BY id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<h2 class="pt-2 mt-2">LIỆT KÊ ĐƠN HÀNG</h2>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Tình trạng</th>
            <th scope="col">Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["code_cart"]  ?></td>
            <td><?php echo $row["tenkhachhang"]  ?></td>
            <td><?php echo $row["diachi"]  ?></td>
            <td><?php echo $row["email"]  ?></td>
            <td><?php echo $row["sodienthoai"]  ?></td>
            
            <td>
                <?php 
                if($row["cart_status"]== 1){
                        // Khi trạng thái bằng 1 sẽ là đơn hàng mới và lấy code_cart trong bảng cart của đơn hàng để so sánh
                    echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
                }else{
                    echo 'Đã xử lý';
                }
                ?>
            </td>
            <td>
                <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row["code_cart"] ?>">Xem đơn hàng</a> 
            </td>
        </tr>
    <?php 
     }
    ?>
  </tbody>
</table>