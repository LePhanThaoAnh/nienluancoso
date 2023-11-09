
<?php 
    $sql_lh = "SELECT * FROM lienhe WHERE id=1 ";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
<style>
    /* #tieude{
    font-weight: bold;
    font-size:40px;
    font-family: Georgia; */
    

    @-webkit-keyframes my {
	 0% { color: #F8CD0A; } 
	 50% { color: #fff;  } 
	 100% { color: #F8CD0A;  } 
    }
    @-moz-keyframes my { 
        0% { color: #F8CD0A;  } 
        50% { color: #fff;  }
        100% { color: #F8CD0A;  } 
    }
    @-o-keyframes my { 
        0% { color: #F8CD0A; } 
        50% { color: #fff; } 
        100% { color: #F8CD0A;  } 
    }
    @keyframes my { 
        0% { color: #F8CD0A;  } 
        50% { color: #fff;  }
        100% { color: #F8CD0A;  } 
    } 
    .tieude {
            background-color: white ;
            font-size:24px;
            font-weight:bold;
        -webkit-animation: my 3000ms infinite;
        -moz-animation: my 3000ms infinite; 
        -o-animation: my 3000ms infinite; 
        animation: my 3000ms infinite;
        font-size: 40px;

    }
    
    .baophu{
        border-radius: 5px;
    }

</style>
<div class="baophu">
<h2 class="text-center p-2 ml-5 mr-5 tieude rounded" id="tieude" >LIÊN HỆ</h2>
</div>
<div class="p-2 m-2 text-center border border-warning"  style="background-color: white; box-shadow: 0px 2px 10px rgba(255, 215, 0,0.7);">
        <?php 
            while($dong = mysqli_fetch_array($query_lh)){ 
        ?>

                <h2 class=""><?php echo $dong['thongtinlienhe'] ?></h2>
        <?php
        } 
        ?>

</div>