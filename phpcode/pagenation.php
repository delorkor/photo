<?php 
session_start();

class Pagination
{
public $str_start;
public $str_page;
public $str_page_ostatoc;
public $arr_rev;
public $p;
    function __construct($str_img){
        $this->p=$this->getNum();
        $this->str_start=($this->p-1)*$str_img;
        $this->str_page=ceil(count($_SESSION['name_img'])/$str_img);
        $this->arr_rev=array_merge(array_reverse($_SESSION['name_img']));
        $this->str_page_ostatoc= abs(ceil(count($_SESSION['name_img'])-($this->str_start)));
        
    }
    function getPag(){
        if ($_SESSION['name_img']!=''){
            // $p = isset($_GET["p"]) ? (int) $_GET["p"] : 1;
            if($this->str_page_ostatoc>8){$this->str_page_ostatoc=8;}
             for ($i=$this->str_start; $i <$this->str_start+$this->str_page_ostatoc; $i++) { 
      
             echo '<div class="box">';
             echo '  <a href="/page_img.php/'.$this->arr_rev[$i] .'"><img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' .$this->arr_rev[$i] . '"alt=""> </a>';
             echo '<form action="phpcode/down_f.php" method="post">';
             echo'<input class="ninja" type="text" name="del" value ="'. $this->arr_rev[$i] .'" >';
            if (isset($this->arr_rev[$i])) {
          echo'<input type="submit" class="del_but" value="Удалить">';
    }
    echo '</form>' ;
    echo '</div>';
            }
    
         }

    }
    function getNumPag(){

  for($i = 1; $i <= $this->str_page; $i++){ 
  echo'<a href="?p=' . $i . '">'. $i .'</a>';
 } 

    }
    function getNum(){
        $p = isset($_GET["p"]) ? (int) $_GET["p"] : 1;
        return  $p ;
       } 

}








// <?php
// // echo '<pre>';
// // echo print_r($_SESSION['name_img']);
// // echo '<pre>';

// if ($_SESSION['name_img']!='') {

//   //////////////////////////////////////////////////////////////////////// пагенация
//   $p = isset($_GET["p"]) ? (int) $_GET["p"] : 1;
//   $str_img=8;
//   $str_visual=4;


//  $arr_rev=array_merge(array_reverse($_SESSION['name_img']));
  
//   $str_start=($p-1)*$str_img;
// $str_page=ceil(count($_SESSION['name_img'])/$str_img);
// $str_page_ostatoc= abs(ceil(count($_SESSION['name_img'])-($str_start)));
// if($str_page_ostatoc>8){$str_page_ostatoc=8;}

// // echo '<pre>';
// // // echo print_r($_SESSION["name_img"]);
// // echo $str_page_ostatoc;
// // echo '</pre>';
// // for ($i=$str_start; $i <$str_start+$str_img; $i++) { 
//     for ($i=$str_start; $i <$str_start+$str_page_ostatoc; $i++) { 
      
//       echo '<div class="box">';
//       echo '  <a href="/page_img.php/'.$arr_rev[$i] .'"><img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' .$arr_rev[$i] . '"alt=""> </a>';
//       echo '<form action="phpcode/down_f.php" method="post">';
//       echo'<input class="ninja" type="text" name="del" value ="'. $arr_rev[$i] .'" >';
//       if (isset($arr_rev[$i])) {
//         echo'<input type="submit" class="del_but" value="Удалить">';
//     }
//     echo '</form>' ;
//     echo '</div>';
//     }
    

// // //   ////////////////////////////////////////////////////////////////////////







