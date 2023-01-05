<?php

session_start();
include 'down_f.php';
 $arr_elem=[];
 if (($file = fopen('user.csv','r'))!==false) {
    // $arr=fgetcsv($file, filesize('user.csv'),',');
    while(($arr=fgetcsv($file, filesize('user.csv'),','))!==false){
        $arr_elem[]=$arr;
    }
        foreach ($arr_elem as $value) {

            if ($value[0]==$_POST['login'] && $value[5]==$_POST['pasword'] ) {
                $_SESSION['name']=$value[1];
                $_SESSION['login']=$value[0];
                $_SESSION['pasword']=$value[5];
                $dir_img = opendir('../photo/'. $_SESSION['login']);
                down_file($dir_img);
                closedir($dir_img);
                header('Location: ../index.php');
            }
            else {
                
                $_SESSION['error']="Неверный логин или пароль";
          
            }
           
        }
        // header('Location: ../includ.php');
     }
   
    //  echo '<pre>';
    //  echo print_r($arr_elem);
     
    // //  echo print_r($_SESSION['login']);
    //  echo '</pre>';
 
 
fclose($file);