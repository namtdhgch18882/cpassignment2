<?php 

function query($sql)
{
	$db = parse_url(getenv("DATABASE_URL"));
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
	));
	//you sql query
	$stmt = $pdo->prepare($sql);
	//execute the query on the server and return the result set
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
	return $resultSet;
}
function execsql($sql)
{
	$db = parse_url(getenv("DATABASE_URL"));
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
	));
	//you sql query
	$stmt = $pdo->prepare($sql);
	//execute the query on the server and return the result set
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
	return $resultSet;
}
?>