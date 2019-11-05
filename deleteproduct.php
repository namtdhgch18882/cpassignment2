<?php
	require_once('db.php');
 
	if( isset($_GET['productid']) )
	{
		$id = $_GET['productid'];
		$sql= "Delete from product where productid='$id'";
		$rs = execsql($sql);
		if($rs != null)
			echo "Product has been deleted successfully!";
		else
			echo "Try again";
	}
?>