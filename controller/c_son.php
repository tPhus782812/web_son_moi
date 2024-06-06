<?php
//gữi nhận dử liệu thông qua model 
//hiển thị dử liệu thông qua view
if( isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'detail':
            //lấy dử liệu
            include_once 'model/m_son.php';
            $ctSon = son_getById($_GET['id']);
            $dsNgauNhieuCungLoaiHang = son_getRandomByCategory($ctSon['ma_loai']);
            //hiển thị dử liệu
            $view_name = 'son_detail';
            break;
        case 'search':
            // if(isset($_POST['keyword'])){
            //     header("Location: ?mod=son&act=search&id=".$_POST['keyword']);
            // }
             //lấy dử liệu
            include_once 'model/m_son.php';
            
            $page = 1;
            if( isset($_GET['page'])){
                $page = $_GET['page'];
            }
            $ketqua = son_search($_POST['keyword'], $page);
             //hiển thị dử liệu
            $view_name = 'son_search';
            

            break;
            case 'addToCart';
            $ma_hh = $_GET['id'] ; 
            $ma_kh = $_SESSION['user']['ma_kh'];
            // kiểm tra có giỏ hàng hay chưa
            include_once 'model/m_history.php';
            $kq=history_hasCart($ma_kh);
            if( $kq ){
                // đúng, đã có giỏ hàng thêm son vào
                history_addTocart($kq['ma_hd'],$ma_hh);

            }else{
                //sai, chưa có giỏ hàng thì thêm giỏ hàng
                history_add($ma_kh);
                $kq=history_hasCart($ma_kh);
                history_addTocart($kq['ma_hd'],$ma_hh);

            }
            $_SESSION['thongbao'] = 'Đã thêm son vào giỏ';
            header('Location:?mod=son&act=detail&id='.$ma_hh);
            break;
        
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
    
}else{
    header('location: ?mod=page&act=home');

}
?>