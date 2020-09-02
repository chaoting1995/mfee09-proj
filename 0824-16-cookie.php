<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// 第二支，不設定，直接讀取，也讀的到
// 之前別支檔案有設定，發request的時候會帶之前的設定過去，cookie可以跨頁面
echo $_COOKIE['mycookie'];

?>
</body>
</html>


