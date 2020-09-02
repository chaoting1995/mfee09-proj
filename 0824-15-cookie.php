<?php
setcookie('mycookie', 2)
?>

<!-- 設定cookie，要在html出現之前，因為cookie設定在檔頭，資料都送出    -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo $_COOKIE['mycookie'];

    ?>
</body>

</html>