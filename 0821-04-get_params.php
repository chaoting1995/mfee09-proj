<?php
// 如何從php取得用戶端傳來的資料?
// 取得參數a，解析用戶端傳來的資料
// 內建變數
//例如：「http://localhost/mfee09-proj/0821-04-get_params.php?a=100」
echo $_GET['a'];
//那a從何來？應該是客戶端表單資料


// 沒資料時，網頁會跳「Notice: Undefined...」，如何不讓「Notice」出現? 
// 1.傳統寫法：isset()判斷是否有設定；三元運算子設定：如果有就用這個值，沒有設定就填0
// → isset()、empty()都可以 //empty()，有設定，是空值，還是會得到true
// isset()
$a = isset($_GET['a']) ? $_GET['a'] : 0;
echo $a;
// 有設得值;無設得0

// 2.php7新寫法
$a = $_GET['a'] ?? 0;
echo $a;

//題外話
// JS怎麼拿到網址? → location.href
// JS怎麼取得字串? → location.search 