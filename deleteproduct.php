<?php
	require_once('db.php');
 
	if( isset($_GET['pid']) )
	{
		$id = $_GET['pid'];
		$sql= "Delete from product where ProductId='$id'";
		$rs = execsql($sql);
		if($rs != null)
			echo "Product has been deleted successfully!";
		else
			echo "Try again";
	}
?>