<?php
require __DIR__ . '/parts/__connect_db.php';

$stmt = $pdo->query("SELECT * FROM `address_book` LIMIT 5");
// $pdo，代表連線的變數
// 「query」拿資料
// 給SQL語法
// query(string)
// $pdo->query()，會回傳PDO Statement，尚不是結果
// 「stmt」代理人，當變數，接收結果

echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);
// $stmt->fetchAll()，告訴他我要讀取幾筆，fetchAll()，即拿到全部
// fetchAll()會回傳array
// json_encode()，轉成JSON
// JSON_UNESCAPED_UNICODE，中文不要跳脫
// 沒有用SQL選取資料，就fetchAll，會拖垮系統(例如有10萬筆資料時)

// 連線資料庫，透過PHP、MySQL取資料

// echo json_encode($stmt->fetchAll(PDO::FETCH_NUM), JSON_UNESCAPED_UNICODE);  // 索引式陣列
// echo json_encode($stmt->fetchAll(PDO::FETCH_BOTH), JSON_UNESCAPED_UNICODE); // 給兩種: 索引式 + 關聯式
// 會有索引，也有關聯，兩個都出現

