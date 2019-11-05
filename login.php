<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<img class="loginbg" src="img/loginbackground.jpg"> 
	<?php
	require_once("./db.php");
	?>
	<form class="box" action="" method ="post">
	<h1> LOGIN PAGE </h1>
	<input type ="text" name="username" placeholder="Username">
	<input type ="password" name="pass" placeholder="Password">
	<input type ="submit" name="" value="Login">
	</form>
		<?php 
		if(isset($_POST['username']) && isset($_POST['pass']))
		{
			$un = $_POST['username'];
			$pw = $_POST['pass'];
			$sql = "Select * from account where Username='" . $un 
				. "' and Password='" . $pw . "'";
			$acc = query($sql);
			if(count($acc)>0)
			{
				header("Location: ./admin.php");
			}
		}
	
		?>
		</div>
</body>
</html>