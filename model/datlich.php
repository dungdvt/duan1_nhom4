<?php
function insert_datlich($id_khachhang, $id_ca, $id_nhanvien, $id_dichvu, $ngay){
    $sql = "INSERT INTO datlich (id_khachhang, id_dichvu, ngay, id_nhanvien, id_ca) VALUES ('$id_khachhang', '$id_dichvu', '$ngay', '$id_nhanvien', '$id_ca')";
    pdo_execute($sql);
}
?>