
<a href="?mod=admin&act=add_user" class="btn btn-info float-end">Thêm tài khoản</a>
                    <h2 class="my-3 ">Tài khoản</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th class="text-start">Họ tên</th>
                                <th>SDT</th>
                                <th>Quyền</th>
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;foreach($dsTK as $tk):?>
                                <tr>
                                <td><?=$i?></td>
                                <td><img src="upload/avatar/<?=$tk['hinh']?>" class="rounded-3" alt="" style="width:50px  ;" ></td>
                                <td class="text-start"><?=$tk['ho_ten']?></td>
                                <td><?=$tk['so_dien_thoai']?></td>
                                <td>
                                    <?php
                                    switch($tk['kich_hoat']){
                                        case '2':
                                            echo'  <span class="badge text-bg-danger">Quản lý cấp cao </span>';
                                            break;
                                         case '1':
                                            echo'   <span class="badge text-bg-success">Quản lý </span>';
                                            break;
                                        default:
                                           echo' <span class="badge text-bg-primary">Khách hàng</span>';
                                            break;


                                    }
                                    ?>
                                </td>
                                <td class="text-end">
                                    <a href="?mod=admin&act=user&act=edit&<?=$tk['ma_kh']?>"class="btn btn-warning" >Sửa</a>
                                    <a href="?mod=admin&act=user&act=delete&<?=$tk['ma_kh']?>"class="btn btn-danger"> Xóa</a>
                                </td>
                            </tr>
                             <?php $i++;endforeach; ?>   
              

                        </tbody>
                    </table>