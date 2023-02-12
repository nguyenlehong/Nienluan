
<div class="themdm">
<table class="table">
<thead>

  </thead>
  <tr>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Khách hàng</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Tổng Tiền</th>
      <th scope="col">Trình trạng</th>
      <th scope="col">Thao thác</th>
    </tr>
<?php
foreach ( $dsdonhang as $dh) {
  extract($dh);
  $suadh="index.php?act=capnhatdh&id=".$id;
  $xoadh="index.php?act=xoadh&id=".$id;
  $spformat_tongdonhang =number_format($dh['tongdonhang'],0, '.', '.');

  echo '
  <td scope="col">'.$dh['id'].'</td>
  <td scope="col">'.$dh['tentk'].'<br> '.$dh['diachi'].' <br> '.$dh['sdt'].'</td>
      <td scope="col">'.$dh['ngaydathang'].'</td>
      <td scope="col">'.$spformat_tongdonhang.'đ</td>
      <td scope="col">'.$dh['trangthai'].'</td>
      <td scope="col"><a href="'.$suadh.'"><button type="width button" class="btn btn-info"><ion-icon name="list-outline"></ion-icon></button></a> 
      <a href="'.$xoadh.'"><button type="width button" class="btn btn-danger"><ion-icon name="close-outline"></ion-icon></button></a></td>
    </tr>
  
  
  ';

  # code...
}


?>

</table>
</div>
</div>
