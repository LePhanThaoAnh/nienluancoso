<?php 
    
    $sql_lietke_sp = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>

<h2>LIỆT KÊ SẢN PHẨM</h2>

    <table class="table table-bordered table-info" style="background-color: white;">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Giá sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["tensanpham"]  ?></td>
            <td><img src="admin/modules/quanlysp/uploads/"<?php echo $row["hinhanh"]?> width="250px"></td>
            <td><?php echo $row["giasp"]  ?></td>
            <td><?php echo $row["soluong"]  ?></td>
            <td><?php echo $row["masp"]  ?></td>
            <td><?php echo $row["tendanhmuc"]  ?></td>
            <td>
                <a class="btn btn-primary" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row["id_sanpham"] ?>">SỬA</a> | 
                <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc muốn xóa không')" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row["id_sanpham"] ?>">XÓA </a>
            </td>
        </tr>
    <?php 
     }
    ?>
  </tbody>
</table>