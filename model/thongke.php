<?php
function loadall_thongke(){
    $sql="SELECT loaidv.id AS maloai, loaidv.name AS tenloai, COUNT(dichvu.id) AS countdv, MIN(dichvu.gia) AS minprice, MAX(dichvu.gia) AS maxprice, AVG(dichvu.gia) AS avgprice";
    $sql.=" FROM dichvu LEFT JOIN loaidv ON loaidv.id=dichvu.id_loai";
    $sql.=" GROUP BY loaidv.id ORDER BY loaidv.id DESC";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>