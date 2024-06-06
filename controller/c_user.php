<?php
//gữi nhận dử liệu thông qua model 
//hiển thị dử liệu thông qua view
if( isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'login':
            //lấy dử liệu
            include_once 'model/m_user.php';
            if(isset($_POST['SoDienThoai']) && isset($_POST['MatKhau'])){
            $kq = user_login($_POST['SoDienThoai'],$_POST['MatKhau']);   
            if($kq){
                // đúng thì đăng nhập thành công
                $_SESSION['user'] = $kq;
                header('Location:?mod=page&act=home');
            }
            else{
                 $_SESSION['loi'] = 'Tài khoản của bạn hoặc mật khẩu không chính xác!';
            }
            }
            
            //hiển thị dử liệu
            $view_name = 'user_login';
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('Location:?mod=page&act=home');
            

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