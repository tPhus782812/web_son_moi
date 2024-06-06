<?php
    session_start();
    include "thuvien.php";
    if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
        //lấy thông tin kh từ form để tạo đơn hàng
        $name=$_POST['hoten'];
        $address=$_POST['diachi'];
        $tel=$_POST['dienthoai'];
        $email=$_POST['email'];
        $total=tongdonhang();
        $pttt=0;

        //insert đơn hàng - tạo đơn hàng mới
        $idbill=taodonhang($name,$address,$tel,$email,$total,$pttt);

        
        //lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo
        //insert vào bảng giỏ hàng

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            $tensp=$_SESSION['giohang'][$i][1];
            $hinhsp=$_SESSION['giohang'][$i][0];
            $dongia=$_SESSION['giohang'][$i][2];
            $soluong=$_SESSION['giohang'][$i][3];
            $thanhtien=$dongia*$soluong;
            taogiohang($tensp,$hinhsp,$dongia,$soluong,$thanhtien,$idbill);
        }

        //show confirm đơn hàng

        $ttkh='Bạn đã đặt hàng thành công<br><h1>Mã đơn hàng: '.$idbill.'</h1>
                <h2>THÔNG TIN NHẬN HÀNG</h2>
                <table class="thongtinnhanhang">
                
                <tr>
                    <td width="20%">Họ tên</td>
                    <td>'.$name.'</td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>'.$address.'</td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td>'.$tel.'</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>'.$email.'</td>
                </tr>
            </table>';
            $ttgh=showgiohang();


        //unset giỏ hàng session

        unset($_SESSION['giohang']);

       // echo "Bạn đã đặt hàng thành công. Đơn hàng của bạn là!";
    }
    
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tịm bán son</title>
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #BEADFA; color: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="?mod=page&act=home"><img src="template/image/logo3.jpg" width="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?mod=page&act=home">Trang Chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="?mod=category&act=detail&id=<?=$loaison['ma_loai']?>" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Loại Son
                        </a>
                        <ul class="dropdown-menu">

                        <?php foreach($dsLoaiHang as $loaison): ?>
                            <li><a class="dropdown-item" href="?mod=category&act=detail&id=<?=$loaison['ma_loai']?>"><?=$loaison['ten_loai']?></a></li>
                        <?php endforeach;?>
                        </ul>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>

                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?mod=page&act=cart">Giỏ Hàng</a>
                    </li>
                    <?php if( !isset($_SESSION['user']) ): ?>
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?mod=user&act=login">Đăng Nhập</a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Xin chào,  <?=$_SESSION['user']['ho_ten']?>
                        </a>
                        <ul class="dropdown-menu end-0" style="left:auto">
                            <li><a class="dropdown-item" href="#"> Thông tin tài khoảng</a></li>
                            <li><a class="dropdown-item" href="#">Lịch sử mua hàng</a></li>

                            <?php if($_SESSION['user']['kich_hoat']>=1):?>
                                <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-warning" href="?mod=admin&act=dashboard">Trang quản lý</a></li>
                            <?php endif; ?>
                            

                            
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?mod=user&act=logout">Đăng xuất</a></li>
                        </ul>
                    </li>
                    <?php endif;?>    
                    

                    

                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
        <div class="col-md-3">
                <form action="?mod=son&act=search&id" method="POST" class="mb-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="Nhập tên sản phẩm"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="search"
                            style="background-color: #BEADFA;">Tìm kiếm</button>
                    </div>
                </form>
                <div class="list-group mb-3">
                <!-- <ul class="list-group mb-3">
                    <li class="list-group-item active" aria-current="true" style="background-color: #BEADFA; color: #fff;">Sách đọc nhiều</li> -->
    </div>
                            </div>
    

    <div class="col-md-9 ">
            <div class="boxtrai mr" id="bill">
                <div class="row" >
                    
                   <?php echo $ttkh;?> 
                </div>
                <div class="row mb">
                    
                </div>
                
            </div>
  
    </div>

</body>

</html>