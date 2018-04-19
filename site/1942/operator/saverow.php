<?php
require_once('dbdata.php');

try {
    //читаем новые значения
    $id = $_POST['id'];
    $field0 = $_POST['field0'];
    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    
    //подключаемся к базе
    $dbh = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPass);
    //указываем, мы хотим использовать utf8
    $dbh->exec('SET CHARACTER SET utf8');

    //определяем количество записей в таблице
    $stm = $dbh->prepare('UPDATE prise SET field0=?, field1=?, field2=? WHERE id=?');
    $stm->execute(array($field0, $field1, $field2, $id));
}
catch (PDOException $e) {
    echo 'Database error: '.$e->getMessage();
}

// end of saverow.php