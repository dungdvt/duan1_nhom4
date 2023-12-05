<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng bạn đến 4` Barber</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/formbook.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="image/dichvu/logo.png"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="index.php?act=dsdv&id_loai=" .$id>Dịch vụ</a>
                        <div class="dropdown-content">
                            <?php
              $sql = "SELECT * FROM loaidv ORDER BY id DESC";
              $listloai = pdo_query($sql);
                foreach($listloai as $loai){
                    extract($loai);
                    $linkloai = "index.php?act=dsdv&id_loai=".$id;
                    echo '<a href="'.$linkloai.'">'.$name.'</a>';
                }
                ?>

                            <!-- <a href="#">Menu Con 2</a>
                <a href="#">Menu Con 3</a> -->
                        </div>
                    </li>
                    <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                </ul>
            </div>
            <?php
                            if(isset($_SESSION['username'])){
                                extract($_SESSION['username'])
                        ?>
            <script>
                function toggleOptions() {
                    var options = document.getElementById('user-options');
                    options.classList.toggle('show');
                }
            </script>
            <div class="row">
                <div class="user-dropdown">
                    <label for="" onclick="toggleOptions()">Xin chào <strong class="strong">
                            <?=$name?>
                        </strong></label>
                    <div id="user-options" class="user-dropdown-content">
                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=sua">Sửa thông tin</a></li>
                        <?php if($role==1){ ?>
                        <li><a href="admin/index.php">Quản trị</a></li>
                        <?php }?>
                        <?php if($role!=1){ ?>
                        <li><a href="index.php?act=history">Lịch sử đặt lịch</a></li>
                        <?php }?>
                        <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                    </div>
                </div>
            </div>
            <?php
                            }else{
                        ?>
            <div class="dangnhap">
                <a href="index.php?act=dangnhap">Đăng nhập</a>
                <!-- <input type="submit" value="Đăng nhập" onclick="openLoginForm()"> -->
            </div>
            <?php }?>
        </div>    

    <main>
    <div class="slideshow">
        <div class="banner" >
            <img id="banner" src="./image/img2.png" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
    </div>

    <div class="form-datlich" >
        <form action="index.php?act=datlich" method="post">
        <h2 class="h1">Đặt lịch giữ chỗ chỉ 30 giây</h2>
        <p class="h1">Cắt xong trả tiền, hủy lịch không sao</p>
        <input type="submit" name="" value="Đặt lịch ngay" id="">
        </form>
    </div>
        <div class="content">
            <?php
            foreach($loainew as $loai){
                extract($loai);
                echo ' <h1 class="h11">'.$name.'</h1>';
                $dichvu_result = loadall_dv_loai($id);
                echo '<div class="box-content">';
                foreach($dichvu_result as $dv){
                    extract($dv);
                    $linkdv="index.php?act=dichvuct&iddv=".$id;
                    $hinh = $img_path.$anh;
                    echo '
                        <div class="box-pr">
                            <div class="img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <h3>'.$name.'</h3>
                            <div class="chitiet_sp">
                                <p class="price">Giá từ '.$gia.' VNĐ</p>
                                <a href="'.$linkdv.'">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    ';
                }
            echo '</div>';
            }
            ?>

        
        </div>
    </main>
 <!-- <footer>-->
        <footer>
            <div class="boxfooter">
                <div class="thongtin">
                    <a href="">Về chúng tôi</a>
                    <a href="">Dịch vụ</a>
                    <a href="">Chính sách bảo mật</a>
                </div>
                <div class="giolamviec">
                    <p>Giờ phục vụ:
                        8h30 - 20h30 (Thứ 2-Chủ nhật)</p>
                    <p>Hotline (1000đ/phút):1900.27.27.03</p>
                    <p>Liên hệ học nghề tóc:0967.86.3030</p>
                    <a href="" class="thongtin">Liên hệ quảng cáo</a>
                </div>

            </div>
            <div class="copyright">
                <p>Copyright © 2023 HuyHTML. All rights reserved.</p>
            </div>
        </footer>
</div>
    
</body>
<script src="../js/app.js"></script>
    <script>
        var album=[];
for(var i=1;i<6;i++){
    album[i]=new Image();
    album[i].src="./image/img"+i+".png";
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>4){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}
function next(){
    index++;
    if(index>4){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
}
function pre(){
    index--;
    if(index<0){
        index=4;
    }
    document.getElementById("banner").src=album[index].src;
   
}
    </script>
    <script src="js/app.js"></script>
    <script>
    function openLoginForm() {
        document.getElementById("overlay").style.display = "flex";
    }

    function closeLoginForm() {
        document.getElementById("overlay").style.display = "none";
    }
</script>

</html>