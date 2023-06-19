<?php

$host = "localhost:3306";
$db_name = "ai_db";
$username = "root";
$password = "Dbadmin123!";

$dsn = "mysql:host=$host;dbname=$db_name;charset=UTF8;";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}