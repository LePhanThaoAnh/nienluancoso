<?php 
    session_start();
    include("../../admin/connect/connect.php");
    $id_khachhang = $_SESSION["id_khachhang"];
    //hàm random số
    $code_order =rand(0,9999);
    $insert_cart = "INSERT INTO cart(id_khachhang,code_cart,cart_status) VALUES('".$id_khachhang."','".$code_order."',1) ";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        //thêm giỏ hàng chi tiết - vòng lặp lấy từng phần tử trong giỏ hàng 
        foreach($_SESSION["cart"] as $key=> $value){
            $id_sanpham = $value["id"];
            $soluong = $value["soluong"];
            $insert_order_details = "INSERT INTO cart_details(id_sanpham,code_cart,soluongmua) 
            VALUES('".$id_sanpham."','".$code_order."','".$soluong."') ";
            mysqli_query($mysqli,$insert_order_details);

        }
    }

    unset($_SESSION["cart"]);
    echo '<script>window.open("../../index.php?quanly=camon","_SELF")</script>';

?>

<p>Thanh toán giỏ hàng</p>
