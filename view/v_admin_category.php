<a href="?mod=admin&act=category" class="btn btn-info float-end">Thêm tài khoản</a>
<a href="" class="btn btn-info float-end">Thêm son mới</a>
                    <h2 class="my-3 ">Loại Son</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                           
                                <th class="text-start">loại son</th>
                               
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php $i=1;foreach($dsSon as $tk):?>
                                <tr>
                                <td><?=$i?></td>
                              
                                <td class="text-start"><?=$tk['ten_loai']?></td>
                             
                               
                                <td class="text-end">
                                    <a href="?mod=admin&act=user&act=edit&<?=$tk['ma_loai']?>"class="btn btn-warning" >Sửa</a>
                                    <a href="?mod=admin&act=user&act=delete&<?=$tk['ma_loai']?>"class="btn btn-danger"> Xóa</a>
                                </td>
                            </tr>
                             <?php $i++;endforeach; ?>   
              


                            <tr>
                                <td>1</td>
                                
                                
                                
                                
                                

                                <td class="text-end">
                                    <button class="btn btn-warning">Sửa</button>
                                    <button class="btn btn-danger"> Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>