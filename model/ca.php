<?php
function loadall_ca(){
        $sql = "SELECT * FROM ca ORDER BY id";
        $listca = pdo_query($sql);
        return $listca;
}
?>