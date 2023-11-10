<?php 
    
    $sql_lietke_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<h2>LIỆT KÊ DANH MỤC SẢN PHẨM</h2>

    <table class="table table-bordered table-info" style="background-color: white;">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["tendanhmuc"]  ?></td>

            <td>
                <a class="btn btn-primary" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row["id"] ?>">SỬA</a> | 
                <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc muốn xóa không')" href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row["id"] ?>">XÓA </a>
            </td>
        </tr>
    <?php 
     }
    ?>
  </tbody>
</table>