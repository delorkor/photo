<?php
$server ='127.0.0.1';
$mysql_use ='root';
$mysql_password='';
$db='photoHost';

$limk = mysqli_connect($server, $mysql_use, $mysql_password, $db);
if (mysqli_connect_errno()) {
    die('Ошибка соединения: ' . mysqli_connect_error());
}
echo 'Успешно соединились';

// $select_db="SELECT * FROM `user` WHERE Id "  ;
// $result= mysqli_query($limk, $select_db);
// $result_arr =mysqli_fetch_all($result ,MYSQLI_ASSOC);
echo '<pre>';
echo print_r($limk); 
echo '</pre>';