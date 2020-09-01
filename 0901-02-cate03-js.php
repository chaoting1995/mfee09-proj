<?php
require __DIR__ . '/parts/__connect_db.php';

$rows = $pdo->query("SELECT * FROM `categories`")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        const rows = <?= json_encode($row,);
    </script>
</body>
</html>