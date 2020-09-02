<?php
// 設定cookie，要在所有html出現之前，因為cookie設定在http檔頭，資料都送出才改檔頭，會有問題
// 緊貼為前面，也不要有換行、空白字元，會被視為html
// response headers
// 設定在檔頭，告訴瀏覽器，我要設定cookie

setcookie('mycookie', 2)
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
    // 讀取時可用內建變數，為陣列
    // request headers
    // request的時候會把cookie送過去
    // 讀取的是用戶端request進來的cookie
    // 還沒傳回來，就讀取，會沒東西
    // 要回應了，設定才生效
    echo $_COOKIE['mycookie'];

    ?>
</body>

</html>