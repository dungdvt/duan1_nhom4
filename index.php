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

$loainew = loadall_loai();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];

    switch ($act) {
        case 'dsdv':
            if (isset($_GET['id_loai']) && $_GET['id_loai'] > 0) {
                $idloai = $_GET['id_loai'];

                $dsdv = loadall_dichvu("", $idloai);
                $tenloai = load_ten_loai($idloai);
                include 'view/dsdv.php';
            } else {
                include 'view/home.php';
            }
            break;

        case 'dichvuct':
            if (isset($_GET['iddv']) && $_GET['iddv'] > 0) {
                $id = $_GET['iddv'];

                $onedv = loadone_dichvu($id);
                include 'view/dichvuct.php';
            } else {
                include 'view/home.php';
            }
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if (!empty($username) && !empty($password)) {
                    $checkuser = check_tk($username, $password);

                    if ($checkuser) {
                        $_SESSION['username'] = $checkuser;
                        header('location: index.php');
                    } else {
                        $thongbao = "Tài khoản không tồn tại! Vui lòng đăng kí để đăng nhập.";
                    }
                } else {
                    $thongbao = "Vui lòng nhập tên đăng nhập và mật khẩu.";
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
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if (strlen($username) >= 6 && strlen($username) <= 10) {
                            if (strlen($password) >= 6 && strlen($password) <= 15) {
                                $existingUser = check_kh($username);

                                if (!$existingUser) {
                                    insert_khachhang($name, $sodienthoai, $username, $password, $email);
                                    echo '<script>
                    var overlay = document.createElement("div");
                    overlay.style.position = "fixed";
                    overlay.style.top = "0";
                    overlay.style.left = "0";
                    overlay.style.width = "100%";
                    overlay.style.height = "100%";
                    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                    overlay.style.display = "flex";
                    overlay.style.alignItems = "center";
                    overlay.style.justifyContent = "center";
                    overlay.style.zIndex = "9999";

                    var popup = document.createElement("div");
                    popup.innerHTML = "Đăng kí thành công";
                    popup.style.backgroundColor = "white";
                    popup.style.padding = "50px 20px";
                    popup.style.maxWidth = "100%";

                    var closeButton = document.createElement("button");
                    closeButton.innerHTML = "Đóng";
                    closeButton.style.marginTop = "10px";
                    closeButton.style.padding = "5px 10px";
                    closeButton.addEventListener("click", function() {
                        document.body.removeChild(overlay);
                    });

                    popup.appendChild(closeButton);
                    overlay.appendChild(popup);
                    document.body.appendChild(overlay);
                 </script>';
                                } else {
                                    $thongbao = "Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.";
                                }
                            } else {
                                $thongbao = "Độ dài mật khẩu phải đủ từ 6 đến 15 kí tự.";
                            }
                        } else {
                            $thongbao = "Tên tài khoản phải đủ từ 6 đến 10 kí tự.";
                        }
                    } else {
                        $thongbao = "Email không hợp lệ!";
                    }
                } else {
                    echo '<script>
                    var overlay = document.createElement("div");
                    overlay.style.position = "fixed";
                    overlay.style.top = "0";
                    overlay.style.left = "0";
                    overlay.style.width = "100%";
                    overlay.style.height = "100%";
                    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                    overlay.style.display = "flex";
                    overlay.style.alignItems = "center";
                    overlay.style.justifyContent = "center";
                    overlay.style.zIndex = "9999";

                    var popup = document.createElement("div");
                    popup.innerHTML = "Vui lòng nhập đầy đủ thông tin";
                    popup.style.backgroundColor = "white";
                    popup.style.padding = "50px 20px";
                    popup.style.maxWidth = "100%";

                    var closeButton = document.createElement("button");
                    closeButton.innerHTML = "Đóng";
                    closeButton.style.marginTop = "10px";
                    closeButton.style.padding = "5px 10px";
                    closeButton.addEventListener("click", function() {
                        document.body.removeChild(overlay);
                    });

                    popup.appendChild(closeButton);
                    overlay.appendChild(popup);
                    document.body.appendChild(overlay);
                 </script>';
                }
                include 'view/taikhoan/dangki.php';
                exit();
            }
            include 'view/taikhoan/dangki.php';
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $checkemail = checkemail($email, $username);
                if (is_array($checkemail)) {
                    echo '<script>
                    var overlay = document.createElement("div");
                    overlay.style.position = "fixed";
                    overlay.style.top = "0";
                    overlay.style.left = "0";
                    overlay.style.width = "100%";
                    overlay.style.height = "100%";
                    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                    overlay.style.display = "flex";
                    overlay.style.alignItems = "center";
                    overlay.style.justifyContent = "center";
                    overlay.style.zIndex = "9999";

                    var popup = document.createElement("div");
                    popup.innerHTML = "Mật khẩu của bạn là: ' . $checkemail['password'] . '";
                    popup.style.backgroundColor = "white";
                    popup.style.padding = "50px 20px";
                    popup.style.maxWidth = "100%";

                    var closeButton = document.createElement("button");
                    closeButton.innerHTML = "Đóng";
                    closeButton.style.marginTop = "10px";
                    closeButton.style.padding = "5px 10px";
                    closeButton.addEventListener("click", function() {
                        document.body.removeChild(overlay);
                    });

                    popup.appendChild(closeButton);
                    overlay.appendChild(popup);
                    document.body.appendChild(overlay);
                 </script>';
                 
                } else {
                    $thongbao = '<span style="color: red;">Email này không tồn tại!</span>';
                }
            }
            include 'view/taikhoan/quenmk.php';
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
                 echo '<script>
                var overlay = document.createElement("div");
                overlay.style.position = "fixed";
                overlay.style.top = "0";
                overlay.style.left = "0";
                overlay.style.width = "100%";
                overlay.style.height = "100%";
                overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                overlay.style.display = "flex";
                overlay.style.alignItems = "center";
                overlay.style.justifyContent = "center";
                overlay.style.zIndex = "9999";

                var popup = document.createElement("div");
                popup.innerHTML = "Cập nhật thành công";
                popup.style.backgroundColor = "white";
                popup.style.padding = "50px 20px";
                popup.style.maxWidth = "100%";

                var closeButton = document.createElement("button");
                closeButton.innerHTML = "Đóng";
                closeButton.style.marginTop = "10px";
                closeButton.style.padding = "5px 10px";
                closeButton.addEventListener("click", function() {
                    document.body.removeChild(overlay);
                });

                popup.appendChild(closeButton);
                overlay.appendChild(popup);
                document.body.appendChild(overlay);
             </script>';
             
            } else {
                $thongbao = "Tài khoản không tồn tại";
            }
            include 'view/taikhoan/update.php';
            break;

        case 'dangxuat':
            session_start();
            session_unset();
            session_destroy();
            header('location: index.php');
            break;

        case 'datlich':
            $isLoggedIn = isset($_SESSION['username']);
            if ($isLoggedIn) {
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['datlich'])) {
                    $id_khachhang = $_SESSION['username']['id'];
                    if (isset($_POST['id_ca'], $_POST['id_nhanvien'], $_POST['id_dichvu'], $_POST['ngay'])) {
                    $id_ca = $_POST['id_ca'];
                    $id_nhanvien = $_POST['id_nhanvien'];
                    $id_dichvu = $_POST['id_dichvu'];
                    $ngay = $_POST['ngay'];

                    if (empty($id_dichvu) || empty($ngay) || empty($id_nhanvien) || empty($id_ca)) {
                        echo '<script>
                                var overlay = document.createElement("div");
                                overlay.style.position = "fixed";
                                overlay.style.top = "0";
                                overlay.style.left = "0";
                                overlay.style.width = "100%";
                                overlay.style.height = "100%";
                                overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                                overlay.style.display = "flex";
                                overlay.style.alignItems = "center";
                                overlay.style.justifyContent = "center";
                                overlay.style.zIndex = "9999";

                                var popup = document.createElement("div");
                                popup.innerHTML = "Vui lòng chọn đầy đủ thông tin!";
                                popup.style.backgroundColor = "white";
                                popup.style.padding = "50px 20px";
                                popup.style.maxWidth = "100%";

                                var closeButton = document.createElement("button");
                                closeButton.innerHTML = "Đóng";
                                closeButton.style.marginTop = "10px";
                                closeButton.style.padding = "5px 10px";
                                closeButton.addEventListener("click", function() {
                                    document.body.removeChild(overlay);
                                });

                                popup.appendChild(closeButton);
                                overlay.appendChild(popup);
                                document.body.appendChild(overlay);
                             </script>';
                    } else {
                        $checkNv = check_nhanvien($id_ca, $id_nhanvien, $ngay);
                        if (empty($checkNv)) {
                            $success = insert_datlich($id_khachhang, $id_ca, $id_nhanvien, $id_dichvu, $ngay);
                          
                                echo '<script>
                                var overlay = document.createElement("div");
                                overlay.style.position = "fixed";
                                overlay.style.top = "0";
                                overlay.style.left = "0";
                                overlay.style.width = "100%";
                                overlay.style.height = "100%";
                                overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                                overlay.style.display = "flex";
                                overlay.style.alignItems = "center";
                                overlay.style.justifyContent = "center";
                                overlay.style.zIndex = "9999";
            
                                var popup = document.createElement("div");
                                popup.innerHTML = "Đặt lịch thành công";
                                popup.style.backgroundColor = "white";
                                popup.style.padding = "50px 20px";
                                popup.style.maxWidth = "100%";
            
                                var closeButton = document.createElement("button");
                                closeButton.innerHTML = "Đóng";
                                closeButton.style.marginTop = "10px";
                                closeButton.style.padding = "5px 10px";
                                closeButton.addEventListener("click", function() {
                                    document.body.removeChild(overlay);
                                });
            
                                popup.appendChild(closeButton);
                                overlay.appendChild(popup);
                                document.body.appendChild(overlay);
                             </script>';
                            
                        } else {
                            // Xử lý khi có lịch làm việc
                            echo '<script>
                            var overlay = document.createElement("div");
                            overlay.style.position = "fixed";
                            overlay.style.top = "0";
                            overlay.style.left = "0";
                            overlay.style.width = "100%";
                            overlay.style.height = "100%";
                            overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                            overlay.style.display = "flex";
                            overlay.style.alignItems = "center";
                            overlay.style.justifyContent = "center";
                            overlay.style.zIndex = "9999";
                    
                            var popup = document.createElement("div");
                            popup.innerHTML = "Không thể đặt lịch vào ngày và giờ đã chọn. Vui lòng chọn thời gian khác!";
                            popup.style.backgroundColor = "white";
                            popup.style.padding = "50px 20px";
                            popup.style.maxWidth = "100%";
                    
                            var closeButton = document.createElement("button");
                            closeButton.innerHTML = "Đóng";
                            closeButton.style.marginTop = "10px";
                            closeButton.style.padding = "5px 10px";
                            closeButton.addEventListener("click", function() {
                                document.body.removeChild(overlay);
                            });
                    
                            popup.appendChild(closeButton);
                            overlay.appendChild(popup);
                            document.body.appendChild(overlay);
                        </script>';
                        }
                    }
                }else{
                    echo '<script>
                    var overlay = document.createElement("div");
                    overlay.style.position = "fixed";
                    overlay.style.top = "0";
                    overlay.style.left = "0";
                    overlay.style.width = "100%";
                    overlay.style.height = "100%";
                    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
                    overlay.style.display = "flex";
                    overlay.style.alignItems = "center";
                    overlay.style.justifyContent = "center";
                    overlay.style.zIndex = "9999";

                    var popup = document.createElement("div");
                    popup.innerHTML = "Vui lòng chọn đầy đủ thông tin!";
                    popup.style.backgroundColor = "white";
                    popup.style.padding = "50px 20px";
                    popup.style.maxWidth = "100%";

                    var closeButton = document.createElement("button");
                    closeButton.innerHTML = "Đóng";
                    closeButton.style.marginTop = "10px";
                    closeButton.style.padding = "5px 10px";
                    closeButton.addEventListener("click", function() {
                        document.body.removeChild(overlay);
                    });

                    popup.appendChild(closeButton);
                    overlay.appendChild(popup);
                    document.body.appendChild(overlay);
                 </script>';
                }
                } else {
                    // Handle non-POST cases
                }
            } else {
                header("Location: index.php?act=dangnhap");
                exit;
            }

            $listdichvu = loadall_dichvu();
            $listnhanvien = loadall_nhanvien();
            $listca = loadall_ca();
            include 'view/datlich/datlich.php';
            break;

        case 'history':
            if (isset($_SESSION['username'])) {
                $id_khachhang = $_SESSION['username']['id'];
                $listhistory = lichsudatlich($id_khachhang);
            } else {
                echo "Bạn chưa đăng nhập.";
            }
            include 'view/datlich/history.php';
            break;
            
            case 'huylich':
                // Xử lý hủy lịch ở đây
                if (isset($_SESSION['username'])) {
                    $id_khachhang = $_SESSION['username']['id'];
                    // Lấy thông tin cần thiết để xác định lịch cần hủy, có thể từ biến GET hoặc POST
                    $id_datlich_to_cancel = $_GET['id_datlich']; // Thay thế bằng cách lấy từ biến phù hợp
                    huy_datlich($id_datlich_to_cancel);
                    // Thực hiện hàm hủy lịch, ví dụ: huy_datlich($id_datlich_to_cancel);
                    
                    // Sau khi hủy, có thể làm mới trang hoặc thực hiện các bước cần thiết khác
                    header("Location: index.php?act=history");
                    exit();
                } else {
                    echo "Bạn chưa đăng nhập.";
                }
                break;
            case 'binhluan':
                
                include 'view/dichvuct.php';
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
?>
