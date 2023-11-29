<?php
function insert_dichvu($tendv, $giadv, $anh, $mota, $idloai){
    $sql = "INSERT INTO dichvu(name, gia, anh, mota, id_loai) VALUES('$tendv', '$giadv', '$anh', '$mota', '$idloai')";
    pdo_execute($sql);
}
function loadall_dichvu_home(){
    $sql = "SELECT * FROM dichvu where 1 order by id desc limit 0,3";
    $listdichvu = pdo_query($sql);
    return  $listdichvu;
}
function load_ten_loai($idloai){
    if($idloai>0){
    $sql = "SELECT * FROM loaidv WHERE id=".$idloai;
    $loai = pdo_query_one($sql);
    extract($loai);
    return $name;
    }else{
        return "";
    }
}
function loadall_dichvu($kyw="", $idloai=0){
    $sql = "SELECT * FROM dichvu where 1";
    if($kyw != ""){
        $sql.=" AND name LIKE'%".$kyw."%'";
    }
    if($idloai>0){
        $sql.=" AND id_loai ='".$idloai."'";
    }
    $sql.=" ORDER BY id DESC";
    $listdichvu = pdo_query($sql);
    return  $listdichvu;
}
function loadall_dv_loai($id){
    $sql = "SELECT * FROM dichvu WHERE id_loai = '$id'";
    $dichvu_result = pdo_query($sql);
    return $dichvu_result;
}
function delete_dichvu($id){
    $sql = "DELETE FROM dichvu WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_dichvu($id){
    $sql = "SELECT * FROM dichvu WHERE id=".$id;
    $dv = pdo_query_one($sql);
    return $dv;
}
function update_dichvu($id, $idloai, $tendv, $giadv, $mota, $anh){
    if($anh!="") 
    $sql = "UPDATE dichvu SET id_loai='$idloai', name='$tendv', gia='$giadv', mota='$mota', anh='$anh' WHERE id=".$id;
    else
    $sql = "UPDATE dichvu SET id_loai='$idloai', name='$tendv', gia='$giadv', mota='$mota' WHERE id=".$id;
    pdo_execute($sql);
}
?>