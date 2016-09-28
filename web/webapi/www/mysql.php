<?php
$dsn = 'mysql:dbname=mysql;host=mysql';
$user = 'root';
$password = '';
try {
    $mysqli = new mysqlnd("myapp", "username", "password", "database");
    var_dump($mysqli);
} catch (PDOException $e) {
    echo 'MySQL 服务连接失败 : ' . $e->getMessage();
}