<?php
/// thao tác dử liệu trong csdl
include_once 'm_pdo.php';

function history_hasCart($ma_kh){
    return pdo_query_one("SELECT * FROM hoa_don WHERE ma_kh=? AND TrangThai=?",$ma_kh,'gio-son');
}

function history_add($ma_kh){
    pdo_execute("INSERT INTO hoa_don(`ma_kh`,`ngay_lap`) VALUES(?,?)",$ma_kh, date('Y-m-d H:i:s')); 
}

function history_addTocart($ma_hd,$ma_hh){
    pdo_execute("INSERT INTO chi_tiet_hd(`ma_hd`,`ma_kh`) VALUES(?,?)", $ma_hd, $ma_hh);

}

?>