<a href="?mod=admin&act=son" class="btn btn-info float-end">Thêm tài khoản</a>
<a href="" class="btn btn-info float-end">Thêm son mới</a>
                    <h2 class="my-3 ">Son</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th class="text-start">Tên sản phẩm</th>
                                <th class="text-end">Giá</th>
                                <th>Giảm giá</th>
                                <th>Ngày nhâp </th>
                                <th>Số lượt xem</th>

                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php $i=1;foreach($dsSon as $tk):?>
                                <tr>
                                <td><?=$i?></td>
                                <td><img src="upload/avatar/<?=$tk['hinh']?>" class="rounded-3" alt="" style="width:50px  ;" ></td>
                                <td class="text-start"><?=$tk['ten_hh']?></td>
                                <td class="text-end"><?=$tk['don_gia']?></td>
                                <td><?=$tk['giam_gia']?></td>
                                <td><?=$tk['ngay_nhap']?></td>
                                <td><?=$tk['so_luot_xem']?></td>
                                <td class="text-end">
                                    <a href="?mod=admin&act=user&act=edit&<?=$tk['ma_hh']?>"class="btn btn-warning" >Sửa</a>
                                    <a href="?mod=admin&act=user&act=delete&<?=$tk['ma_hh']?>"class="btn btn-danger"> Xóa</a>
                                </td>
                            </tr>
                             <?php $i++;endforeach; ?>   
              


                           
                        </tbody>
                    </table>