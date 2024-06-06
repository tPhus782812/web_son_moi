<h2 class="my-3 ">Thêm tài khoản</h2>
<form action="" method="POST">
      <div class="mb-3">
        <label for="SoDienThoai" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control text-bg-secondary" id="SoDienThoai" 
        name="SoDienThoai">
      </div>  
      <div class="mb-3">
          <label for="HoTen" class="form-label">Họ và tên</label>
          <input type="text" class="form-control text-bg-secondary" id="HoTen" name="HoTen" >
        </div>  
        <div class="mb-3">
          <label for="ViTien" class="form-label" name="ViTien">Banking</label>
          <input type="number" class="form-control text-bg-secondary" id="Vitien" >
        </div>  
        <div class="mb-3">
          <label for="Quyen" class="form-label">Quyền truy cập</label>
          <select class="form-select text-bg-secondary" id="Quyen" name="Quyen">
              <option value="0" selected>Khách hàng</option>
              <option value="1">Quản Lý</option>
              <option value="2">Quản lý cấp cao</option>
            </select>
        </div>  
      <button type="submit" name="submit" value="submit" class="btn btn-primary" style="background-color: #BEADFA;">Duyệt</button>
    </form>