<div class="card title">
    <div class="card-header ">
        <h4>Danh sách nhân viên</h4>
     </div>
</div>
<div class="themdm">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên </th>
      <th scope="col">Mật khẩu </th>
      <th scope="col">Địa chỉ </th>
      <th scope="col">SĐT</th>
      <th scope="col" class="mr" >Thao tác</th>
    </tr>
  </thead>
  <tbody>

    <?php
  foreach ($danhsachnv as $taikhoan) {
  extract($taikhoan);

  $xoasp="index.php?act=xoanv&id=".$id;
  
echo '<tr>
<th scope="row">'.$id.'</th>
<td> '.$tennv.'</td>
<td> ******</td>
<td> '.$diachinv.'</td>
<td> '.$sdtnv.'</td>
<td class="mr"> 
<a href="'.$xoasp.'"><button type="text" class="width btn btn-danger" style="width:auto"><ion-icon name="close-outline"></ion-icon></button></a></td> 
</tr>';
}
  
?>
  </tbody>
</table>
</div>