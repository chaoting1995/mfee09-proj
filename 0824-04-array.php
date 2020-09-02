<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 包<pre>，可以忠實呈現程式碼縮排 -->
    <pre>
        <!-- 結束逗號可留 -->
        <?php
        $ar1 = array(2, 3, 4, 5);
        $ar2 = [2, 3, 4, 5];

        $ar3 = [
            'name' => 'David',
            'age' => 23,
            'data' => [5, 6, 7],
        ];

        // 兩種除錯工具

        // r代表array
        // 會直接輸出到畫面上，像console.log，用於除錯
        print_r($ar2);
        print_r($ar3);

        
        var_dump($ar2);
        var_dump($ar3);

        ?>
    </pre>

</body>

</html>