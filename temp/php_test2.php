<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$dsn = 'mysql:dbname=uriage;host=localhost';
$user = 'root';
$password = 'P@SSw0rd';

try{
    $dbh = new PDO($dsn, $user, $password);

    print('接続に成功しました。<br>');

    $dbh->query('SET NAMES sjis');

    $sql = 'select * from user';
    foreach ($dbh->query($sql) as $row) {
        print($row['id']);
        print($row['username'].'<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>