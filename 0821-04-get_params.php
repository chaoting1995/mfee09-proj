<?php
// 如何取得用戶端傳來的資料?
// 內建變數，取得參數a，解析用戶端傳來的資料
echo $_GET['a'];

// 沒資料時，$_GET['a'];會讓網頁跳「Notice: Undefined...」
// 如何不讓「Notice」出現? 

// 1.傳統寫法：isset()判斷是否有設定；三元運算子設定：如果有就用這個值，沒有設定就填0
// → isset()、empty()都可以
$a = isset($_GET['a']) ? $_GET['a'] : 0;
echo $a;

// 2.php7新寫法
$a = $_GET['a'] ?? 0;
echo $a;

//題外話
// JS怎麼拿到網址? → location.href
// JS怎麼取得字串? → location.search 