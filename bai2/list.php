<?php
	session_start();
	if(isset($_SESSION['info'])){ 
		$data = $_SESSION['info'];
	}
	else{
		$data =array();

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<h1>DANH SÁCH SINH VIÊN</h1>
	<button class="btn btn-success"><a href="add.php">Thêm mới</a></button>
	<?php
		if(isset($_COOKIE['msg'])){
	?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong>
			<?php 
				echo $_COOKIE['msg']; 
			?>
		</div>
	<?php
		}
	?>

	<table class="table">
		<tr>
			<td>#</td>
			<td>Mã sinh viên</td>
			<td>Họ và tên</td>
			<td>Action</td>
		</tr>
		
		<?php 
			$i = 0;
			foreach ($data as $value){
				$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $value['msv'];?></td>
			<td><?php echo $value['user'];?></td>
			<td>
				<button  class="btn btn-success"><a href="detail.php?msv=<?php echo $value['msv'] ?>">Detail</a></button>
				<button  class="btn btn-danger"><a href="delete.php?msv=<?php echo $value['msv'] ?>">Delete</a></button>
			</td>
		</tr>
		<?php
			}
		?>	
	
	</table>
</body>
</html>
