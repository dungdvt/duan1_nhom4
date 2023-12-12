<?php 
function check_kh($username){
    $sql = "SELECT * FROM khachhang WHERE username ='".$username."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_tk($username, $password){
    $sql = "SELECT * FROM khachhang WHERE username ='".$username."' and password ='".$password."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_loai($name) {
    $sql = "SELECT * FROM loaidv WHERE name ='".$name."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_adddv($tendv) {
    $sql = "SELECT * FROM dichvu WHERE name ='".$tendv."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_nv($tennv) {
    $sql = "SELECT * FROM nhanvien WHERE name ='".$tennv."'";
    $sp = pdo_query_one($sql);
    return $sp;
}


?>