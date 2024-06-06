<?php
//gữi nhận dử liệu thông qua model 
//hiển thị dử liệu thông qua view
if( isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'dashboard':
            //lấy dử liệu
            
            //hiển thị dử liệu
            $view_name = 'admin_dashboard';
            break;
        case 'user':
            //lấy dử liệu
            include_once 'model/m_user.php';
            $dsTK = user_getAll();
            
            //hiển thị dử liệu
            $view_name = 'admin_user';
            break;

        case 'add_user':
            //lấy dử liệu
            include_once 'model/m_user.php';
            if(isset($_POST['submit'])){
                $SoDienThoai = $_POST['SoDienThoai'];
                $HoTen = $_POST['HoTen'];
                $Quyen = $_POST['Quyen'];
                $kq = user_checkPhone($SoDienThoai);
                if( $kq ){
                    //đúng, bị trùng , không cho 
                    $_SESSION['loi']='Số Diện Thoại đã được sử dụng';
                }
                else{
                    $MatKhau = 12345;
                    $HinhAnh = 'default.png';
                    //sai, không trùng, cho thêm tài khoản
                     user_add($SoDienThoai, $HoTen, $MatKhau, $Quyen, $HinhAnh);
                    $_SESSION['thongbao']='Đã tạo tài khoản với số điện thoại trên và mật khẩu mặc định sẽ là <strong>'.$MatKhau.'</strong>;';
                }
            }
            
            //hiển thị dử liệu
            $view_name = 'admin_user_add';
            break;
        
        case 'category':
            include_once 'model/m_user.php';
            //lấy dử liệu
            $dsSon=user_getCategory();
            //hiển thị dử liệu
            $view_name = 'admin_category';
            break;
        case 'son':
            //lấy dử liệu
            include_once 'model/m_user.php';
            $dsSon=user_getSon();
            //hiển thị dử liệu
            $view_name = 'admin_son';
            break;
        
        case 'history':
            //lấy dử liệu
            
            //hiển thị dử liệu
            $view_name = 'admin_history';
            break;
            case 'cmt':
                //lấy dử liệu
                include_once 'model/m_user.php';
                    $dsCmt=user_getCmt();
                
                //hiển thị dử liệu
                $view_name = 'admin_cmt';
                break;
            case 'thongke':
                //lấy dử liệu
                include_once 'model/m_user.php';
                  
                   $dsTK =user_getCategory();
                
                //hiển thị dử liệu
                $view_name = 'admin_thongke';
                break;
            
        
        
        default:
            # code...
            break;
    }
    include_once 'view/v_admin_layout.php';
    
}else{
    header('location: ?mod=page&act=home');

}
?>