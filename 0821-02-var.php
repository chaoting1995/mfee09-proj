<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // 變數不用宣告
    $a =123;
    
    echo $a;
    echo '<br>';
    
    // 用empty()，判斷是否為空值 → 若是空值，會拿到true
    // 用三元運算子show判斷結果
    echo empty($b); ? 'empty':'no empty';
    echo '<br>';
    
    // 空字串，轉成布林值，true，輸出1
    echo !empty($b);

    // 如何判斷轉換成布林值是多少？
    $a?'111':'000';



    print MY_CONST;
?>

</body>
</html>