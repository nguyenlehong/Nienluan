 <!-- san pham moi -->
 <div class="sanphammoi"> 
  <h2 class="chinhgiua" > SẢN PHẨM NỔI BẬT</h2>
<!-- $spformat là hàm tách các số 0: vd 1,000,000 -->
  <?php 

					$i=0;
					foreach ($spnew as $sp) {
					extract($sp);
          $chitietsp="index.php?act=chitietsp&id=".$id;
					$cart="index.php?act=themvaogio&id=".$id;
					$hinh=$img_path.$img;
          $spformat =number_format($price,0, '.', '.');
					echo '
          <div class="card left" style="width: 18rem;"> <a style="text-decoration: none;" href="'.$chitietsp.'">
  <img src="'.$hinh.'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="fontsp card-text"  style="text-align: center;">'.$name.'</h5>
    <p class="fontsp card-text" style="text-align: center;">'. $spformat.'đ</p>
  <form action="index.php?act=themvaogio&id='.$id.'" method="POST">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="hidden" name="name" value="'.$name.'">
    <input type="hidden" name="img" value="'.$img.'">
    <input type="hidden" name="price" value="'.$price.'">
   <input type="button" class=" width200 btn btn-light" name="" value="Tư vấn"></button>
   </a>
   </form>
  </div>
</div> 
          ';
				$i+=1;
				}					
					?>	

</div> <!-- san pham moi -->

<!-- <a href="'.$cart.'" ><input type="submit" class=" width200 btn btn-light" name="them" value="thêm vào giỏ"></button></a> -->