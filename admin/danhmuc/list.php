<div class="card title">
    <div class="card-header ">
        <h4>Danh sách danh mục</h4>
     </div>
</div>
<div class="themdm">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên </th>
      <th scope="col" style="padding-right:200px;"></th>
      <th scope="col" >Thao tác</th>
    </tr>
  </thead>
  <tbody>

  <?php 
    foreach ($listdanhmuc as $danhmuc){
      extract($danhmuc);
      $suadm="index.php?act=suadm&id=".$id;
      $xoadm="index.php?act=xoadm&id=".$id;
      echo '<tr> 
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td ></td>
      <td><a href="index.php?act=updatedm"><button type="width button" class="btn btn-info"><ion-icon name="repeat-outline"></ion-icon></button></a> 
      <a href="'.$xoadm.'"><button type="width button" class="btn btn-danger"><ion-icon name="close-outline"></ion-icon></button></a></td> 
      </tr>';
    }
  
  ?>
  </tbody>
</table>
<a href="index.php?act=adddm"> <button type="width button" class="btn btn-primary">Thêm</button></a>
</div>
