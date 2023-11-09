<div class="container">
    <div class="row">
        <h2 class="col-9 p-4 mt-2 mb-2">THÊM TÀI KHOẢN ADMIN</h2>
        <h3  class="col-3 p-4 mt-2 mb-2"> <a href="?action=quanlynguoidung&query=user">Quản lý user</a> </h3>
    </div>
      
        
        
</div>
<table class="table border border-dark" style="background-color: white" >
    <form action="modules/quanlynguoidung/admin/xuly.php" method="POST">
        <tbody>
            <tr>
                <th  class="border border-dark" scope="row">Tên admin</th>
                <td  class="border border-dark" ><input type="text" name="tenadmin"></td>
            </tr>
            <tr>
                <th  class="border border-dark" scope="row">password</th>
                <td  class="border border-dark"><input type="password" name="password"></td>
                
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themadmin" value="Thêm admin"></td>
            </tr>
        </tbody>
    </form>
</table>