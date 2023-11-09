<?php 
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
      unset($_SESSION["dangnhap"]);
      header("Location:login.php"); 

    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container " width="">
            <a class="navbar-brand" href="https://nentang.vn">AnhLight</a>
            
        <a class="nav-link text-white" href="index.php?dangxuat=1">Đăng xuất: 
          <?php if(isset($_SESSION["dangnhap"])){
            echo $_SESSION["dangnhap"];
          } ?>
        </a>

        </div>

    </nav>


