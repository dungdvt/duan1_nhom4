<?php
function loadall_thongke(){
    $sql="SELECT loaidv.id AS maloai, loaidv.name AS tenloai, COUNT(dichvu.id) AS countdv, MIN(dichvu.gia) AS minprice, MAX(dichvu.gia) AS maxprice, AVG(dichvu.gia) AS avgprice";
    $sql.=" FROM dichvu LEFT JOIN loaidv ON loaidv.id=dichvu.id_loai";
    $sql.=" GROUP BY loaidv.id ORDER BY loaidv.id DESC";
    $listtk=pdo_query($sql);
    return $listtk;
}
function load_thongke_dv(){
    $sql="SELECT dichvu.id AS madv, dichvu.name AS tendv, COUNT(datlich.id) AS countdl, MIN(datlich.id_dichvu) AS minprice, MAX(datlich.id_dichvu) AS maxprice, AVG(datlich.id_dichvu) AS avgprice";
    $sql.=" FROM datlich LEFT JOIN dichvu ON dichvu.id=datlich.id_dichvu";
    $sql.=" GROUP BY dichvu.id ORDER BY dichvu.id DESC";
    $listtkdv=pdo_query($sql);
    return $listtkdv;
}
function load_thongke_nv(){
    $sql="SELECT nhanvien.id AS manv, nhanvien.name AS tennv, COUNT(datlich.id) AS countdl, MIN(datlich.id_nhanvien) AS minprice, MAX(datlich.id_nhanvien) AS maxprice, AVG(datlich.id_nhanvien) AS avgprice";
    $sql.=" FROM datlich LEFT JOIN nhanvien ON nhanvien.id=datlich.id_nhanvien";
    $sql.=" GROUP BY nhanvien.id ORDER BY nhanvien.id DESC";
    $listtknv=pdo_query($sql);
    return $listtknv;
}
?>