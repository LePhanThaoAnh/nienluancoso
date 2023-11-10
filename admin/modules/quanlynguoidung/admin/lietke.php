<?php 
    
    $sql_lietke_admin = "SELECT * FROM admin ORDER BY id_admin DESC";
    $query_lietke_admin = mysqli_query($mysqli,$sql_lietke_admin);
?>

<h2 class="p-4 mt-2 mb-2">LIỆT KÊ DANH SÁCH ADMIN</h2>

    <table class="table table-bordered table-info" style="background-color: white;">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên admin</th>
            <th scope="col">Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_admin)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["username"]  ?></td>

            <td>
                <a class="btn btn-primary" href="?action=quanlynguoidung&query=sua&idadmin=<?php echo $row["id_admin"] ?>">SỬA</a> | 
                <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc muốn xóa không')" id="delete_button" href="modules/quanlynguoidung/admin/xuly.php?idadmin=<?php echo $row["id_admin"] ?>">XÓA </a>
            </td>
        </tr>
    <?php 
     }
    ?>

   
  </tbody>
</table>