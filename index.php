<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="form">
<h2 class="h2"><a href="index.php">Введите свои данные</a></h2>
<form id="form" action="action.php" method="post">
    <p>Ваше имя<br>
        <input name="name" type="name" >
    </p>
    <p>Ваше e-mail<br>
        <input name="email" type="email" pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/*.">
    </p>
    <p>Пароль<br>
        <input id="pass" name="pass" type="text" >
    </p>
    <p>
        <label>
            <input type="submit"  name="submit" id="submit" value="Отправить">
        </label>
    </p>
</form>
</div>

</body>
</html>