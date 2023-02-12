<div class="card title">
    <div class="card-header ">
        <h4>Danh sách sản phẩm</h4>
     </div>
</div>
<div class="themdm">
<!-- 
<form action="index.php?act=listsp" method="POST">
  <table><tr><td>
<input type="text" name="kyw" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm" ></td>
<td><select name="iddm" class="form-select" style="width:300px;" aria-label="Default select example">
<option value="0" selected>Tất cả</option>
<?php
						foreach ($listdanhmuc as $danhmuc) {
							extract($danhmuc);
							echo '<option value="'.$id.'">'.$name.' </option>';
						}
						?>
</select></td>
<!-<td><button type="submit" name="listok" value="listok" class="btn btn-primary"><ion-icon name="search-outline"></ion-icon></button> </td>  -->
</tr>

</table>
</form> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên </th>
      <th scope="col">Giá</th>
      <th class="mr" scope="col" >Thao tác</th>
    </tr>
  </thead>
<tbody>

</tbody>
<?php
foreach ($listsanpham as $sanpham) {
  extract($sanpham);
  $suasp="index.php?act=suasp&id=".$id;
  $xoasp="index.php?act=xoasp&id=".$id;
  $spformat_price =number_format($price,0, '.', '.');

echo '<tr>
<th scope="row">'.$id.'</th>
<td> '.$name.'</td>
<td> '.$spformat_price.'đ</td>
<td class="mr"> <a href="'.$suasp.'"><button type="width button" class="btn btn-info" style="width:auto;"><ion-icon name="repeat-outline"></ion-icon></button></a> 
<a href="'.$xoasp.'"><button type="text" class="width btn btn-danger" style="width:auto"><ion-icon name="close-outline"></ion-icon></button></a></td> 
</tr>';
}

?>

</table>

</div>
