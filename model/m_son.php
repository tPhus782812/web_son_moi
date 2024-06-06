<?php
//thao tác dử liệu trong csdl
    include_once 'm_pdo.php';

    function son_getNew($limit){
        return pdo_query("SELECT * FROM hanghoa ORDER BY ma_hh DESC LIMIT $limit");
    }
    function son_getDb($limit){
        return pdo_query("SELECT * FROM hanghoa where dac_biet = 1 LIMIT $limit");
    }

    function son_getModeViewed($limit){
        return pdo_query("SELECT * FROM hanghoa ORDER BY so_luot_xem DESC LIMIT $limit");
    }

    function son_getById($id){
        return pdo_query_one("SELECT * FROM hanghoa s 
        INNER JOIN loaihang lh ON s.ma_loai = lh.ma_loai 
        WHERE s.ma_hh = ?",$id);

    }

    function son_getRandomByCategory($id){
        return pdo_query("SELECT * FROM hanghoa WHERE ma_loai = $id ORDER BY rand() LIMIT 4");
    }

    function son_getByCategory($id){
        return pdo_query("SELECT * FROM hanghoa WHERE ma_loai = $id");
    }

    function son_search($keyword, $page=1){
        $batdau= ($page - 1)*8;
        // 1 trang có 8 sản phẩm
        // Trang 1 bắt đầu từ 0
        // Trang 2 bắt đầu từ 8
        // Trang 3 bắt đầu từ 16
        // Trang n bắt đầu từ (n-1)*8

        return pdo_query("SELECT * FROM hanghoa WHERE ten_hh LIKE '%$keyword%' LIMIT $batdau,8");
    }

?>