<!-- them danh muc -->
<div class="card title">
  <div class="card-header ">
      <h4>Thêm danh mục</h4>
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


                <form action="index.php?act=adddm" method="post">
                      <!-- <label for="exampleInputEmail1" class="form-label">Mã loại danh mục </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="maloai" disabled>
                      <div id="emailHelp" class="form-text">Mã loại được tự động cập nhật</div> -->
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Tên danh mục</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="tenloai"> <br>
                     
                    </div>
                    
                    <button type="submit" class="width btn btn-success" name="luu" value="luu"> Lưu</button>
                    <button type="reset" class="width btn btn-danger">Nhập lại</button>  
                    </form>
                  <a href="index.php?act=listdm"> <button type="width button" class="btn btn-secondary">Danh sách</button></a> 
   </div>

 
