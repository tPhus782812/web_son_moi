<?php
//thao tác dử liệu trong csdl
    include_once 'm_pdo.php';

    function user_login($phone, $pass){
        return pdo_query_one("SELECT * FROM Khach_hang Where so_dien_thoai=? AND mat_khau=?", $phone, $pass);
    }

    function user_getAll(){
        return pdo_query("SELECT * FROM khach_hang");
    }

    function user_checkPhone($SoDienTHoai){
        return pdo_query_one("SELECT * FROM khach_hang WHERE so_dien_thoai=?,$SoDienThoai");
    }

    function user_add($SoDienThoai, $HoTen, $MatKhau, $Quyen, $HinhAnh){
        pdo_excute("INSERT INTO khach_hang(`so_dien_thoai`,`ho_ten`,`mat_khau`,`kich_hoat`,`hinh`) VALUE(?,?,?,?,?)", $SoDienTHoai, $HoTen, $MatKhau, $Quyen, $HinhAnh);
    }
    function user_getSon(){
        return pdo_query("SELECT * FROM hanghoa");
    }
    function user_getCategory(){
        return pdo_query("SELECT * FROM loaihang");
    }
    function user_getCmt(){
        return pdo_query("SELECT * FROM binh_luan");
    }
?>