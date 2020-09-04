<?php
// 模擬設定帳號
// 登入帳密，本應做在資料表，此處用array模擬

$accounts = [
    // 用戶1的帳密
    'shin' => [
        'pw' => '123456',
        'nickname' => '小新'
    ],
    // 用戶2的帳密
    'der' => [
        'pw' => '67890',
        'nickname' => '小明'
    ],

];
// 關聯式陣列，輸出時就會是JSON的object
// php array 可以轉換成json：json_encode(轉換誰)
// JSON_UNESCAPED_UNICODE(即不要跳脫中文字)，內建常數、外掛模組
echo json_encode($accounts, JSON_UNESCAPED_UNICODE);

?>