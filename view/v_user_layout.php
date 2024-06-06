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
        <div id="carouselExample" class="carousel slide mt-3 mb-3">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="template/image/banner3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="template/image/banner6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

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

                    
                    
                   
                    <button type="button" class="list-group-item  " aria-current="true"
                        style="background-color: #BEADFA; color: #fff;">
                        Sản phẩm bán chạy nhất
                    </button>

                    
                    <?php foreach($dsBanChay as $son): ?>
                        <li class="list-group-item"><?=$son['ten_hh']?></li>
                       

                        <?php endforeach; ?>
                </ul>
                </div>
            </div>

            <div class="col-md-9">
                <!-- các sản phẩm chính -->
                <?php
                    include_once 'view/v_'.$view_name.'.php'
                ?>
                


            </div>
        </div>



        <footer class="text-center text-bg-dark p-3 rounded-3 ">
            Bản quyền & coppy 2023, thegioiskinfood 2013
        </footer>
    </div>
    <script src="template/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>