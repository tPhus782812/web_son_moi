<div class="row">
                    <div class="col-md-6">
                        <img src="upload/product/<?=$ctSon['hinh']?>" class="w-100">
                    </div>

                    <div class="col-md-6">
                        <h2><?=$ctSon['ten_hh']?></h2>
                        <div class="row">
                            <div class="col-md-6">
                                Thương hiệu: <strong><?=$ctSon['ten_loai']?></strong>
                            </div>
                            <div class="col-md-6">
                                <strong><?=$ctSon['so_luot_xem']?></strong> đã xem

                            </div>
                        </div>
                        <div class="text-danger fs-3"> <strong><?=$ctSon['don_gia']?></strong></div>
                        <small>Chỉ còn <strong><?=$ctSon['so_luong']?></strong> sản phẩm tại cửa hàng</small> <br>
                       
                        </a>
                        <form action="v_cart_detal_cp.php" method="post"  class="btn "  style="background-color: #BEADFA;">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Son môi">
                            <input type="hidden" name="gia" value="10">
                            <input type="hidden" name="hinh" value="son1.jpg">
                        </form>

                        <?php if( isset($_SESSION['thongbao'])): ?>
                        <div class="alert alert-success" role="alert">
                        <?=$_SESSION['thongbao']?>
                        </div>      
                    <?php endif; unset($_SESSION['thongbao'])?>

                        <hr>
                        <p class="my-3">
                        <?=$ctSon['mo_ta']?>
                        </p>
                    </div>
                    


                </div>

                <h2>Sản phẩm liên quan</h2>
                <div class="row">
                    <?php foreach($dsNgauNhieuCungLoaiHang as $son):?>
                    <div class="col-md-3  ">
                        <div class="card mb-3">
                            <img src="upload/product/<?=$son['hinh']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=$son['ten_hh']?></h5>
                                <p class="card-text"><?=$son['don_gia']?></p>
                                <a href="?mod=son&act=detail&id=<?=$son['ma_hh']?>" class="btn" data-bs-theme="dark" style="background-color: #BEADFA;">MUA
                                    NGAY</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <h2>Đánh giá của khách hàng</h2>
                <div class="row my-3 border rounded-3">
                    <div class="col-sm-3">
                        <strong>Thanh Phú</strong> <br>
                        11:37 4/10/2023 <br>
                        <i>Đã mua 1 lần</i>
                    </div>
                    <div class="col-sm-9">
                        Chất lượng: Son Merzy có chất son nhẹ nhàng, không gây khô môi và lên màu rất chuẩn. Màu sắc của
                        son đẹp và đa dạng, từ các tone nâu gỗ trầm lạnh nhẹ nhàng cho đến các tone đỏ rượu vang ánh tím
                        nổi bật. Đặc biệt, son Merzy còn có khả năng bám màu lâu và không lem, giúp giữ màu son và đôi
                        môi luôn tươi tắn suốt cả ngày dài.
                    </div>
                </div>

                <div class="row my-3 border rounded-3">
                    <div class="col-sm-3">
                        <strong>Thanh Phú</strong> <br>
                        11:37 4/10/2023 <br>
                        <i>Đã mua 1 lần</i>
                    </div>
                    <div class="col-sm-9">
                        Chất lượng: Son Merzy có chất son nhẹ nhàng, không gây khô môi và lên màu rất chuẩn. Màu sắc của
                        son đẹp và đa dạng, từ các tone nâu gỗ trầm lạnh nhẹ nhàng cho đến các tone đỏ rượu vang ánh tím
                        nổi bật. Đặc biệt, son Merzy còn có khả năng bám màu lâu và không lem, giúp giữ màu son và đôi
                        môi luôn tươi tắn suốt cả ngày dài.
                    </div>
                </div>

                <div class="row my-3 border rounded-3">
                    <div class="col-sm-3">
                        <strong>Thanh Phú</strong> <br>
                        11:37 4/10/2023 <br>
                        <i>Đã mua 1 lần</i>
                        
                    </div>
                    <div class="col-sm-9">
                        Chất lượng: Son Merzy có chất son nhẹ nhàng, không gây khô môi và lên màu rất chuẩn. Màu sắc của
                        son đẹp và đa dạng, từ các tone nâu gỗ trầm lạnh nhẹ nhàng cho đến các tone đỏ rượu vang ánh tím
                        nổi bật. Đặc biệt, son Merzy còn có khả năng bám màu lâu và không lem, giúp giữ màu son và đôi
                        môi luôn tươi tắn suốt cả ngày dài.
                    </div>
                </div>