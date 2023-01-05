<?php
session_start();
if(!empty($_POST['login']) && !empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['dater']) && !empty($_POST['email'])&& !empty($_POST['pasword'])){

   
   if ( !file_exists('user.csv')) {
      $file = fopen('user.csv','a+');
      $KEYS= array_keys($_POST);
    fputcsv($file, $KEYS);
    fputcsv($file, $_POST);
    fclose($file);
   }
   else{
      $file = fopen('user.csv','a+');
      fputcsv($file, $_POST);
      fclose($file);
   }

   // $file = fopen('user.csv','a+');
   // fputcsv($file, $_POST);
   // fclose($file);
   header('Location: ../index.php');
}













//   static $flag= false;
//    if ($flag==false) {
//     $KEYS= array_keys($_POST);
//     fputcsv($file, $KEYS);
//     $flag=true;
//    }
//    fputcsv($file, $_POST);