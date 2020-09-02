<?php

$a = 10;
// 匿名函式才能用use，有use可用外面的變數
$f = function () use ($a) {
    echo $a;
};

$f();
