<?php
function insert_loai($tenloai){
    $sql = "INSERT INTO loaidv(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function loadall_loai(){
    $sql = "SELECT * FROM loaidv ORDER BY id DESC";
    $listloai = pdo_query($sql);
    return $listloai;
}
function delete_loai($id){
    $sql = "DELETE FROM loaidv WHERE id=".$id;
    pdo_execute($sql);
}
function update_loai($id, $tenloai){
    $sql = "UPDATE loaidv SET name='$tenloai' WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_loai($id){
    $sql = "SELECT * FROM loaidv WHERE id=".$id;
    $loai = pdo_query_one($sql);
    return $loai;
}
?>