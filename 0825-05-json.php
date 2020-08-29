<?php

// 此為模擬，實際上要做在資料表裡面
$accounts = [
    // 用戶1的帳密
    'shin' => [
        'pw' => '123456',
        'nickname' => '小新'
    ],
    // 用戶2的帳密
    'der' => [
        'pw' => '123456',
        'nickname' => '小新'
    ]

];
echo json_encode($accounts, JSON_UNESCAPED_UNICODE);

?>

<!-- php array 可以轉換成json -->