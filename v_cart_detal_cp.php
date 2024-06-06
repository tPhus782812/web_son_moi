<?php
    
    session_start();

    include "thuvien.php";

    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }

    
    


?>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
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
                <form action="bill.php" method="post">
                <div class="col mb-2 " >
                    <h2 class="list-group-item  "  >
                THÔNG TIN NHẬN HÀNG</h2>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten" required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" required></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php echo showgiohang(); ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <div class="col mb-2">
                    <input aria-current="true" style="background-color: #BEADFA; color: #fff;" type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="cart.php?delcart=1"><input type="button"  value="XÓA GIỎ HÀNG"></a>
                    <a href="index.php"><input type="button"  value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
                </form>
            </div>
    </div>
           



</body>

</html>