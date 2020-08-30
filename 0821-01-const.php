<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // 常數
    // 內建常數表示法
    // 定義用字串，使用時非字串
    // 常數是全域，變數不是
    // define(自訂常數,內建常數表示法)
    define('MY_CONST',123);

    // 自訂常數
    echo MY_CONST;
    
    // 兩種輸出方式:
    // 方式一：echo
    echo MY_CONST;
// 方式二：print(少用，因為多打一字)
    print MY_CONST;
?>

</body>
</html>