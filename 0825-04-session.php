<?php
session_start(); // 啟用 session
//直接查看，沒有操作(做+1動作)
echo $_SESSION['myvar'];
// 再怎麼看都是9，只有查看，不會動

// 跨頁面的共享資源：cookie、session、server端的檔案、資料庫

// php一般變數無法跨頁面存取
