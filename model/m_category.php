<?php
    // thao tác dử liệu
    include_once 'm_pdo.php';

    function category_getAll(){
        return pdo_query("SELECT * FROM loaihang ");
    }   

    function category_getById($id){
        return pdo_query_one("SELECT * FROM loaihang WHERE ma_loai = ?", $id);
    }

?>