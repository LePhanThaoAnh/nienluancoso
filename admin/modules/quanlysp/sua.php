
<?php 
    $sql_sua_sp = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<h2 class="pt-2 mt-2">SỬA SẢN PHẨM</h2>

<table class="table border border-dark"  style="background-color: white">
    
    <form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype="multipart/form-data" method="POST">
        <?php 
            while($dong = mysqli_fetch_array($query_sua_sp)){ 
        ?>
        <tbody>
            <tr>
                <th scope="row">Tên sản phẩm </th>
                <td><input type="text" name="tensanpham" value="<?php echo $dong["tensanpham"] ?>"></td>
            </tr>

            <tr>
                <th scope="row">Mã sản phẩm </th>
                <td><input type="text" name="masp" value="<?php echo $dong["masp"] ?>"></td>
            </tr>

            <tr>
                <th scope="row">Giá sản phẩm </th>
                <td><input type="text" name="giasp" value="<?php echo $dong["giasp"] ?>"></td>
            </tr>

            <tr>
                <th scope="row">Chọn mức giá sản phẩm</th>
                <td>
                    <select name="giasanpham">
                    <?php 
                        $sql_giasanpham ="SELECT * FROM giasanpham ORDER BY id_gia DESC";
                        $query_giasanpham = mysqli_query($mysqli,$sql_giasanpham);
                        while($row = mysqli_fetch_array($query_giasanpham)){
                            if($row['id_gia']==$dong['id_gia_sp']){
                        ?>
                        <option selected value="<?php echo $row['id_gia'] ?>"><?php echo $row['khoanggia'] ?></option>
                        <?php
                        } else{
                        ?>
                        <option value="<?php echo $row['id_gia'] ?>"><?php echo $row['khoanggia'] ?></option>
                        <?php
                        } 
                        }
                        ?>
                    </select>
                </td>
            </tr>


            <tr>
                <th scope="row">Số lượng </th>
                <td><input type="text" name="soluong" value="<?php echo $dong["soluong"] ?>"></td>
            </tr>

            <tr>
                <th scope="row">Hình ảnh </th>
                <td>
                    <input type="file" name="hinhanh" >
                    <img src="modules/quanlysp/uploads/<?php echo $dong["hinhanh"] ?>" width="150px" alt="">
                </td>
            </tr>

            <tr>
                <th scope="row"> Tóm tắt </th>
                <td><textarea rows="2" cols="50" style="resize:none"  name="tomtat" ><?php echo $dong["tomtat"] ?> </textarea></td>
            </tr>

            <tr>
                <th scope="row"> Miêu tả </th>
                <td><textarea rows="5" cols="50" style="resize:none" name="noidung"  ><?php echo $dong["noidung"] ?></textarea></td>
            </tr>


            <tr>
                <th scope="row">Chọn danh mục sản phẩm</th>
                <td>
                    <select name="danhmuc">
                        <?php 
                        $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row = mysqli_fetch_array($query_danhmuc)){
                            if($row['id']==$dong['id_danhmuc']){
                        ?>
                        <option selected value="<?php echo $row['id'] ?>"><?php echo $row['tendanhmuc'] ?></option>
                        <?php
                        } else{
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['tendanhmuc'] ?></option>
                        <?php
                        } 
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </tbody>
        <?php
        } 
        ?>
    </form>
</table>