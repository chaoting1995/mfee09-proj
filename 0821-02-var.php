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
    // 規定用$開頭
    $a = 123;

    echo $a;
    echo '<br>';

    // 某些狀況下，不知道有沒有先設定變數，怎麼判斷？
    // 用empty()，判斷是否為空值 → 是空值，返回true
    // 用三元運算子show判斷結果，語法「A ? T : F ;」
    // 變數沒宣告過，認定是空值
    echo empty($b) ? 'empty' : 'not empty';
    echo '<br>';

    // empty()判斷完，預設輸出布林值：
    // true  → 1 
    // false → 空字串
    echo !empty($b);  //空字串，看不到，所以通常不讓他直接輸出

    // 如何判斷變數轉換成布林值是true或false？
    // 方法一：
    $a ? '111' : '000';
    // 方法二：
    !!$a;


    // 省略寫法：
    echo $a;
    echo '<br>';
    // 方法一：
    echo $a . '<br>'; //點符號（.）做字串串接

    // 方法二：
    echo "$a<br>"; 


    // 雙引號和單引號：匯出效果不同
    echo '$a<br>';  //顯示：$a  //直接匯出內容
    echo "$a<br>";  //顯示：123 //匯出變數所存內容

    // 跳脫表示法：雙引號和單引號，不太⼀樣
    // 雙引號()：(\n)、(\")、(\')、(\\)、(\$)
    // 單引號()：只吃表達單引號(\')、表達倒斜線(\\)
   

    // 雙引號中區分變數與字串
    $a = "Victor";
    echo "Hello, $a123 <br/>";  //Undefined variable
    echo "Hello, {$a}123 <br/>";  //正常
    echo "Hello, ${a}123 <br/>";  //正常
    echo $a . '<br/>';
    

    // 三元運算子變形用法
    // php7以後語法
    $c = "bill";
    // 如果變數c有設定，用原設定;沒設定，用??後面
    echo $c ?? 'peter';

    ?>

</body>

</html>
<!-- 三種警告層級：Notice、Warning、Error(會停下) -->