<h2>Sản phẩm nổi bật</h2>
<div class="row">
 <?php foreach($dsNoiBac as $son): ?>
    <div class="col-sm-3">
        <div class="card mb-3">
            <img src="upload/product/<?=$son['hinh']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$son['ten_hh']?></h5>
                <p class="card-text"><?=$son['don_gia']?>đ</p>
                <a href="?mod=son&act=detail&id=<?=$son['ma_hh']?>" class="btn" data-bs-theme="dark" style="background-color: #BEADFA;">MUA
                    NGAY</a>
                    <!-- <form action="v_cart_detal_cp.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Son môi">
                            <input type="hidden" name="gia" value="10">
                            <input type="hidden" name="hinh" value="son1.jpg">
                        </form> -->
            </div>
        </div>
    </div> 
    <?php endforeach; ?>

</div>
<h2>Sản phẩm mới</h2>
 <div class="row">
    <?php foreach($dsMoi as $son): ?>
    <div class="col-sm-3">
        <div class="card mb-3">
            <img src="upload/product/<?=$son['hinh']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$son['ten_hh']?></h5>
                <p class="card-text"><?=$son['don_gia']?>đ</p>
                <a href="?mod=son&act=detail&id=<?=$son['ma_hh']?>" class="btn" data-bs-theme="dark" style="background-color: #BEADFA;">MUA
                    NGAY</a>
                   
            </div>
        </div>
    </div> 
    <?php endforeach; ?>

</div>