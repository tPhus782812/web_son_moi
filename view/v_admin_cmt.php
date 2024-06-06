
                    <h2 class="my-3 ">Bình luận</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th class="text-start">Nội dung</th>
                           
                                <th class="text-start">Ngày bình luận</th>
                                <th class="text-start">Tên khách hàng</th>
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach($dsCmt as $cmt):?>
                                <tr>
                                
                              
                                <td class="text-start"><?=$cmt['noi_dung']?></td>
                                <td class="text-start"><?=$cmt['ngay_bl']?></td>
                                <td class="text-start"><?=$cmt['ten_kh']?></td>
                             
                               
                                <td class="text-end">
                                    <a href="?mod=admin&act=user&act=edit&<?=$cmt['ma_bl']?>"class="btn btn-warning" >Sửa</a>
                                    <a href="?mod=admin&act=user&act=delete&<?=$cmt['ma_bl']?>"class="btn btn-danger"> Xóa</a>
                                </td>
                            </tr>
                             <?php endforeach; ?>   
              


                        </tbody>
                    </table>