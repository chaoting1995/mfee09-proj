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

        $ar3['data'][] = 12; //array push

        $ar4 = &$ar3; //拷貝參照

        $ar3['data'][2] = 100;

        foreach ($ar4 as $k => $v) {
            if (is_array($v)) {
                printf("%s => %s<br>", $k, implode(',', $v));
            } else {
                printf("%s => %s<br>", $k, $v);
            }
        }

        ?>
    </div>

</body>

</html>