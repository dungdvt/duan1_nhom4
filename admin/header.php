<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<style>
    
       
</style>
<body>
    <div class="container">
        <h1>Admin. </h1>
        <main>
        <div class="menu">
            <ul>
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
                    <li><a href="index.php?act=listloai"><i class="fa-solid fa-folder"></i> Loại dịch vụ</a></li>
                    <li><a href="index.php?act=listdv"><i class="fa-solid fa-gears"></i> Dịch vụ</a></li>
                    <li><a href="index.php?act=listnv"><i class="fa-solid fa-shop"></i> Nhân viên</a></li>
                    <li><a href="index.php?act=listkhachhang"><i class="fa-solid fa-user"></i> Khách hàng</a></li>
                    <li><a href="index.php?act=dsbl"><i class="fa-regular fa-comment"></i> Bình Luận</a></li>
                    <li><a href="index.php?act=qldl"><i class="fa-regular fa-comment"></i> Quản lý đặt lịch</a></li>
                    <li id="thongke" class="has-arrow">
            <a href="javascript:void(0);" class="waves-effect" onclick="toggleSubMenu('thongke')">
                <i class="bx bx-data"></i><span><i class="fa-solid fa-chart-simple"></i> Thống kê <i class="fa-solid fa-caret-down caret-icon"></i></span>
            </a>
            <ul class="sub-menu" id="subThongKe" aria-expanded="false">
                <li><a href="?act=thongke"><i class="fa-solid fa-circle-dot"></i>Thống kê theo loại dịch vụ</a></li>
                <li><a href="?act=thongkedv"><i class="fa-solid fa-circle-dot"></i>Dịch vụ được khách đặt nhiều nhất</a></li>
                <li><a href="?act=thongkenv"><i class="fa-solid fa-circle-dot"></i>Nhân viên được đặt nhiều nhất</a></li>
            </ul>
        </li>
                    <li><a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Thoát</a></li>
            </ul>
        </div>