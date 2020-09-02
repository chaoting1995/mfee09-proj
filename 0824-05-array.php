<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $ar3 = [
            'name' => 'David',
            'age' => 23,
            'data' => [5, 6, 7],
        ];

        $ar4 = $ar3;  //拷貝值，不是拷貝參照(不同於JS)

        // 新增array成員
        $ar3['data'][2] = 100;

        print_r($ar3);
        print_r($ar4);

        ?>
    </div>

</body>

</html>