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

        $ar3['data'][] = 12; //即array push，'data' => [5, 6, 12]

        $ar4 = &$ar3; //「= &」拷貝參照，不拷貝值

        $ar3['data'][2] = 100; //'data' => [5, 6, 100, 12]

        // 「$v」自訂變數
        // $ar3裡面又有陣列，printf()會自動幫你變成字串，不能塞進%s
        //寫法一： 
        // foreach ($ar3 as $v) {

        //寫法二：
        // (1).只看key
        // foreach ($ar4 as $k) {
            // printf("%s => %s<br>", $k);}
        // (2).key、value一起拿
        // foreach ($ar4 as $k => $v) {
        
        // 問題：陣列中的陣列，如何塞進printf()的%s？
        // 先用is_array()判斷是不是array
        // 再用implode(',', $v)把陣列的值串起來，變成字串
        foreach ($ar4 as $k => $v) {
            if (is_array($v)) {
                printf("%s => %s<br>", $k, implode(',', $v));
            } else {
                printf("%s => %s<br>", $k, $v);
            }
        }
        // 在php處理陣列，不用for迴圈，用foreach
        ?>
    </div>

</body>

</html>