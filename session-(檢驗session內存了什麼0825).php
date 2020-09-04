<?php
session_start();
// 用這支檔案查看session資料

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
// 用json格式echo json_encode()
// 放入整個$_SESSION

// 用Apache打開檔案，查看之前存了哪些session資料