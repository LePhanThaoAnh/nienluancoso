
<?php 
    $sql_sua_danhmucsp = "SELECT * FROM danhmuc WHERE id='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<h2>SỬA DANH MỤC SẢN PHẨM</h2>
<table class="table border border-dark" style="background-color: white" >
    <form action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <?php 
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
        <tbody>
            <tr>
                <th class="border border-dark" scope="row">Tên danh mục</th>
                <td class="border border-dark"><input type="text" name="tendanhmuc" value="<?php echo $dong["tendanhmuc"] ?>"></td>
            </tr>
            <tr>
                <th class="border border-dark" scope="row">Thứ tự</th>
                <td class="border border-dark"><input type="text" name="thutu"  value="<?php echo $dong["thutu"] ?>"></td>
                
            </tr>
            <tr>
                <td class="border border-dark" colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
            </tr>
        </tbody>
        <?php
        } 
        ?>
    </form>
</table>