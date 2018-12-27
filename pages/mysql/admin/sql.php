<?php
//danh sach cac doi tac
function dachsachcacdoitac(){
	$qr="select * from doitac 
	order by iddoitac desc";
	return(mysqli_query($qr));
		
}
?>