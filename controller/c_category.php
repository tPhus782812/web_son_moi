<?php
//gữi nhận dử liệu thông qua model 
//hiển thị dử liệu thông qua view
if( isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'detail':
            //lấy dử liệu
            include_once 'model/m_category.php';
            $ctLoaiHang = category_getById($_GET['id']);
            include_once 'model/m_son.php';
            $dsSon = son_getByCategory($_GET['id']);
           
            //hiển thị dử liệu
            $view_name = 'category_detail';
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