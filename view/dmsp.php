<!-- danh muc va san pham -->
<div class="danhmucsp">
<div class="danhmuc"> 
 
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Danh mục
  </button>
  <?php
      foreach ($dsdm as $dm) {
        extract($dm);
        $linkdm="index.php?act=sanpham&iddm=".$id;
        echo '
        <a href="'.$linkdm.'" class="text-reset"><button type="button" class="list-group-item list-group-item-action" >'.$name.'</button></a>	';
      }
      ?>
</div>
</div>
<div class="listsanpham">
<?php
					$i=0;
					foreach ($sphome as $sp) {
					extract($sp);
					$hinh=$img_path.$img;
          $chitietsp="index.php?act=chitietsp&id=".$id;
          $spformat =number_format($price,0, '.', '.');
					echo '
          <div class="card left chinhgiua" style="width: 18rem;"> <a style="text-decoration: none;" href="'.$chitietsp.'">
  <img src="'.$hinh.'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="fontsp card-title">'.$name.'</h5>
    <p class="fontsp card-text">'.$spformat.' đ</p>
    <form action="index.php?act=themvaogio" method="POST">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="hidden" name="name" value="'.$name.'">
    <input type="hidden" name="img" value="'.$img.'">
    <input type="hidden" name="price" value="'.$price.'">
  

<button type="button" class=" width200 btn btn-light">Tư vấn</button></a>

    </form>
  </div>
</div> 
          ';
				$i+=1;
				}					
					?>	
</div>
</div>
<!-- <input type="submit" class="btn btn-primary" name="them" value="Thêm vào giỏ">  -->