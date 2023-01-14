<?php
session_start();

class registr_user
{
private $login;
private $name;
private $fname;
private $dater;
private $email;
private $pasword;
public $arr_post=[];
private $regular_reg='/\b\w{9,16}/';


function __construct($arr_post){

$this->arr_post=array_merge($arr_post);
$this->login=$arr_post['login'];
$this->name=$arr_post['name'];
$this->fname=$arr_post['fname'];
$this->dater=$arr_post['dater'];
$this->email=$arr_post['email'];
$this->pasword=$arr_post['pasword'];
}

function setReg(){
   if(!empty($this->login) && !empty($this->name) && !empty($this->fname) && !empty($this->dater) && !empty($this->email)&& !empty($this->pasword)){
 if (preg_match($this->regular_reg, $this->pasword)) {
   $this->getArgument();
   }
   }
   }
   

function getArgument(){

   if ( !file_exists('user.csv')) {
      $file = fopen('user.csv','a+');
      $KEYS= array_keys($this->arr_post);
    fputcsv($file, $KEYS);
    fputcsv($file, $this->arr_post);
    fclose($file);
   }
   else{
      $file = fopen('user.csv','a+');
      fputcsv($file,$this->arr_post);
      fclose($file);
   }
   
   header('Location: ../index.php');
}

}

$Registration = new registr_user($_POST);
$Registration->setReg();








// echo '<pre>';
// // echo print_r($arr_p);
// echo print_r($_POST);
// echo print_r($Registration->arr_post);
// echo '<pre>';




