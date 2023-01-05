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
    <!-- <ul>
<li><a href="#">Регистрация</a></li>
<li><a href="#">Автоизация</a></li> -->
<!-- <li><a href="#"></a></li> -->
    <!-- </ul> -->
</header>

<section class="registr">
    <form action="phpcode/reg.php" method="post" class="form_reg">
        <label for="login">Логин</label>
        <input type="text" name="login">
 
        <label for="name">Имя</label>
        <input type="text" name="name">

        <label for="fname">Фамилия</label>
        <input type="text" name="fname">

        <label for="dater">Дата рождение</label>
        <input type="date" name="dater">
        
        <label for="pasword">Email</label>
        <input type="email" name="email">

        <label for="pasword">Пароль</label>
        <input type="password" name="pasword">

        
        <div class="subm">
            <input type="submit" class="button" value="Регистрация" >
            <input type="button" class="button" value="Выход " >

        </div>
    </form>
</section>
</body>
</html>