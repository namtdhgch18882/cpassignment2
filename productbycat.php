<!DOCTYPE html>
<html>
<head>
	<title>Positioning</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	require_once("./db.php");
	require_once("./header.php");
	?>
		<?php 
		//this is the left menu
		require_once("./leftside.php");
		?>
		<div class ="content">	
		<?php 
		//get CatId which was sent from client by GET Method
		if(isset($_GET['CatId']))
		{
			$catid = $_GET['CatId'];
			$sql = "Select * from product where CatId=" . $catid;
			$pros = query($sql);
			for($i=0; $i<count($pros); $i++)
			{
		?>
				<div class="product">
					<div class="name"><?=$pros[$i][1]?></div>
					<div class="image">
						<a href="">
							<img src="<?=$pros[$i][2]?>" alt="" width="100%" height="100%">
						</a>
					</div>
					<div class="price"><?=$pros[$i][3]?></div>
				</div>
		<?php
			}
			
		} 
		else
		{
			echo "CatId not found!";
		}		
		?>
		</div>
	<?php require_once("./footer.php"); ?>
</body>
</html>