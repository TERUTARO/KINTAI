<?php

class DB_connection {
	
	//ファイル読み込む
	require('../conf/property.php');

	//DSN定義 etc...
	$dsn = 'mysql:dbname=DBNAME01; host=DBHOST01';
	$usr = DBUSER01;
	$passwd = DBUSER_PASS01;

	//DB接続処理
	try{
    	$db = new PDO($dsn,$usr,$passwd);
    	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    	$db->exec('SET NAMES utf8');

} catch (PDOException $e) {
    die("接続エラー：{$e->getMessage()}");
}

return $db;
?>