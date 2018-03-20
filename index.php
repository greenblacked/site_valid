<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1ssiteonphp</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="form">
<h2>Введите свои данные </h2>
<form  action="action.php" method="post">
    <p>Ваше имя<br>
        <input name="name" type="name" pattern="/^([A-Z]{1})+\w+/">
    </p>
    <p>Ваше e-mail<br>
        <input name="email" type="email" pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/">
    </p>
    <p>Пароль<br>
        <input  name="pass" type="password" pattern="/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/">
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