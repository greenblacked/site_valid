<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1ssiteonphp</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h2>Данные</h2>
<?php
//header('Content-type: text/plain;');
//file('message.txt'); 
echo nl2br(file_get_contents('message.txt'));
?>
</body>
</html>