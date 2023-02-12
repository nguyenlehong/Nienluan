<?php
include "mydonhang.php";
?>
</div>
<br>
<div class="themdm">
<table class="table">


  <thead>
    <tr>
      <th scope="col">Danh sách sản phẩm: </th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <tr>
    <th scope="col">Mã đơn hàng </th>
      <th scope="col">tên sp </th>
      <th scope="col">Giá</th>
      <th scope="col">số lượng</th>
      <th scope="col">Thành tiền</th>
    </tr>
  </thead>
  <?php
//   if(is_array($dssp)){
foreach ($dssp as $cart) {
    extract($cart);
    $spformat_gia =number_format($cart['gia'],0, '.', '.');
    $spformat_thanhtien =number_format($cart['thanhtien'],0, '.', '.');

    echo '
    <tr>
    <td scope="col">'.$cart['iddh'].'</td>
    <td scope="col">'.$cart['tensp'].'</td>
    <td scope="col">'.$spformat_gia.'đ</td>
    <td scope="col">'.$cart['soluong'].'</td>
    <td scope="col">'.$spformat_thanhtien.'đ</td>
    
  </tr>
    ';
}
//   }

?>

</table>
</div>