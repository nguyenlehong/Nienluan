<!-- giao dien from dang ky-->
<div class="formdangky">
<div class="dangky">
  <h2>ĐĂNG KÝ</h2>
  <?php
                      if(isset($thongbao)&&($thongbao!=""))
                      echo'<button type="button" class="btn btn-info position-relative" style="margin-left: 670px; width: 200px">
                      '.$thongbao.'
                      <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </button>
                      ';
                      ?>
  <p> Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</p>
  <form action="index.php?act=dangky" method="post">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Tên tài khoản</label>
    <input type="text" name="tentk" class="form-control" id="formGroupExampleInput" placeholder="VD: nguyen">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Mật khẩu</label>
    <input type="password"name="matkhau" class="form-control" id="formGroupExampleInput2" placeholder="VD: @123">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nhập lại mật khẩu</label>
    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Số điện thoại</label>
    <input type="text" name="sdt" class="form-control" id="formGroupExampleInput" placeholder="VD: 0987 6543 21">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Địa chỉ</label>
    <input type="text" name="diachi" class="form-control" id="formGroupExampleInput" placeholder="Cần Thơ">
  </div>
  <button type="submit" class="btn btn-primary" value="luu" name="luu">Đăng ký</button>
  </form>
</div>
<div class="dangnhap">
  <h2>ĐĂNG NHẬP</h2>
  <?php
                      if(isset($thongbaodn)&&($thongbaodn!=""))
                      echo'<button type="button" class="btn btn-info position-relative" style="margin-left: 350px; width: 200px">
                      '.$thongbaodn.'
                      <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </button>
                      ';
                      ?>
  <P>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</P>
  <form action="index.php?act=dangnhap" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên tài khoản</label>
      <input type="text" class="form-control" name="tentk" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
      <input type="password" class="form-control" name="matkhau" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" value="dangnhap" name="dangnhap">Đăng nhập</button>
  </form>

</div>
</div>
<!-- giao dien from dang ky-->