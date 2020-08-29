<?php
    $page_title = '首頁';
?>
<?php require __DIR__. '/parts/__html_head.php'; ?>
<?php include __DIR__. '/parts/__navbar.php'; ?>
<div class="container">
    <h2>Hello~</h2>

</div>
<?php include __DIR__. '/parts/__scripts.php'; ?>
<?php include __DIR__. '/parts/__html_foot.php'; ?>

<!-- 好幾個頁面，吃一個HTML

錯誤等級不同
→ include：有錯誤，照樣執行
→ require：我一定要有這個東西，沒有會出錯
