<?php 
include '../mysql/conn.php';
?>
<?php
$iddoitac = $_GET['iddoitac'];
$sql = "select * from doitac where iddoitac='$iddoitac'";
$sql = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($sql)) {
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
			<td><input type="text" name="thongtindoitac" value="<?php echo $row['thongtindoitac']; ?>"></td>
		</tr>
		<tr> 
            <td>Hình ảnh</td>
            <td> <input type="text" name="hinhdoitac" value="<?php echo $row['images']; ?>">
			</td>
		</tr>
		<tr>
		    <td>Thông tin chiết khấu</td>
		    <td><input type="text" name="thongtinchietkhau" value="<?php echo $row['thongtinchietkhau']; ?>"></td>
		</tr>
		<tr>
		    <td>Link đối tác</td>
		    <td><input type="text" name="linkdoitac" value="<?php echo $row['linkdoitac']; ?>"></td>
		</tr>
		<tr rowspan="2"><td><button name="suadoitac" value="1">Lưu thay đổi</button></td> </tr>
	</table>
</form>
</body>
</html>
<?php
}
if (isset($_POST['suadoitac'])) {
    $thongtindoitac = $_POST['thongtindoitac'];
    $hinhdoitac = $_POST['hinhdoitac'];
    $thongtinchietkhau = $_POST['thongtinchietkhau'];
    $linkdoitac = $_POST['linkdoitac'];
    $sql = "update doitac set thongtindoitac='$thongtindoitac', images='$hinhdoitac',thongtinchietkhau='$thongtinchietkhau',linkdoitac='$linkdoitac' where iddoitac=$iddoitac";
    $doitac = mysqli_query($con, $sql);
    echo $sql;
    header('location: ../admin.php?hienthi=thongtincacdoitac');
}

?>