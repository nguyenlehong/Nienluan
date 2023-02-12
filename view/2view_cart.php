
<?php 
$cart2 = (isset($_SESSION['cart2']))? ($_SESSION['cart2']) : [];
// echo "<pre>";
// print_r($cart2);
?>

<div class="card title">
    <div class="card-header ">
        <h4>Giỏ hàng </h4>
     </div>
</div>
<div class="themdm">
<table class="table">
  <thead>
    <tr>
    <th scope="col">STT</th>
      <th scope="col">Hình</th>
      <th scope="col">Tên</th>
      <th scope="col">Giá </th>
      <th scope="col">Số lượng</th>
      <th scope="col">thanh tien</th>
      <th scope="col" class="mr" >Thao tác</th>
    </tr>
  </thead>
  <?php 
  $tongtien=0;
  foreach ($cart2 as $key) {
    extract($key);
    $thanhtien=$key['soluong']*$key['price'];
    $tongtien+=$thanhtien;
    echo '
    <tr>
    <td> </td>
    <td><img src="upload/'.$img.'" width="100px">  </td>
    <td > '.$name.'</td>
    <td>  '.$price.'</td>
    <td>  <input type="number" value="'.$soluong.'"style="width:50px;" min="1" max="10">  </td>
    <td>'.$thanhtien.' </td>
    <td class="mr" ><a href="index.php?act=2cart&id='.$id.'&action=delete"><button type="width button" class="btn btn-danger"><ion-icon name="close-outline"></ion-icon></button></a> </td>
  </tr>
    
    ';
  }
  ?>

    <tr>
      <td>Tổng tiền:</td>
      <td></td>
      <td ></td>
      <td> </td>
      <td ></td>
      <td ></td>
      <th class="mr" > <?php echo ''.$tongtien.''?>đ &nbsp; &nbsp; <a href="index.php?act=donhang"class="btn btn-primary">Mua hàng</a></th>
    </tr>
 
</table>

</div>
<!-- <a href="index.php?act=xoagh&idgh='.$i.'"><button class="width btn btn-danger">Xóa</button> -->