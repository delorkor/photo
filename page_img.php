<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style_str_img.css" >
    <title>Document</title>
</head>
<body class="user">
 
 <section class="box_img">
<?php  
 $url = $_SERVER['REQUEST_URI'];
 $url = explode('/', $url);

$img_del=str_img($url[2]);

  function str_img($img){
    ?>
  <div class="box_img_style">
  <img class="page_img_style" src="/photo/<?echo $_SESSION['login'] ?>/<?echo $img ?>"alt=""> 
 <form action="/phpcode/del.php" method="post">
<input class="ninja" type="text" name="del" value ="<?echo $img ?>" >
<? if ($_SESSION['name']) { ?>
  <input type="submit" class="del_but_str" value="Удалить">
  <?}?>
</form>
<?}
if ($url[2]===$img_del) {
  header('Location: /personal_account.php');
}
?>
</div>
</section>
</body>
</html>

