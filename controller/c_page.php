<?php
//gữi nhận dử liệu thông qua model 
//hiển thị dử liệu thông qua view
if( isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'home':
            //lấy dử liệu
            include_once 'model/m_son.php';
            $dsMoi = son_getNew(4);
            $dsNoiBac = son_getDb(4);
            //hiển thị dử liệu
            $view_name = 'page_home';
            
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