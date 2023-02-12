
<?php
if(is_array($cndh)){
    extract($cndh);
    $spformat_tongdonhang =number_format($tongdonhang,0, '.', '.');
}
?>

<div class="themdm">
<table class="table">
<thead>
    <tr>
      <th scope="col">Thông tin đơn hàng:</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">     <?php
                      if(isset($thongbao)&&($thongbao!=""))
                      echo'<button type="button" class="btn btn-primary position-relative">
                      '.$thongbao.'
                      <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </button>
                      ';
                      ?></th>

    </tr>
  </thead>
  <tr>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Khách hàng</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Tổng Tiền</th>
      <th scope="col">Trình trạng</th>
      <th scope="col"style="padding-left:80px;">Thao thác</th>
    </tr>
<form action="index.php?act=capnhattrangthaidh" method="POST"> 
    <input type="hidden" name="id" value="<?=$id?>">
      <td scope="col"><?=$id?></td>
      <td scope="col"><?=$tentk?><br><?=$diachi?><br><?=$sdt?></td>
      <td scope="col"><?=$ngaydathang?></td>
      <td scope="col"><?= $spformat_tongdonhang?>đ</td>
      <td scope="col" style="width:180px;"><select class="form-select" aria-label="Default select example" name="trangthai">
                            <option value="<?=$trangthai?>"><?=$trangthai?></option>                           
                            <option value="Đang xử lý">Đang xử lý</option>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option value="Đã giao hàng">Đã giao hàng</option>
                            <option value="Hoàn thành">Hoàn thành</option>

                            </select></td>
      <td scope="col" style="padding-left:50px;"><button type="width submit" name="luu" class="btn btn-success" value="luu">Lưu</button></form>
      <a href="index.php?act=thongtindh&id=<?=$id?>"> <button type="width button" class="btn btn-secondary">chi tiet</button></a>
    </td>
    </tr>
    
<!-- thong tin chi tiet don hang -->
</table>
</div>

</div>
<br>

</div>
