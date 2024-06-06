<h2><?= $ctLoaiHang['ten_loai']?></h2>
<div class="row">
 <?php foreach($dsSon as $son): ?>
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