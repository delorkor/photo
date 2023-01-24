<?php 
session_start();
if (!$_SESSION['name']) {
  header('Location: index.php');
}
include 'phpcode/pagenation.php';
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
 $Pagin = new Pagination(9);
 $Pagin->getPag();
  ?>
</section>
<section class="pagen">
<?$Pagin->getNumPag();?>
