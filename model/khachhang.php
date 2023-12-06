<?php

function insert_khachhang($name, $sodienthoai, $username, $password, $email){
    $sql = "INSERT INTO khachhang(name, sodienthoai, username, password, email) VALUES('$name', '$sodienthoai', '$username', '$password', '$email')";
    pdo_execute($sql);
}
function checkuser($username, $password){
    $sql = "SELECT * FROM khachhang WHERE username='".$username."' AND password='".$password."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email,$username){
    $sql = "SELECT * FROM khachhang WHERE email='".$email."' AND username='".$username."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_khachhang($id, $name, $sodienthoai, $password, $email){
    $sql = "UPDATE khachhang SET name = '$name', sodienthoai = '$sodienthoai', password = '$password', email = '$email' WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_khachhang(){
    $sql = "SELECT * FROM khachhang ORDER BY id DESC";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
}

function delete_khachhang($id){
    $sql = "DELETE FROM khachhang WHERE id=".$id;
    pdo_execute($sql);
}
function lichsudatlich($id_khachhang){
    $sql = "SELECT dichvu.name AS 'Tên sản phẩm', dichvu.gia AS 'Giá', datlich.ngay AS 'Ngày đặt hàng', datlich.id AS 'id_datlich' FROM dichvu JOIN datlich ON dichvu.id = datlich.id_dichvu WHERE datlich.id_khachhang = $id_khachhang";
    $listhistory = pdo_query($sql);
return $listhistory;
}

?>
