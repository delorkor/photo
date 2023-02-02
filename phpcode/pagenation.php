<?php 
session_start();

class Pagination
{
public $str_start;
public $str_page;
public $str_page_ostatoc;
public $arr_rev;
public $numStr=2;
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
            if($this->str_page_ostatoc>9){$this->str_page_ostatoc=9;}
             for ($i=$this->str_start; $i <$this->str_start+$this->str_page_ostatoc; $i++) { 
      
             echo '<div class="box">';
             echo '  <a href="/page_img.php/'.$this->arr_rev[$i] .'"><img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' .$this->arr_rev[$i] . '"alt=""> </a>';
             echo '<form action="phpcode/down_f.php" method="post">';
             echo'<input class="ninja" type="text"  name="del" value ="'. $this->arr_rev[$i] .'" >';
            if (isset($this->arr_rev[$i])) {
              echo'<input type="submit" id="dell" class="del_but" value="">';
          echo'<label for="dell"><div><svg xmlns="http://www.w3.org/2000/svg" fill="rgb(28, 27, 26)" viewBox="0 0 24 24" width="24px" height="24px"><path d="M 12 2 C 6.4666667 2 2 6.4666667 2 12 C 2 17.533333 6.4666667 22 12 22 C 17.533333 22 22 17.533333 22 12 C 22 6.4666667 17.533333 2 12 2 z M 12 4 C 16.466667 4 20 7.5333333 20 12 C 20 16.466667 16.466667 20 12 20 C 7.5333333 20 4 16.466667 4 12 C 4 7.5333333 7.5333333 4 12 4 z M 8.7070312 7.2929688 L 7.2929688 8.7070312 L 10.585938 12 L 7.2929688 15.292969 L 8.7070312 16.707031 L 12 13.414062 L 15.292969 16.707031 L 16.707031 15.292969 L 13.414062 12 L 16.707031 8.7070312 L 15.292969 7.2929688 L 12 10.585938 L 8.7070312 7.2929688 z"/></svg><input type="submit" class="del_but"  value=""></div></label>';
    }
    echo '</form>' ;
    echo '</div>';
            }
   
         }

    }
  function getNumPag(){
    if (empty($_GET["p"])) {
       $_GET["p"]=1;
    }
    if($_GET["p"]>$this->numStr+1){
      echo'<a class=" ClassSt" href="?p=1">'. 1 .'</a><span>...</span>';
    }

      for($i = $this->getNumDisplayMin(); $i <= $this->getNumDisplayMax(); $i++){ 
        if($i==$_GET["p"]){
           echo'<a class=" ClassStyle" href="?p=' . $i . '">'. $i .'</a>';
}
        else{
           echo'<a class=" ClassSt" href="?p=' . $i . '">'. $i .'</a>';
}
 } 
 if($_GET["p"]<$this->str_page-$this->numStr){
 echo'<span>...</span><a class=" ClassSt" href="?p=' . $this->str_page . '">'. $this->str_page .'</a>';
    }
  }
    function getNum(){
        $p = isset($_GET["p"]) ? (int) $_GET["p"] : 1;
        return  $p ;
    } 

    function getNumDisplayMin(){
        if ($_GET["p"]>$this->numStr) {
          return $_GET["p"]-$this->numStr;
        }
    }
        
    function getNumDisplayMax(){
          $DisplayMax=$_GET["p"]+$this->numStr;
        if ($DisplayMax>=$this->str_page) {
            return $this->str_page;
        }
        else return $DisplayMax;
    }
            
}

 




