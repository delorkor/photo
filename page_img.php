<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  
    <title>Document</title>
</head>
<body class="use_img">
 
 <section class="box_img">
<?php  
 $url = $_SERVER['REQUEST_URI'];
 $url = explode('/', $url);

$img_del=str_img($url[2]);

  function str_img($img){
  echo '<div class="box_img_style">';
  echo '<img class="page_img_style" src="/photo/'. $_SESSION['login'] . '/' . $img . '"alt=""> ';
  echo '<form action="/phpcode/del.php" method="post">';
  echo'<input class="ninja" type="text" name="del" value ="'. $img .'" >';
  if (isset($img)) {
    echo'<input type="submit" class="del_but" value="Удалить">';
}
echo '</form>' ;
}


if ($url[2]===$img_del) {
  header('Location: /personal_account.php');
}
?>
</div>
</section>
</body>
</html>









<!-- 
echo '<pre>';
echo $_SESSION['login'];
// echo print_r( $_SESSION['login']);
// echo print_r($url);
echo '</pre>';

    -->