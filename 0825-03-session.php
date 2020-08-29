//建立在cookie上，會去設定cookie，故需放在html前面
<?php
session_start(); //啟用session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_SESSION['myvar'])) {
          //有設定過，值+1
        $_SESSION['myvar']++;
    } else {
        //沒設定過，值為1
        $_SESSION['myvar'] = 1;
    }

    echo $_SESSION['myvar'];
    ?>
</body>

</html>