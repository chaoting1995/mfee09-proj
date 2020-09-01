<?php
require __DIR__. '/parts/__connect_db.php';

$rows = $pdo->query("SELECT * FROM `categories`")->fetchAll();

$cates = [];

foreach($rows as $k=>$v){
    if($v['parent_sid']=='0'){
        $cates[] = $v;
    }
}



echo json_encode($cates, JSON_UNESCAPED_UNICODE);

