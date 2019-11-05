<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	require_once("./db.php");
	?>
			<form class="addproduct" action="" method="Post">
				Product Id:  
				<input type="text" name="Id"> <br>
				Product Name:
				<input type="text" name="Name"> <br>
				Image:    
				<input type="text" name="Image"> <br>
				Price:     
				<input type="text" name="Price"> <br>
				Category:
				<select name="CatId">
				<?php 
				$sql = "Select * From category";
				$cats = query($sql);
				for($i=0; $i<count($cats); $i++)
				{
					?>
					<option value="<?=$cats[$i][0]?>"><?=$cats[$i][1]?></option>
					<?php
				}
				?>
				</select>
				<br><br>
				<input type="submit" value="Update">
				<br>
				<br>
				<a href="./admin.php">Back to Admin</a>
			</form>
			<?php 
			if(isset($_POST['Id']) && isset($_POST['Name']) && isset($_POST['Image']) && isset($_POST['Price']) && isset($_POST['CatId']))
			{
				$id = $_POST['Id'];
				$name = $_POST['Name'];
				$img = $_POST['Image'];
				$pr = $_POST['Price'];
				$cid = $_POST['CatId'];

				$sql = "Update product 
				Set ProductName='" . $name . "', Image='" . $img . "', Price=" . $pr . ", 
				CatId=" . $cid . "
				Where ProductId='" . $id . "';";
				
				$rs = execsql($sql);
				if($rs != null)
					echo "Product has been updated successfully!";
				else
					echo "Try again";
			}
			?>
</body>
</html>