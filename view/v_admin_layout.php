<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tịm bán son</title>
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 collapse collapse-horizontal show" style="background-color: #BEADFA;"
                data-bs-theme="dark" id="openmenu">
                <a href="#" class="text-center d-block p-3"><img src="image/logo.png" alt="" width="30px"></a>
                <div class="list-group m-3" style="min-height: 100vh">
                    <a href="?mod=admin&act=dashboard" class="list-group-item list-group-item-action <?= (strpos($view_name,'dashboard'))? ' active"':''?> "
                    >
                        Tổng quan
                    </a>
                    <a href="?mod=admin&act=user" class="list-group-item list-group-item-action <?= (strpos($view_name,'user'))? ' active"':''?> ">Tài khoản</a>
                    <a href="?mod=admin&act=category" class="list-group-item list-group-item-action <?= (strpos($view_name,'category'))? ' active':''?>">Thương hiệu</a>
                    <a href="?mod=admin&act=son" class="list-group-item list-group-item-action <?= (strpos($view_name,'son'))? ' active ':''?>">Loại son</a>
                    <a href="?mod=admin&act=history" class="list-group-item list-group-item-action <?= (strpos($view_name,'history'))? 'active ':''?>">Thanh toán</a>
                    <a href="?mod=admin&act=cmt" class="list-group-item list-group-item-action <?= (strpos($view_name,'cmt'))? 'active ':''?>">Bình luận</a>
                    <a href="?mod=admin&act=thongke" class="list-group-item list-group-item-action <?= (strpos($view_name,'thongke'))? 'active ':''?>">Thống kê</a>
                </div>
            </div>

            <div class="col-md p-0">
                <nav class="navbar navbar-expand-lg " style="background-color: #BEADFA;">
                    <div class="container-fluid">
                        <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#openmenu" aria-expanded="false" aria-controls="openmenu">
                            =
                        </button>
                        <a class="navbar-brand" href="#">Tịm bán son</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Xin chào, <?=$_SESSION['user']['ho_ten']?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href=" ?mod=page&act=home">Xem trang chủ</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="?mod=user&act=logout">Đăng xuất</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container">
                    <?php include_once 'view/v_'.$view_name.'.php';?>
                </div>

                

                

            </div>
        </div>

    </div>

    <script src="template/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>