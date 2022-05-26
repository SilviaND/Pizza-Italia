<?php



$dsn = 'mysql:dbname=my_project_db;host=localhost';
$user = 'root';
$password = '';

try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$options = [
		\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	];
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>