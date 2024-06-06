<?php
//dieu huong
include_once 'config.php';
include_once 'model/m_son.php';
$dsBanChay = son_getModeViewed(10);
include_once 'model/m_category.php';
$dsLoaiHang = category_getAll();

if (isset($_GET['mod'])){

    switch ($_GET['mod']) {
        case 'page':
          
            $ctrl_name = 'page';
            break;

        case 'user':
           
            $ctrl_name = 'user';
            break;
        case 'son':
           
            $ctrl_name = 'son';
            break;
        case 'category':
          
            $ctrl_name = 'category';
            break;    
        case 'admin':
            
            $ctrl_name = 'admin';
            break; 

        default:
            
    }
    include_once 'controller/c_'.$ctrl_name.'.php';

}
else{
    //chuyen ve trang chu
    header('location: ?mod=page&act=home');

}


?>