<?php
session_start();
class down_file
{
public $name_img=[];
 

 function setFile(){
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
 }

  function getFile(){
    $dir_img = opendir('../photo/'. $_SESSION['login']);
    $_SESSION['name_img']=[];
    while (false !== ($entry = readdir($dir_img))) {
        if ($entry != "." && $entry != "..") {
            $_SESSION['name_img'][] =$entry;
        }
    } 
    closedir($dir_img);
  }

  function DelFile(){
    // $dir_img = opendir('../photo/'. $_SESSION['login']);
    foreach ($_SESSION['name_img'] as $key=> $value_del) {
        if ($_POST['del']== $value_del) {
            unlink('../photo/'. $_SESSION['login'] . "/" . $value_del);
        }
    }
    header('Location: ../personal_account.php');
    // closedir($dir_img);
  }



}

$Down_f = new down_file();
$Down_f->setFile();
$Down_f->DelFile();
$Down_f->getFile();