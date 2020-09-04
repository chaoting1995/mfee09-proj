<?php
// 連到哪台主機？
// 連到哪個資料庫？
$db_host = "localhost";
// 想連別人資料庫，要放別人IP
$db_name = "mytest";
$db_user = "chaoting";
$db_pass = "chaoting";
// 帳密名稱不同，會弄不出來XDD
$dsn = "mysql:host={$db_host};dbname={$db_name}";
// {}內不要有空格，否則會設定錯誤
// pdo可以切換不同資料庫

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
];
// 先定義一個陣列
// key用：PDO本身定義常數(::)
// ATTR是屬性意思
// 「PDO::ERRMODE =>」錯誤時，要以什麼方式呈現
//「PDO::ERRMODE_EXCEPTION,」出錯時無訊息
// 「PDO::ATTR_DEFAULT_FETCH_MODE」取資料形式(關聯、索引式陣列)
// 「PDO::FETCH_ASSOC,」，讀出為關聯式陣列
// 「PDO::MYSQL_ATTR_INIT_COMMAND =>」，一連線，執行什麼SQL

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
// pdo、bd、connection、connection皆可
// 萬一出現 no databases selected 的錯誤，補這個指令：
# $pdo->query("use mytest;"); // 

define('WEB_ROOT', '/mfee09-proj');

if(!isset($_SESSION)){
    session_start();
}