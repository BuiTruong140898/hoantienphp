<?php 
include '../mysql/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body >
<form method="POST" action="">
	<table style="border: 1px solid; width: 500px; height: 300px; margin: 100px auto"> 
		<tr>
			<td>Thông tin đối tác</td>
			<td><input type="text" name="thongtindoitac"></td>
		</tr>
		<tr> 
            <td>Hình ảnh</td>
            <td> <input type="text" name="hinhdoitac">
			</td>
		</tr>
		<tr>
		    <td>Thông tin chiết khấu</td>
		    <td><input type="text" name="thongtinchietkhau"></td>
		</tr>
		<tr>
		    <td>Link đối tác</td>
		    <td><input type="text" name="linkdoitac"></td>
		</tr>
		<tr rowspan="2"><td><button name="themdoitac" value="1">Thêm đối tác</button></td> </tr>
	</table>
</form>
</body>
</html>
<?php 
if (isset($_POST['themdoitac'])) {
    $thongtindoitac = $_POST['thongtindoitac'];
    $hinhdoitac = $_POST['hinhdoitac'];
    $thongtinchietkhau = $_POST['thongtinchietkhau'];
    $linkdoitac = $_POST['linkdoitac'];
    $sql = "insert into doitac values(NULL, '$thongtindoitac','$hinhdoitac','$thongtinchietkhau','$linkdoitac')";
    $doitac = mysqli_query($con, $sql);
    echo $sql;
    header('location: ../admin.php?hienthi=thongtincacdoitac');
}

?>