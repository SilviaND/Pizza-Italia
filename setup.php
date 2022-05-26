<?php

header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$databaseName = "my_project_db";
$username = "root";
$password = "";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
  $options = [
    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];



$connection = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password, $options);
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>