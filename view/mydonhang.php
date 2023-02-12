
<div class="themdm">
<table class="table">
<thead>
    <tr>
      <th scope="col">Đơn hàng của bạn:</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tr>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Tổng Tiền</th>
      <th scope="col">Trình trạng</th>
      <th scope="col">Thao thác</th>
    </tr>
<?php
if(is_array($mydh)){
    foreach ($mydh as $dh) {
        extract($dh);
    $chitiet="index.php?act=chitietgiohang&iddh=".$id;
  $spformat_tongdonhang =number_format($dh['tongdonhang'],0, '.', '.');


        echo '
        <tr>
            <td scope="col">'.$dh['id'].'</td>
            <td scope="col">'.$dh['ngaydathang'].'</td>
            <td scope="col">'.$spformat_tongdonhang.'đ</td>
            <td scope="col">'.$dh['trangthai'].'</td>
            <td scope="col"><a href="'.$chitiet.'"><button type="button" class="btn btn-info">Chi tiết</button><td></a>
          </tr>      
        ';  
    }
}
?>

</table>
</div>
</div>