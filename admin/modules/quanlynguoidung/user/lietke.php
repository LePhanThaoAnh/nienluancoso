<?php 
    
    $sql_lietke_user = "SELECT * FROM users ORDER BY id_dangky DESC";
    $query_lietke_user = mysqli_query($mysqli,$sql_lietke_user);
?>

<div class="container">
    <div class="row">
        <h2 class="col-9 p-4 mt-2 mb-2">LIỆT KÊ DANH SÁCH KHÁCH HÀNG</h2>
        <h3  class="col-3 p-4 mt-2 mb-2"> <a href="?action=quanlynguoidung&query=them">Quản lý admin</a> </h3>
    </div>
      
        
        
</div>

    <table class="table table-bordered table-info" style="background-color: white;">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_user)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["tenkhachhang"]  ?></td>
            <td><?php echo $row["email"]  ?></td>
            <td><?php echo $row["diachi"]  ?></td>
            <td><?php echo $row["sodienthoai"]  ?></td>
        </tr>
    <?php 
     }
    ?>


  </tbody>
</table>