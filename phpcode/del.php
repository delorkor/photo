<?php
session_start();
include 'down_f.php';
     echo '<pre>';
     echo print_r($_SESSION['name_img']).PHP_EOL;
     echo $_POST['del'];
     echo '</pre>';
     $dir_img = opendir('../photo/'. $_SESSION['login']);
foreach ($_SESSION['name_img'] as $key=> $value_del) {
    if ($_POST['del']== $value_del) {
        unlink('../photo/'. $_SESSION['login'] . "/" . $value_del);
    }
}
// $dir_img = opendir('../photo/'. $_SESSION['login']);
// down_file($dir_img);
// closedir($dir_img);
$Down_f->getFile();
header('Location: ../personal_account.php');



