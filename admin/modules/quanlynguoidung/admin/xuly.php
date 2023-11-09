<?php 
    include('../../../connect/connect.php');

    //lay gia tri form vừa submit
    
        if(isset($_POST["themadmin"])){
            $tenadmin= $_POST['tenadmin'];
            $password = $_POST['password'];
            $sql_them = "INSERT INTO admin(username,password) VALUES('".$tenadmin."','".$password."')";
            mysqli_query($mysqli,$sql_them);
            header('Location:../../../index.php?action=quanlynguoidung&query=them');
        }elseif(isset($_POST['suaadmin'])){
            $tenadmin= $_POST['username'];
            $sql_update = "UPDATE admin SET username='".$tenadmin."' WHERE id_admin='$_GET[idadmin]'";
            mysqli_query($mysqli,$sql_update);
            header('Location:../../../index.php?action=quanlynguoidung&query=them');
        }else{
            $id=$_GET['idadmin'];
            $sql_xoa = "DELETE FROM admin WHERE id_admin='".$id."'"; 
            mysqli_query($mysqli,$sql_xoa);
            header('Location:../../../index.php?action=quanlynguoidung&query=them');
        }

    
?>