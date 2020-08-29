<?php
require __DIR__. '/parts/__connect_db.php';

// TODO: 檢查資料格式

$names = ['版', '本', '龍', '一'];

for($i=1; $i<100; $i++) {
    shuffle($names);
    $sql = sprintf("INSERT INTO `address_book`(
`name`, `email`, `mobile`,
 `birthday`, `address`, `created_at`
 ) VALUES ('%s', 'shin@test.com', '0918123456', '2000-01-01', '台北市', NOW())", implode('', $names));

    $stmt = $pdo->query($sql);
}

