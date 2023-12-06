<?php
include '../model/pdo.php';
include 'header.php';
include '../model/loai.php';
include '../model/dichvu.php';
include '../model/nhanvien.php';
include '../model/thongke.php';
include '../model/validate.php';
include '../model/datlich.php';
include '../model/binhluan.php';
include '../model/khachhang.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'addloai':
                // Check if the form is submitted
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    // Get the category name from the form
                    $tenloai = $_POST['tenloai'];
            
                    // Validate the category name
                    if (!empty($tenloai)) {
                        // Check if the category already exists
                        $existingCategory = check_loai($tenloai);
            
                        if (!$existingCategory) {
                            // Attempt to insert the category into the database
                            if (insert_loai($tenloai)) {
                                $thongbao = "Thêm thành công!";
                            } else {
                                $thongbao = "Thêm không thành công. vui lòng nhập lại";
                            }
                        } else {
                            $thongbao = "Tên loại dịch vụ đã tồn tại!";
                        }
                    } else {
                        $thongbao = "Tên dịch vụ không được để trống!";
                    }
                }
            
                // Load the add category form
                include 'loai/add.php';
                break;
            case 'listloai':
                $listloai= loadall_loai();
                include 'loai/list.php';
                break;
            case 'xoaloai':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_loai($_GET['id']);
                }
                $listloai= loadall_loai();
                include 'loai/list.php';
                break;
                case 'sualoai':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $loai = loadone_loai($_GET['id']);
                    }
                    include 'loai/update.php';
                    break;
                case 'updateloai':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_loai($id, $tenloai);
                        $thongbao = "Successfully!!!";
                    }
                    $sql = "SELECT * FROM loaidv ORDER BY id DESC";
                    $listloai = pdo_query($sql);
                    include 'loai/list.php';
                    break;
                    //Controller dichvu
            case 'adddv':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $idloai = $_POST['idloai'];
                    $tendv = $_POST['tendv'];
                    $giadv = $_POST['giadv'];
                    $mota = $_POST['mota'];
                    $anh = $_FILES['anh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                
                    // Validate the service name
                    if (!empty($tendv)) {
                        // Check if the service already exists
                        $existingService = check_adddv($tendv);
                
                        if (!$existingService) {
                            // Attempt to move the uploaded file
                            if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                                // Attempt to insert the service into the database
                                insert_dichvu($tendv, $giadv, $anh, $mota, $idloai);
                                $thongbao = "Thêm thành công!";
                            } else {
                                $thongbao = "Thêm không thành công. vui lòng nhập lại";
                            }
                        } else {
                            $thongbao = "Tên dịch vụ đã tồn tại!!";
                        }
                    } else {
                        $thongbao = "Tên dịch vụ không được để trống!";
                    }
                }
                
                $listloai = loadall_loai();
                include 'dichvu/add.php';
                break;
            case 'listdv':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $idloai=$_POST['idloai'];
                }
                else{
                    $kyw="";
                    $idloai=0; 
                 }
                $listloai = loadall_loai();
                $listdichvu = loadall_dichvu("", $idloai);
                include 'dichvu/list.php';
                break;
                case 'xoadv':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        delete_dichvu($_GET['id']);
                    }
                    $listdichvu = loadall_dichvu("", 0);
                    include 'dichvu/list.php';
                    break;
                case 'suadv':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                    $dichvu = loadone_dichvu($_GET['id']);
                    }
                    $listloai = loadall_loai();
                    include 'dichvu/update.php';
                    break;
                    case 'updatedv':
                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $idloai= $_POST['idloai'];
                            $tendv=$_POST['tendv'];
                            $giadv=$_POST['giadv'];
                            $mota=$_POST['mota'];
                            $anh=$_FILES['anh']['name'];
                            $target_dir="../upload/";
                            $target_file = $target_dir.basename($_FILES['anh']['name']);
                            if(move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)){
                                
                            }else{
        
                            }
                            update_dichvu($id, $idloai, $tendv, $giadv, $mota, $anh);
                            $thongbao = "Successfully!!!";
                        }
                        $listloai = loadall_loai();
                        $listdichvu = loadall_dichvu("", 0); 
                        include 'dichvu/list.php';
                        break;
                        //Nhanvien
                        case 'addnv':
                            // Check if the form is submitted
                            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                                // Get the staff member's name from the form
                                $tennv = $_POST['tennv'];
                        
                                // Validate the staff member's name
                                if (!empty($tennv)) {
                                    // Check if the staff member already exists
                                    $existingStaff = check_nv($tennv);
                        
                                    if (!$existingStaff) {
                                        // Attempt to insert the staff member into the database
                                        insert_nhanvien($tennv);
                                        $thongbao = "Thêm nhân viên thành công!";
                                    } else {
                                        $thongbao = "Nhân viên đã tồn tại!";
                                    }
                                } else {
                                    $thongbao = "Tên nhân viên k được để trống!";
                                }
                            }
                        
                            // Load the add staff member form
                            include 'nhanvien/add.php';
                            break;
                            case 'listnv':
                                $listnv= loadall_nhanvien();
                                include 'nhanvien/list.php';
                                break;
                                case 'xoanv':
                                    if(isset($_GET['id']) && ($_GET['id']>0)){
                                        delete_nhanvien($_GET['id']);
                                    }
                                    $listnv= loadall_nhanvien();
                                    include 'nhanvien/list.php';
                                    break;

                                    case 'suanv':
                                        if(isset($_GET['id']) && ($_GET['id']>0)){
                                            $nhanvien = loadone_nhanvien($_GET['id']);
                                        }
                                        include 'nhanvien/update.php';
                                        break;

                                    case 'updatenv':
                                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                                            $tennv=$_POST['tennv'];
                                            $id=$_POST['id'];
                                            update_nhanvien($id, $tennv);
                                            $thongbao = "Successfully!!!";
                                        }
                                        $sql = "SELECT * FROM nhanvien ORDER BY id DESC";
                                        $listnv = pdo_query($sql);
                                        include 'nhanvien/list.php';
                                        break;
                                        case 'listkhachhang':
                                            $listkhachhang = loadall_khachhang();
                                            include 'khachhang/list.php';
                                            break;
                                        case 'xoakhachhang':
                                            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                                delete_khachhang($_GET['id']);
                                            }
                                            $listkhachhang = loadall_khachhang();
                                            include 'khachhang/list.php';
                                            break;
                                        case 'qldl':
                                                
                                                $listdatlich=loadname();
                                                $listall= loadall_datlich();
                                                include 'datlich/list.php';
                                            break;
                                            case 'dsbl':
                                                $listbinhluan = loadall_binhluan(0);
                                                include "binhluan/list.php";
                                                break;
                                            case 'xoabl':
                                                  if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                                      xoa_binhluan($_GET['id']);
                                                  }
                                                  $listbinhluan = loadall_binhluan(0);
                                                  include 'binhluan/list.php';
                                                  break; 
                            
                                        case 'thongke':
                                            $listthongke=loadall_thongke(); 
                                            include 'thongke/list.php';
                                            break;
                                        case 'bieudo':
                                            $listthongke=loadall_thongke(); 
                                            include 'thongke/bieudo.php';
                                            break;
        default:

        break;

        }
    } else{
        include 'home.php';
    }
       
    include 'footer.php';
?>