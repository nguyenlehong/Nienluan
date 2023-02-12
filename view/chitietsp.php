<?php
    extract($chitietsp);
    $cart="index.php?act=themvaogio&id=".$id;
    $spformat =number_format($price,0, '.', '.');
    echo '
  <form action="index.php?act=themvaogio&id='.$id.'"  method="POST">  
<input type="hidden" name="id" value="'.$id.'">
<input type="hidden" name="name" value="'.$name.'">
<input type="hidden" name="img" value="'.$img.'">
<input type="hidden" name="price" value="'.$price.'">
    ';
    ?>

<div class="spct">
    <div class="hinhct">
        <?php 
        echo ' <img src="upload/'.$img.'" alt="" width="600px" height="auto">';
        ?>
       
    </div>
    <div class="thongtinsp"> 
        <p class="tensp"> <?=$name?></p> <br>
        <p> Thương hiệu: NGUYEEN</p>
        <p> Mã SP: 102602129<?=$id?> </p>
        <p class="tensp"> <?=$spformat?>đ</p> <br>
        <p>Kích thước</p>

                          <div class=" left width50 form-check">
                    <input class="form-check-input" type="radio" name="size" type="checkbox" value="S" id="flexCheckIndeterminate" checked>
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      S
                    </label>
                  </div>
                  <div class="left width50 form-check">
                    <input class="form-check-input" type="radio" name="size" type="checkbox" value="M" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                    M
                    </label>
                  </div>

                    <div class="left width50 form-check">
                    <input class="form-check-input" type="radio" name="size" type="checkbox" value="L" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                    L
                    </label>
                  </div>
                  <div class="left width50 form-check">
                    <input class="form-check-input" type="radio" name="size" type="checkbox" value="XL" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                    XL
                    </label>
                  </div>   
        <br> <br>
        <p class="left">Số lượng: </p> <input type="number" name="soluong" id="" min="1" max="5"> <br> <br>     
             <br> 
        <button type="button" class=" btn btn-outline-secondary" style="width:350px">Mua ngay</button> <br> 
        
</form>
<?php
echo '
<a href="'.$cart.'" > 
<button type="submit"  class=" btn btn-outline-secondary" name="them" value="them" style="width:350px; margin-top: 12px; ">Thêm vào giỏ</button> </a><br> 


</form>';
?>
        <p>
        <?=$mota?>

</p>

     </div>
</div>