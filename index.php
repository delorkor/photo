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
<body class="bod">
<header>
<ul>

<?php  
if (isset($_SESSION['name'])):
     ?>
<li><a href="phpcode/exit.php">выход</a></li>
<li><a href="personal_account.php">Личный кабинет</a></li>
<?php else: ?>
    <li><a href="registr.php">Регистрация</a></li>
<li><a href="includ.php">Автоизация</a></li>  



   <?php endif; ?>

    </ul>
</header>
</body>
</html>