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
<body>
<header>
<ul>

<li><a href="phpcode/exit.php">выход</a></li>
<li><a href="phpcode/cancell.php">На главную</a></li>
    <form class="down_fi" action="phpcode/down_f.php" enctype="multipart/form-data" method="post">
    <li> <input type="file" name="down_file" ></li>
    <li> <input type="submit" value="отправит"></li>
    </form>
    </ul>
</header>
<section class="img_sec">
<?php
if ($_SESSION['name_img']!='') {
 

foreach ($_SESSION['name_img'] as $key => $value_img) {
  echo '<div class="box">';
  echo '<img class="img_sec_user" src="photo/'. $_SESSION['login'] . '/' . $value_img . '"alt=""> ';

  
  echo '<form action="phpcode/del.php" method="post">';
  echo'<input class="ninja" type="text" name="del" value ="'. $value_img .'" >';
  if (isset($value_img)) {
    echo'<input type="submit" class="del_but" value="Удалить">';

}
echo '</form>' ;

echo '</div>';
}
}
else{
  header('Location: ../index.php');
}
  ?>

<!-- <div class="del"><a href="phpcode/exit.php"></a></div> -->
</section>
</body>
</html>

<!-- echo '<div class="del"><a href="phpcode/del.php">Удалить</a></div>';  -->