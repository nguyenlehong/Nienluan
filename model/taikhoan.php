<?php
function them_taikhoan($tentk,$matkhau,$sdt,$diachi){
	$sql="insert into taikhoan(tentk,matkhau,sdt,diachi) values('$tentk','$matkhau','$sdt','$diachi')";
	pdo_execute($sql);
}
function kiemtratk($tentk,$matkhau){
	$sql="select * from taikhoan where tentk='".$tentk."' and matkhau='".$matkhau."' ";
	$sp=pdo_query_one($sql);
	return $sp;
}
function kiemtranv($tentk,$matkhau){
	$sql="select * from nhanvien where tennv='".$tentk."' and matkhaunv='".$matkhau."' ";
	$nv=pdo_query_one($sql);
	return $nv;
}
function danhsachtk(){
	$sql="select * from taikhoan order by id desc";
	$dachsachtk=pdo_query($sql);
	return $dachsachtk; 
}
function danhsachnv(){
	$sql="select * from nhanvien order by id desc";
	$dachsachnv=pdo_query($sql);
	return $dachsachnv; 
}
function xoa_taikhoannv($id){
	$sql="delete from nhanvien where id=".$id;
	pdo_execute($sql);
}
function xoa_taikhoan($id){
	$sql="delete from taikhoan where id=".$id;
	pdo_execute($sql);
}
function capnhat_taikhoan($id,$tentk,$matkhau,$sdt,$diachi){
	$sql="update taikhoan set tentk='".$tentk."', matkhau='".$matkhau."',sdt='".$sdt."',diachi='".$diachi."' where id=".$id;
pdo_execute($sql);
}
?>