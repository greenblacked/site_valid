<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h2>Данные</h2>
<a href="admin.php" onClick="goclear()" id="button">Clear</a></br>
<script type="text/javascript">
    var btn = document.getElementById('button');
    function goclear() {
        alert("Очистка .......");
        document.location.href = "admin_clear.php";
    };
</script>
<!--<form action="admin_clear.php">-->
<!--    <input type="button" value="Очистить">-->
<!--</form>-->
<?php
//header('Content-type: text/plain;');
//file('message.txt');
echo nl2br(file_get_contents('message.txt'));
?>
</body>
</html>