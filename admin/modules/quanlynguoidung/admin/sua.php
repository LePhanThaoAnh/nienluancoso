
<?php 
    $sql_sua_admin = "SELECT * FROM admin WHERE id_admin='$_GET[idadmin]' LIMIT 1";
    $query_sua_admin = mysqli_query($mysqli,$sql_sua_admin);
?>

<h2 class="pt-2 mt-2">SỬA TÀI KHOẢN ADMIN</h2>
<table class="table border border-dark " style="background-color: white">
    <form action="modules/quanlynguoidung/admin/xuly.php?idadmin=<?php echo $_GET['idadmin'] ?>" method="POST">
        <?php 
        while($dong = mysqli_fetch_array($query_sua_admin)){
        ?>
        <tbody>
            <tr>
                <th class="border border-dark" scope="row">Tên tài khoản</th>
                <td class="border border-dark"><input type="text" name="username" value="<?php echo $dong["username"] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suaadmin" value="Sửa admin"></td>
            </tr>
        </tbody>
        <?php
        } 
        ?>
    </form>
</table>