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
?>