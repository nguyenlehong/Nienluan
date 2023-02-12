<div class="card title">
    <div class="card-header ">
        <h4>Thêm sản phẩm</h4>
    </div>
</div>
<div class="themdm">
    <?php
                      if(isset($thongbao)&&($thongbao!=""))
                      echo'<button type="button" class="btn btn-primary position-relative">
                      '.$thongbao.'
                      <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </button>
                      ';
                      ?>

    <div class="mb-3">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">

            <label for="exampleInputEmail1" class="form-label">Chọn danh mục </label>
            <select name="iddm" class="form-select" aria-label="Default select example">
                <?php
						foreach ($listdanhmuc as $danhmuc) {
							extract($danhmuc);
							echo '<option value="'.$id.'">'.$name.' </option>';
						}
						?>
            </select>
            <!-- <label for="exampleInputEmail1" class="form-label">Mã loại sản phẩm </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  disabled>
                      <div id="emailHelp" class="form-text">Mã loại được tự động cập nhật.</div>                     -->
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
        <input type="text" name="tensp" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Giá</label>
        <input type="text" name="giasp" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hình</label>
        <input type="file" name="hinh" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mô tả</label>
        <textarea name="mota" class="form-control" placeholder="commnet" id="floatingTextarea"></textarea> <br>

    </div>

    <button type="submit" class="width btn btn-success" value="luu" name="luu">Lưu</button>
    <button type="reset" class="width btn btn-danger">Nhập lại</button>
    </form>
    <a href="index.php?act=listsp"> <button type="width button" class="btn btn-secondary">Danh sách</button></a>

</div>
</div>