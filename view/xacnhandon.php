<div class="themdm2"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Thông tin đơn hàng: </th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><?php
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
  <?php
  if(isset($dh) && is_array($dh)){
      extract($dh);
  }
  ?>
  <tbody>
  <tr>
      <td>Mã đơn hàng <?=$dh['id']?></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td><?=$dh['tentk']?></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
     <td><?=$dh['sdt']?></td>
     <td></td>
     <td></td>
   </tr>
    <tr>
      <td><?=$dh['diachi']?></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
<br>

<div class="themdm2">
<table class="table" style="width:auto;">
<thead>
    <tr>
      <th scope="col">sản phẩm đã đặt:</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tr>
  <th scope="col">Hình</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">giá</th>
    </tr>
<?php 
 giohangchitiet($gh);
?>
</table>

</div>

</div>