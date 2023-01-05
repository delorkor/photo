<?php 
session_start();
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

<section class="inclid">
    <form action="phpcode/entrance.php" method="post" class="form_reg">
        <label for="login">Логин</label>
        <input type="text" name="login">

        <label for="pasword">Пароль</label>
        <input type="password" name="pasword">
        <div class="subm">
            <input type="submit" class="button" value="Вход" >
            <input type="button" class="button"  value="Выход" >

        </div>
        <div class="error_includ">
          <?php 
          if (($_SESSION['error'])) {
          echo $_SESSION['error'];
          
        //   echo '<pre>';
        //   echo  print_r($_SESSION);
        //   echo '</pre>';
      }
      unset($_SESSION['error']);
          ?>
        </div>
    </form>
</section>
</body>
</html>