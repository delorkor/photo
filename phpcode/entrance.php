<?php

session_start();

class authorization
{
 private $arr_elem=[];

    function getFile(){

        if (($file = fopen('user.csv','r'))!==false) {
            while(($arr=fgetcsv($file, filesize('user.csv'),','))!==false){
                $this->arr_elem[]=$arr;
            }
            fclose($file);
         }
    }

    function getData(){

        foreach ($this->arr_elem as $value) {

            if ($value[0]==$_POST['login'] && $value[5]==$_POST['pasword'] ) {
                $_SESSION['name']=$value[1];
                $_SESSION['login']=$value[0];            
                header('Location: ../index.php');
            }
           }  
         }

    function SetError(){

        if (!$_SESSION['name']) {
            $_SESSION['error']="Неверный логин или пароль";
            header('Location: ../includ.php');
            }        
        }
         
   
}

$Authoriz = new authorization();
$Authoriz->getFile();
$Authoriz->getData();
$Authoriz->SetError();