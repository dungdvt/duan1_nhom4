<?php
function insert_nhanvien($tennv){
    $sql = "INSERT INTO nhanvien(name) VALUES('$tennv')";
    pdo_execute($sql);
}
function  loadall_nhanvien(){
    $sql = "SELECT * FROM nhanvien ORDER BY id DESC";
    $listnv = pdo_query($sql);
    return $listnv;
}
function  delete_nhanvien($id){
    $sql = "DELETE FROM nhanvien WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_nhanvien($id){
    $sql = "SELECT * FROM nhanvien WHERE id=".$id;
    $nhanvien = pdo_query_one($sql);
    return $nhanvien;
}
function update_nhanvien($id, $tennv){
    $sql = "UPDATE nhanvien SET name='$tennv' WHERE id=".$id;
    pdo_execute($sql);
}
function check_nhanvien($id_ca, $id_nhanvien, $ngay){
    $sql = "SELECT nhanvien.id, nhanvien.name, ca.name AS ca_ten 
    FROM datlich 
    INNER JOIN nhanvien ON datlich.id_nhanvien = nhanvien.id 
    INNER JOIN ca ON datlich.id_ca = ca.id 
    WHERE datlich.id_ca = $id_ca AND DATE(datlich.ngay) = '$ngay' AND datlich.id_nhanvien = $id_nhanvien";
    $checknv = pdo_query($sql);
    return $checknv;
}
?>