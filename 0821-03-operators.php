<?php
$a = 13;
$b = 27;

// php邏輯運算子，一律拿到布林值
// 判斷拿到的值是什麼類型：var_dump()
echo var_dump($a && $b) . '<br>';    //bool(true)
echo var_dump($a and $b) . '<br>';   //bool(true)


$c = $a && $b; 
echo var_dump($c) . '<br>';   //bool(true)
$c = $a and $b;
echo var_dump($c) . '<br>';   //int(13)，不一樣了
//php優先運算權，指定運算子>文字的邏輯運算子(and)//還是不太懂
