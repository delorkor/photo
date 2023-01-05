<?php
session_start();
//////////////////////////////////////////запись файла
if(!is_dir('../photo/'. $_SESSION['login'])){
mkdir('../photo/'. $_SESSION['login']);

$path= "photo/". $_SESSION['login'] . "/" . time() . $_FILES['down_file']['name'];
    move_uploaded_file( $_FILES['down_file']['tmp_name'],'../'. $path);

header('Location: ../personal_account.php');

}
else {
    $path= "photo/". $_SESSION['login'] . "/" . time() . $_FILES['down_file']['name'];
    move_uploaded_file( $_FILES['down_file']['tmp_name'],'../'. $path);
    header('Location: ../personal_account.php');
}
////////////////////////////////////////////////




////////////////////////////////// чтение файла

$dir_img = opendir('../photo/'. $_SESSION['login']);
down_file($dir_img);
closedir($dir_img);
//////////////////////////////////////////




function down_file($dir_i){
    $_SESSION['name_img']=[];
    // $arr_dir_file =[];
    while (false !== ($entry = readdir($dir_i))) {
        if ($entry != "." && $entry != "..") {
            $_SESSION['name_img'][] =$entry;
    
            // echo '<pre>';
            // // echo print_r($arr_dir_file);
            // echo print_r( $_SESSION['name_img']);
            // echo '</pre>';
        }
    } 
}












// $_SESSION['name_img']=[];
// // $arr_dir_file =[];
// while (false !== ($entry = readdir($dir_img))) {
//     if ($entry != "." && $entry != "..") {
//         $_SESSION['name_img'][] =$entry;

//         // echo '<pre>';
//         // // echo print_r($arr_dir_file);
//         // echo print_r( $_SESSION['name_img']);
//         // echo '</pre>';
//     }
// }