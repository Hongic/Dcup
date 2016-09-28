<?php
$dsn = 'mysql:host=mysql;port=3306;dbname=db_caocc;charset=utf8'; // host 必须跟links一样
$user = 'root';
$password = '';

try {
 	$pdo = new PDO($dsn,$user,$password);
 	var_dump($pdo); 
	$rs = $pdo -> query("select * from tb_user"); 
    while($row = $rs -> fetch()){ 
	  	print_r($row); 
	}
} catch (PDOException $e) {
    echo 'MySQL 服务连接失败 : ' . $e->getMessage();
}

 