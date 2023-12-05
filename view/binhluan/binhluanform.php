<?php

session_start();

include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<style>
    .mb {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        padding: 20px;
        margin: 20px;
    }

    .box_title {
        color: goldenrod;
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .box_content2 {
        margin-bottom: 15px;
    }

    .binhluan {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
    }

    .binhluan .noidung {
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
    }

    .binhluan .iduser {
        color: #777;
        font-size: 0.9em;
        margin-bottom: 5px;
    }

    .binhluan .ngaybinhluan {
        color: #aaa;
        font-size: 0.8em;
    }
</style>

<body>
    <?php
    ?>
    <div class="mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2 ">

            <div class="box_content2">
                <?php foreach ($dsbl as $bl) : ?>
                    <div class="binhluan">
                        <div class="noidung">"<?= $bl['noidung'] ?>"</div>
                        <div class="iduser"><?= $bl['iduser'] ?></div>
                        <div class="ngaybinhluan"><?= $bl['ngaybinhluan'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>

        <div class="box_search">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="hidden" name="iduser" value="<?=$iduser?>">
                    <input type="text" name="noidung" id="" >
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    
                </form>
              </div>
              <?php 
              
              if(isset($_SESSION['username'])) {
                    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){

                        $noidung = $_POST['noidung'];
                        $idpro = $_POST['idpro'];
                        $iduser =$_SESSION['username']['id'];
                        $ngaybinhluan = date('h:i:sa d/m/Y');
                        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                        header("location: ".$_SERVER['HTTP_REFERER']);
                        // $_SERVER['HTTP_REFERER'] chứa URL của trang trước đó mà người dùng đã đến trước khi họ đến trang hiện tại
                    }
                  }else{
                    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                      $_SESSION['thongbao'] = "yêu cầu đăng nhập "; 
                      echo 'Yêu cầu phải đăng nhập';
                      
                     
                    }
                  }    
              
              ?>

    </div>



</body>

</html>