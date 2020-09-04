<?php

session_start();

unset($_SESSION['user']);//unset()，清除陣列內部份成員

header('Location: 0825-06-login.php'); 
// 只回應檔頭，瀏覽器收到server端給的檔頭是轉向，會讓他轉向(redirect)到別的網址(http是302)
// 第一個字母大寫
// 屬性名稱「：」後面空一格
// 瀏覽器收到http的response後，會依據檔頭設定做反應
// 瀏覽器會再發一個request到這邊：0825-06-login.php
// 本頁面沒有要出現，直接轉到別的頁面(按了登出，來這裡，直接回去login檔)

// JS如何做轉向(redirect)？
// location.href='http://tw.yahoo.com'
