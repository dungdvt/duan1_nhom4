<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/formbook.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php
        // Kiểm tra xem có thông báo từ session hay không
        if (isset($_SESSION['thongbao'])) {
            // Hiển thị thông báo và sau đó xóa nó từ session để tránh hiển thị lại
            echo '<script>alert("' . $_SESSION['thongbao'] . '");</script>';
            unset($_SESSION['thongbao']);
        }
        ?>
        <!-- HEADER -->
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
            <!-- Popup Đăng Nhập -->
            <div class="overlay" id="overlay">
                <div class="popup">
                    <span class="close-btn" onclick="closeLoginForm()">&times;</span>
                    <h2>Đăng Nhập</h2>
                    <div class="login-container">
                        <form action="index.php?act=dangnhap" method="post">
                            <!-- Các trường đầu vào -->
                            <input type="text" name="username" placeholder="Tên đăng nhập" required>
                            <input type="password" name="password" placeholder="Mật khẩu" required>
                            <!-- Nút đăng nhập -->
                            <button type="submit" name="dangnhap">Đăng Nhập</button>

                            <!-- Liên kết quên mật khẩu -->
                            <a href="#">Quên mật khẩu?</a>
                        </form>

                        <div class="register-link">
                            <p>Chưa có tài khoản? <a href="index.php?act=dangki">Đăng kí ngay</a></p>
                        </div>

                    </div>
                    <?php }?>
                </div>
            </div>
        </div>    
     
      