<?php
// 版本一：
$a = 10;
function f() { 
    global $a; //要宣告，才能引用外部變數
    echo $a;  //無法直接用外面變數
}
f();

?>

<?php

// 版本二：
function f($a) {
    echo $a;
}
f($a);
// 全域參數就是區域變數(？？？)
