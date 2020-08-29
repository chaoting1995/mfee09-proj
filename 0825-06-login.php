<?php
session_start();
// 依據檔頭設定做反應
// header('Content-Type: text/plain') //設定純文字

// 設定哪些帳密可以登錄
$accounts = [
    'shin' => [
        'pw' => '123456',
        'nickname' => '小新'
    ],

    'der' => [
        'pw' => '654321',
        'nickname' => '小明'
    ],

];

//用戶輸入帳密，如何判斷正確與否(是否在資料表中)？
// 表單送出後(送給自己)，當POST資料進來 $_POST['account']
// 判斷：有沒有送出表單的account欄位資料
//先判斷帳號 
//輸入的帳號若有對應到陣列，代表帳號正確
//把用戶輸入的帳號[$_POST['account']，當key丟進陣列$accounts[]
// 帳號對應到array，就不會是空的(聽不懂)
if (isset($_POST['account'])) {
    //輸入的帳號若有對應到陣列，代表帳號正確
    //把用戶輸入的帳號[$_POST['account']，當key丟進陣列$accounts[]
    // 帳號對應到array，就不會是空的(聽不懂)
    if (!empty($accounts[$_POST['account']])) {
        //不是空的，設定給他
        // 帳號對，會來到這裡
        $a = $account[$_POST['account']];  //$a代表'shin'=>[]、'der'=>[]其中一個陣列
        //輸入和對應陣列裡的密碼相同
        if ($_POST['password'] == $a['pw']) {
            // 密碼對，會來到這裡 //有設定代表有登錄
            $_SESSION['user'] = [
                'account' => $_POST['account'],
                'nickname' => $a['nickname']
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css ">
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['user'])) : ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-info" role="alert">
                        <?= $_SESSION['user']['nickname'] ?> 你好<br>
                        <a herh="./0825-07-logout.php">登出</a>

                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="row">
                <div class="col-lg-6">
                    <form method="post">
                        <div class="form-group">
                            <label for="account">Account </label>
                            <input type="text" class="form-control" id="account" name="account">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
    </div>
<?php endif; ?>

<script src="./lib/jquery-3.5.1.min.js "></script>
<script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>