
                <h2>Đăng nhập</h2>
                <?php if( isset($_SESSION['loi'])): ?>
                    <div class="alert alert-danger" role="alert">
                    <?=$_SESSION['loi']?>
                    </div>      
                <?php endif; unset($_SESSION['loi'])?>
                <form method="post" action="">
                    <div class="mb-3">
                      <label for="phone" class="form-label">Số điện thoại</label>
                      <input type="text" class="form-control" name="SoDienThoai" id="phone" >
                     
                    </div>
                    <div class="mb-3">
                      <label for="pass" class="form-label">Mật khẩu</label>
                      <input type="password" class="form-control" name="MatKhau" id="pass">
                    </div>
                    <button type="submit" class="btn " data-bs-theme="dark" style="background-color: #BEADFA;">Đăng nhập</button>
                  </form>

            </div>