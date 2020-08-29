<?php

//$a = intval($_GET['a']) ?? 0;
//$b = intval($_GET['b']) ?? 0;

$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;

// 回傳JSON格式的資料

// 1.用「.」連接字串
echo '{"answer":'. ($a+$b). '}';
// BUT看起來會很亂

// 2.用「%s」連接字串，f代表格式，s代表字串
// 參數1：字串模板；參數2：放進洞裡的變數
printf('{"answer":%s}', $a+$b);