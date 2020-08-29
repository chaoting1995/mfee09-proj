<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <pre>
        <?php
        $ar = [];

        for ($i = 1; $i <= 49; $i++) {
            $ar[] = $i;
        }
        // 陣列以亂數排序
        shuffle($ar);
        print_r($ar);

        ?>
        </pre>
    </div>

</body>

</html>