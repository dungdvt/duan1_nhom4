<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/dichvu.php';
include 'view/header.php';
include 'global.php';
include 'model/loai.php';
include 'model/khachhang.php';
include 'model/nhanvien.php';
include 'model/ca.php';
include 'model/validate.php';
include 'model/datlich.php';

$loainew =  loadall_loai();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dsdv':
            // if(isset($_POST['kyw']) && $_POST['kyw']>0){
            //     $kyw = $_POST['kyw'];
            // }else{
            //     $kyw = "";
            // }
            if (isset($_GET['id_loai']) && $_GET['id_loai'] > 0) {
                $idloai = $_GET['id_loai'];

                $dsdv = loadall_dichvu("", $idloai);
                $tenloai = load_ten_loai($idloai);
                include 'view/dsdv.php';
            } else {
                //   $idloai=0;
                include 'view/home.php';
            }


            break;
        case 'dichvuct':
            // if(isset($_POST['kyw']) && $_POST['kyw']>0){
            //     $kyw = $_POST['kyw'];
            // }else{
            //     $kyw = "";
            // }
            if (isset($_GET['iddv']) && $_GET['iddv'] > 0) {
                $id = $_GET['iddv'];

                $onedv = loadone_dichvu($id);
                include 'view/dichvuct.php';
            } else {
                //   $idloai=0;
                include 'view/home.php';
            }


            break;
            case 'dangnhap':
                if (isset($_POST['dangnhap'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
            
                    // Validate input (you may want to add more validation)
                    if (!empty($username) && !empty($password)) {
                        // Check user credentials
                        $checkuser = check_tk($username, $password);
            
                        if ($checkuser) {
                            $_SESSION['username'] = $checkuser;
                            header('location: index.php');
                        } else {
                            $thongbao = "Tài khoản không tồn tại! Vui lòng đăng kí để đăng nhập";
                        }
                    } else {
                        $thongbao = "Vui lòng nhập tên đăng nhập và mật khẩu";
                    }
                }
                include 'view/taikhoan/dangnhap.php';
                break;
            case 'dangki':
                if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
            
                    if (!empty($name) && !empty($username) && !empty($password) && !empty($email) && !empty($sodienthoai)) {
                        // Validate email address
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            // Validate username length
                            if (strlen($username) >= 6 && strlen($username) <= 10) {
                                // Validate password length
                                if (strlen($password) >= 6 && strlen($password) <= 15) {
                                    // Check if the username already exists
                                    $existingUser = check_kh($username);
            
                                    if (!$existingUser) {
                                        // Insert into the database if the username is not taken
                                        insert_khachhang($name, $sodienthoai, $username, $password, $email);

                                    } else {
                                        $thongbao = "Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.";
                                    }
                                } else {
                                    $thongbao = "Độ dài mật khẩu phải đủ từ 6 đến 15 kí tự";
                                }
                            } else {
                                $thongbao = "Tên tài khoản phải đủ từ 6 đến 10 kí tự!";
                            }
                        } else {
                            $thongbao = "Email không hợp lệ!";
                        }
                    } else {
                        $thongbao = "Vui lòng nhập đủ thông tin";
                    }
            
                    include 'view/taikhoan/dangki.php';
                    exit();
                }
            
                include 'view/taikhoan/dangki.php';
                break;
            
            
        case 'sua':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
             
                $password = $_POST['password'];
                $id = $_POST['id'];
                update_khachhang($id, $name, $sodienthoai, $password, $email);
                $_SESSION['username'] = checkuser($username, $password);
                header('location: index.php?act=sua');
            } else {
                $thongbao = "Account doesn't exist";
            }

            include 'view/taikhoan/update.php';

            break;
        case 'dangxuat':

            // Bắt đầu session nếu chưa tồn tại
            session_start();

            // Xoá toàn bộ session
            session_unset();
            session_destroy();

            // Điều hướng người dùng về trang đăng nhập hoặc trang chủ, tuỳ thuộc vào yêu cầu của bạn
            header('location: index.php');
            break;
        case 'datlich':
            $isLoggedIn = isset($_SESSION['username']);
            if (isset($_POST['datlich']) && $_POST['datlich'] && $isLoggedIn) {
                $id_khachhang =  $_SESSION['username']['id'] ;
                $id_ca = $_POST['id_ca'];
                $id_nhanvien = $_POST['id_nhanvien'];
                $id_dichvu = $_POST['id_dichvu'];
                $ngay = $_POST['ngay'];
                $checkNv = check_nhanvien($id_ca,$id_nhanvien, $ngay);
                if (empty($checkNv)) {
                    // Nếu không có lịch làm việc, thực hiện thêm đặt lịch
                    insert_datlich($id_khachhang, $id_ca, $id_nhanvien, $id_dichvu, $ngay);
                } else {
                    // Nếu có lịch làm việc, có thể hiển thị thông báo hoặc thực hiện xử lý khác
                    echo "Không thể đặt lịch vào ngày và giờ đã chọn. Vui lòng chọn thời gian khác!";
                }
            } else if (!$isLoggedIn) {
                // Người dùng chưa đăng nhập, hiển thị thông báo hoặc chuyển hướng đến trang đăng nhập
                header("Location: index.php?act=dangnhap");
                exit;
                // Hoặc có thể chuyển hướng đến trang đăng nhập
                // 
            }
        
            $listdichvu = loadall_dichvu();
            $listnhanvien =  loadall_nhanvien();
            $listca = loadall_ca();
            include 'view/datlich/datlich.php';
            break;
        case 'history':
            if(isset($_SESSION['username'])) {
            $id_khachhang = $_SESSION['username']['id'];
        
            // Sử dụng $id_khachhang trong câu truy vấn
            $listhistory = lichsudatlich($id_khachhang);
        
            // Thực hiện câu truy vấn và xử lý kết quả...
        } else {
            // Xử lý trường hợp người dùng chưa đăng nhập
            echo "Bạn chưa đăng nhập.";
        }
           
            include 'view/datlich/history.php';
            break;
        case 'gioithieu':
            include 'view/gioithieu.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
ob_end_flush();
