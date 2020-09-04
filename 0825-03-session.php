
<!-- 登錄靠session，session靠cookie -->
<!-- 1.用戶首次拜訪，server給用戶Session ID，以分辨用戶 -->
<!-- Session ID 存於cookie，session資料存於server -->
<!-- 2.Session有存活時間，存活時間預設20~30分鐘(cookie的過期) -->
<!-- 3.操作Session的函式 -->
<!-- session_start(); //啟用session  -->
<!-- session_destroy() //清除session物件 -->
<!-- unset() //清除陣列內部份成員 -->
<!-- $_SESSION  //讀取和設定session，為array -->
<!-- session_name  //讀取或設定session ID名稱，預設為PHPSESSID -->
<?php
// 內建setcookie()
// 建立在cookie上，會去設定cookie，故需放在html前面(最前面) 
session_start(); //啟用session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 瀏覽次數
    // $_SESSION[]裡面，array的key，自訂
    if (isset($_SESSION['myvar'])) {
          //有設定過，值+1
        $_SESSION['myvar'] ++;
    } else {
        //沒設定過，值為1
        $_SESSION['myvar'] = 1;
    }

    echo $_SESSION['myvar'];
    // 不同分頁，也視為同用戶；開無痕，會視為不同用戶
    ?>
</body>

</html>