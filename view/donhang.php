<div class="formdangky">
    <div class="dangky2"> 

    <form action="index.php?act=xacnhandon" method="POST">
<?php
    if(isset($_SESSION['tentk'])){
    $tentk=$_SESSION['tentk']['tentk'];
    $diachi=$_SESSION['tentk']['diachi'];
    $sdt=$_SESSION['tentk']['sdt'];
}else{
  echo '<h3 style="color: red">Bạn chưa đăng nhập, vui lòng đăng nhập!</h3>';
    $tentk="";
    $diachi="";
    $sdt=""; 
}
?>  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Người nhận</label>
    <input type="text" name="tentk" class="form-control" id="exampleInputEmail1"<?php echo' value="'.$tentk.'"';?>  >
    <div id="textlHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
    <input type="text" name="diachi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" <?php echo' value="'.$diachi.'"';?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
    <input type="text" name="sdt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"<?php echo' value="'.$sdt.'"';?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
<div class= mb-3">
  <label for="exampleInputEmail1" class="form-label">Hình thức thanh toán</label>
<table >
            <tr >
            <td style="padding-left: 40px"> <input class="form-check-input" type="radio"value="1" name="pttt" id="flexRadioDefault1" checked> Trả tiền khi nhận hàng</td>
            <td> &nbsp;</td>
                <td style="padding-left: 40px"><input class="form-check-input" type="radio"value="2" name="pttt" id="flexRadioDefault1">  Chuyển khoản </td>
            </tr>
        </table>
</div>

  <a href="index.php?act=xacnhandon"><button type="submit" style="margin-top: 20px; margin-left: 170px; width:40%" class="btn btn-primary" name="mua" value="mua"> Xác nhận mua hàng</button></a>

    </div>
    <div class="dangnhap2">


<div >
<table class="table">
  <thead>
    <tr>
      <th scope="col">Hình</th>
      <th scope="col">Tên</th>
      <th scope="col">Giá </th>
      <th scope="col">Số lượng</th>
      <th scope="col">Size</th>
      <th scope="col">thành tiền</th>
    </tr>
  </thead>
  <?php
$tongtien=0;
$i=0;
foreach ($_SESSION['giohang'] as $cart) {
    $hinh=$img_path.$cart[2];
    $ttien=$cart[3]*$cart[4];
    $tongtien+=$ttien;
    // $xoa='<a href="index.php?act=xoagh&idgio='.$i.'"><input type="button" value="xoa"></a>';
    $spformat_gia =number_format($cart[3],0, '.', '.');
    $spformat_tien =number_format($ttien,0, '.', '.');
    $spformat_tongtien =number_format($tongtien,0, '.', '.');

   

echo' 
<tr>
<td ><img src="'.$hinh.'" alt="" height="80px"</td>
<td >'.$cart[1].'</td>
<td >'.$spformat_gia.'đ</td>
<td >'.$cart[4].'</td>
<td >'.$cart[6].'</td>
<td>'.$spformat_tien.'đ</td>
</tr>' ;
$i=$i+1;  
}
?> 
    <tr>
      <td>Tổng tiền:</td>
      <td></td>
      <td ></td>
      <td> </td>
      <td ></td>
      <td ><?php echo ''.$spformat_tongtien.''?>đ</td>
    </tr>
 
</table>

</form>

    </div>
</div>
</div>