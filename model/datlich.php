<?php
function insert_datlich($id_khachhang, $id_ca, $id_nhanvien, $id_dichvu, $ngay){
   
    $sql = "INSERT INTO datlich (id_khachhang, id_dichvu, ngay, id_nhanvien, id_ca) VALUES ('$id_khachhang', '$id_dichvu', '$ngay', '$id_nhanvien', '$id_ca')";
    pdo_execute($sql);
}
function loadall_datlich(){
    $sql = "SELECT * FROM datlich ORDER BY id DESC";
    $listdatlich = pdo_query($sql);
    return $listdatlich;
}
function loadname(){
    $sql = "SELECT datlich.ngay, datlich.id, khachhang.name AS khachhang_name, ca.name AS ca_name, nhanvien.name AS nhanvien_name, dichvu.name AS dichvu_name FROM datlich INNER JOIN khachhang ON datlich.id_khachhang = khachhang.id INNER JOIN ca ON datlich.id_ca = ca.id INNER JOIN nhanvien ON datlich.id_nhanvien = nhanvien.id INNER JOIN dichvu ON datlich.id_dichvu = dichvu.id ORDER BY datlich.id DESC";
$listkhachhang = pdo_query($sql);
return $listkhachhang;
}
?>