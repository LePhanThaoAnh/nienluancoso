<?php 
    session_start();
    if(!isset($_SESSION["dangnhap"])){
      header("Location:login.php"); 

    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/style.css">

    <title>
        Admin
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" type="text/css" href="../css/layouts.css">
    
</head>

<body id="body">
  
    <!-- header -->
    <?php include ("connect/connect.php") ?>
    <?php include("modules/header.php") ?>
    <div class="container text-center m-15 content">
        
           <div class="col">
            
                <div class=""> 

                <?php include("modules/sidebar.php") ?>

                </div>
                <div class=""> 
                <?php include("modules/main.php") ?>
                </div>
            </div>
       
    </div>

    <!--   footer  -->
    <?php include("modules/footer.php") ?>


    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
                CKEDITOR.replace( 'noidung' );
                CKEDITOR.replace( 'tomtat' );
                CKEDITOR.replace( 'thongtinlienhe' );
    </script>

    <!-- Thống kê -->
    <script type="text/javascript">
        new Morris.Area({
            // ID of the element in which to draw the chart.
            element: 'chart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                { year: '2008', value: 20 },
                { year: '2009', value: 10 },
                { year: '2010', value: 5 },
                { year: '2011', value: 5 },
                { year: '2012', value: 20 }
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value','order'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Value']
            });
    </script>

</body>

</html>