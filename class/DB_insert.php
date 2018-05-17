<?php

//DB接続クラス読み込み
require_once 'DB_connection.php';

//DB PORT処理
try{

    $stt = $db->prepare('insert into kintai_1000(user_id, start_date, start_time, end_date, end_time)VALUES(1000,:start_date,:start_time,:end_date,:end_time)');

    $stt ->bindValue(':start_date',$_POST['start_date']);
    $stt ->bindValue(':start_time',$_POST['start_time']);
    $stt ->bindValue(':end_date',$_POST['end_date']);
    $stt ->bindValue(':end_date',$_POST['end_date']);

    $stt -> execute();
    $db -> NULL;

}catch(PDOException $e) {
    die("error:{$e->getMessage()}");
}

