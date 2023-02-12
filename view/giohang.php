
<div class="card title">
    <div class="card-header ">
        <h4>Giỏ hàng </h4>
     </div>
</div>
<div class="themdm">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Hình</th>
      <th scope="col">Tên</th>
      <th scope="col">Giá </th>
      <th scope="col">Số lượng</th>
      <th scope="col"> Size </th>
      <th scope="col">Thành tiền</th>
      <th scope="col" class="mr" >Thao tác</th>
    </tr>
  </thead>
  
 <?php
$spformat_tong="";
$tong=0;
$i=0;
foreach ($_SESSION['giohang'] as $cart) {
  $spformat =number_format($cart[3],0, '.', '.');
    $hinh=$img_path.$cart[2];
    $ttien=$cart[3]*$cart[4];
    $tong+=$ttien;
    // $xoa='<a href="index.php?act=xoagh&idgio='.$i.'"><input type="button" value="xoa"></a>';
    $xoa='<a href="index.php?act=xoagh&idgio='.$i.'"><button type="button" class="width btn btn-danger" value="xoa">Xóa</button> </a>';
    $mua='<a href="index.php?act=donhang"> <button type="button" class="width btn btn-info" value="mua">Mua hàng</button> </a>';

    $spformat_thanhtien =number_format($ttien,0, '.', '.');
$spformat_tong =number_format($tong,0, '.', '.');


echo' 
<tr>
<td ><img src="'.$hinh.'" alt="" height="80px"</td>
<td >'.$cart[1].'</td>
<td >'.$spformat.'đ</td>
<td >'.$cart[4].'</td>
<td >'.$cart[6].'</td>
<td>'.$spformat_thanhtien.'đ</td>
<td class="mr" >'.$xoa.'</a></td>
</tr>' ;
$i=$i+1;  
}
?> 
    <tr>
      <td ></td>
      <td> </td>
      <td ></td>
      <td ></td>
      <td class="mr" ><?php echo ''.$spformat_tong.'đ'; ?> <a href="index.php?act=donhang"> <button type="button" class="width btn btn-info" value="mua">Mua hàng</button> </a></td>
    </tr>

</table>
</div>