<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	require_once("./db.php");
	?>
			<h1> Manage products </h1>
			<table border="1" cellspacing="0">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>CatId</th>
					<th>Actions</th>
				</tr>
		<?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>
				<tr>
					<td><?=$pros[$i][0]?></td>
					<td><?=$pros[$i][1]?></td>
					<td><?=$pros[$i][2]?></td>
					<td><?=$pros[$i][3]?></td>
					<td><?=$pros[$i][4]?></td>
					<td><a href="">Edit</a>
						<a href="">Delete</a>
				</tr>
			<?php
		}
		?>
			</table>
			<br>
		<a href="./addproduct.php">Add new Product</a>
		</div>
</body>
</html>