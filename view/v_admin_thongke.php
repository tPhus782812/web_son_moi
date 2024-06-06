
<h2 class="my-3 ">Thống kê theo loại hàng</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th class="text-start">Loại hàng</th>
                                <th>Số lượng</th>
                                <th>Giá cao nhất</th>
                                <th>Giá thấp nhất</th>
                                <th class="text-end">Giá tb</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach($dsTK as $TK):?>
                                <tr>
                                <td class="text-start"><?=$TK['ten_loai']?></td>
                                <td ><?=$TK['so_luong']?></td>
                                <td ><?=$TK['gia_cao']?></td>
                                <td ><?=$TK['gia_thap']?></td>
                                <td class="text-end"><?=$TK['gia_tb']?></td>
                             
                               
                                <!-- <td class="text-end">
                                    <a href="?mod=admin&act=user&act=edit&<?=$TK['ma_loai']?>"class="btn btn-warning" >Sửa</a>
                                    <a href="?mod=admin&act=user&act=delete&<?=$TK['ma_loai']?>"class="btn btn-danger"> Xóa</a>
                                </td> -->
                            </tr>
                             <?php endforeach; ?>   
              


                        </tbody>
                    </table>