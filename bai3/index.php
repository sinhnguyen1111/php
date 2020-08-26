<?php
	require_once 'list_sp.php';
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			table{
				width: 40%;
				margin: 0 auto;
				margin-top: 30px;
			}
		</style>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<td colspan="3">Danh sách sản phẩm</td>
			
			<td><a href="shopping_cart.php">Xem giỏ hàng</a></td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Đơn giá</th>
			<th>Hành động</th>
		</tr>
		<?php
			foreach ($data_sp as $key => $value) {
		?>
		
		<tr>
			<td><?php echo $value['msp']; ?></td>
			<td><?php echo $value['tensp']; ?></td>
			<td><?php echo $value['dongia']; ?></td>
			<td><a href="add.php?id=<?php echo $key ?>">Add to cart</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>