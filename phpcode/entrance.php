<?php

session_start();
include('conect_db.php');

class authorization
{
public $limk=[];
public $arr_elem=[];

 function __construct($limk){
    $this->limk=$limk;

 }
    function getFile(){

$select_db="SELECT * FROM `user` ";
$result= mysqli_query($this->limk, $select_db);
$this->arr_elem=mysqli_fetch_all($result ,MYSQLI_ASSOC);

echo '<pre>';
print_r($this->arr_elem);
echo '</pre>';
    }
    function getData(){

        foreach ($this->arr_elem as $value) {

            if ($value['login']==$_POST['login'] && $value['Pasword']==$_POST['pasword'] ) {
                $_SESSION['name']=$value['Name'];
                $_SESSION['login']=$value['login'];            
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

$Authoriz = new authorization($limk);
$Authoriz->getFile();
$Authoriz->getData();
// echo '<pre>';
// print_r($Authoriz->arr_elem);
// echo '</pre>';


// $Authoriz->SetError();



















// class authorization
// {
//  private $arr_elem=[];

//     function getFile(){

//         if (($file = fopen('user.csv','r'))!==false) {
//             while(($arr=fgetcsv($file, filesize('user.csv'),','))!==false){
//                 $this->arr_elem[]=$arr;
//             }
//             fclose($file);
//          }
//     }

//     function getData(){

//         foreach ($this->arr_elem as $value) {

//             if ($value[0]==$_POST['login'] && $value[5]==$_POST['pasword'] ) {
//                 $_SESSION['name']=$value[1];
//                 $_SESSION['login']=$value[0];            
//                 header('Location: ../index.php');
//             }
//            }  
//          }

//     function SetError(){

//         if (!$_SESSION['name']) {
//             $_SESSION['error']="Неверный логин или пароль";
//             header('Location: ../includ.php');
//             }        
//         }
         
   
// }

// $Authoriz = new authorization();
// $Authoriz->getFile();
// $Authoriz->getData();
// $Authoriz->SetError();