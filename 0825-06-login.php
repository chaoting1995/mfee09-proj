<?php
session_start();
// 1.依據檔頭設定做反應
// header('Content-Type: text/plain') 
//告訴瀏覽器，我的文件是什麼類型
//設定純文字

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

//用戶輸入帳密，如何判斷帳密正確與否(是否在資料表中)？
// 表單送出後(送給自己)，當POST資料進來 $_POST['account']
if (isset($_POST['account'])) {
    //1.接值
        // 用$_POST[]接用戶輸入的值
        //$_POST[]裡面放表單的name，會傳入用戶輸入的value
    //2.判斷是否有發送表單資料過來(判斷有無值)
        // 用戶有輸入值，isset()回傳true，滿足if的條件式，才執行後面動作
        //例如用戶輸入'shin'
    if (!empty($accounts[$_POST['account']])) {
     //3.判斷帳號是否正確(即判斷陣列$accounts中是否有此key[$_POST['account']]
    //  並用!empty()將結果轉為布林值
        //(1).將用戶輸入值[$_POST['account']]，當成「key」丟進陣列$accounts[]
        //(2)-1.能在陣列中讀取到對應的值，即非空，!empty()會回傳true，執行條件述句的動作，例如用戶輸入'shin'
        //(2)-2.若帳號錯誤，即讀不到陣列中對應的值，即視為空值，不滿足if的條件
        $a = $accounts[$_POST['account']];
        //4.將shin讀取到的值(['pw' => '123456','nickname' => '小新'])存入$a
        // 以利比對密碼
        if ($_POST['password'] == $a['pw']) {
        // 5.判斷密碼是否正確(即判斷用戶輸入的值$_POST[]，是否等於$a['pw'])
            // (1).關係運算子：輸入值是否等於對應陣列裡的密碼
            // (2).相等，才回傳true，進下一步

            $_SESSION['user'] = [
                // $_SESSION[]，設定session，通常設定為array
                // 'user'為自訂陣列名
                'account' => $_POST['account'],  //shin
                'nickname' => $a['nickname']  //小新
                // 密碼對，才會來到這裡 
                //有設定代表有登錄
                // $_SESSION的意義是什麼？
            ];
        }
    }
}
// 方法一：可以用F12>network>檔案>headers檢查帳密是否正確
// 方法二：各站設echo，檢查哪裡出錯
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
        <!-- 這裡 -->
        <?php if (isset($_SESSION['user'])) : ?>
            <!-- 有登入時，秀這邊的訊息 -->
            <!-- 如何判斷是否登入？ -->
            <!-- 用isset()判斷$_SESSION[]是否有設定 -->
            <!-- 若帳密正確，會設定一個session，為array -->
            <div class="row">
                <div class="col">
                    <div class="alert alert-info" role="alert">
                        <!-- 這裡 -->
                        <?= $_SESSION['user']['nickname'] ?> 你好<br> 
                        <!-- 讀取 預先設定的$_SESSION[]內的資料 -->
                        <!--小新(沒寫死，可引入對應暱稱)你好-->
                        <a href="./0825-07-logout.php">登出</a>
                    </div>
                </div>
            </div>


        <?php else : ?>
            <!-- 若帳密為空值或不正確，停留在此表單 -->
            <!-- 登入後，不秀此部分表單 -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- 表單送出，沒設定action，即送給自己 -->
                    <form method="post">
                        <!-- 帳號 -->
                        <div class="form-group">
                            <label for="account">Account </label>
                            <input type="text" class="form-control" id="account" name="account">
                        </div>
                        <!-- 密碼 -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <!-- 提交 -->
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