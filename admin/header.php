<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body>
    <div class="container">
        <h1>Admin. </h1>
        <main>
        <div class="menu">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
                <li><a href="index.php?act=addloai"><i class="fa-solid fa-folder"></i> Loại dịch vụ</a></li>
                <li><a href="index.php?act=adddv"><i class="fa-solid fa-gears"></i> Dịch vụ</a></li>
                <li><a href="index.php?act=addnv"><i class="fa-solid fa-shop"></i> Nhân viên</a></li>
                <li><a href="index.php?act=listkhachhang"><i class="fa-solid fa-user"></i> Khách hàng</a></li>
                <li><a href="index.php?act=dsbl"><i class="fa-regular fa-comment"></i> Bình Luận</a></li>
                <!-- <li><a href="index.php?act=thongke"><i class="fa-solid fa-chart-simple"></i> Thống kê</a></li> -->
                <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="bx bx-data"></i><span>Thống kê</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="?act=thongke">Thống kê theo loại dịch vụ</a></li>
                            <li><a href="?act=thong-ke-slspbd">Dịch vụ được khách đặt nhiều nhất</a></li>
                            <li><a href="?act=thong-ke-ttdh">Nhân viên được đặt nhiều nhất</a></li>
                        </ul>
                    </li>

                <li><a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Thoát</a></li>
            </ul>
        </div>