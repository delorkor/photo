<?php 
session_start();
if (!$_SESSION['name']) {
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="user">
<header class="head">
<ul>
<li><a href="phpcode/exit.php">выход</a></li>
<li><a href="phpcode/cancell.php">На главную</a></li>
    <form class="down_fi" action="phpcode/down_f.php" enctype="multipart/form-data" method="post">
    <li class="file_lable" ><label  for="down_file">Добавить</label></li>
     <input id="down_file" class="file_push" type="file" name="down_file" >
   
    <li><input type="submit" class="down_sub" value="отправит"></li>
    </form> 
    </ul>
    
</header>
<section class="img_sec">
<?php

if ($_SESSION['name_img']!='') {

  //////////////////////////////////////////////////////////////////////// пагенация
  $p = isset($_GET["p"]) ? (int) $_GET["p"] : 1;
  $str_img=8;

//  echo '<pre>';
//  echo print_r($_SESSION["name_img"]);
//  echo '</pre>';
 $arr_rev=array_merge(array_reverse($_SESSION['name_img']));
  
  $str_start=($p-1)*$str_img;
$str_page=ceil(count($_SESSION['name_img'])/$str_img);


    for ($i=$str_start; $i <$str_start+$str_img ; $i++) { 
      echo '<div class="box">';
      echo '<img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' .$arr_rev[$i] . '"alt=""> ';
      echo '<form action="phpcode/del.php" method="post">';
      echo'<input class="ninja" type="text" name="del" value ="'. $arr_rev[$i] .'" >';
      if (isset($arr_rev[$i])) {
        echo'<input type="submit" class="del_but" value="Удалить">';
    }
    echo '</form>' ;
    echo '</div>';
    }
    

// //   ////////////////////////////////////////////////////////////////////////



// foreach (array_reverse($_SESSION['name_img']) as $key => $value_img) {
//   echo '<div class="box">';
//   // echo '<a href="page_img.php"><img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' . $value_img . '"alt=""></a> ';
//   echo '<img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' . $value_img . '"alt=""> ';
//   echo '<form action="phpcode/del.php" method="post">';
//   echo'<input class="ninja" type="text" name="del" value ="'. $value_img .'" >';
//   if (isset($value_img)) {
//     echo'<input type="submit" class="del_but" value="Удалить">';
// }
// echo '</form>' ;
// echo '</div>';
// }



}

  ?>

</section>
<section class="pagen">

<? for($i = 1; $i <= $str_page; $i++){ ?>
<a href="?p=<?= $i ?>"><?= $i?></a>
<? } ?>


</section>
</body>

</html>