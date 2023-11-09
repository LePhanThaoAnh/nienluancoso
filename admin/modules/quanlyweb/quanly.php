
<?php 

    $sql_lh = "SELECT * FROM lienhe WHERE id=1 ";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
<h2 class="pt-2 mt-2">QUẢN LÝ LIÊN HỆ WEBSITE</h2>
<table class="table border border-dark" style="background-color: white">
        <?php 
            while($dong = mysqli_fetch_array($query_lh)){ 
        ?>
    <form action="modules/quanlyweb/xuly.php?id=<?php echo $dong["id"] ?>" method="POST" enctype="multipart/form-data">

        
        <tbody>
            <tr>
                <th class="border border-dark" scope="row">Thông tin liên hệ</th>
                <td class="border border-dark" ><textarea name="thongtinlienhe" id="" cols="30" rows="10"><?php echo $dong["thongtinlienhe"] ?></textarea></td>
            </tr>
           
            <tr>
                <td colspan="2"><input type="submit" name="submitlienhe" value="Cập nhật"></td>
            </tr>
        </tbody>

        <?php
        } 
        ?>
    </form>
</table>