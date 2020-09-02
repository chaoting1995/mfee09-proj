<div>
    <?php
    // php的時間
    // php官網>date
    // 一個字母代表一個格式

    // 設定時區有兩種方案

    // 方案一：用function設定，就限定這支檔案使用
    //「https://www.timeanddate.com/time/map/」查時區
    date_default_timezone_set('Asia/Taipei');
    //date_default_timezone_set('Asia/Tokyo');
    // 官網>date>範例四，最後一個，可以跟MySQL搭
    $now = date("Y-m-d H:i:s");
    echo "now: $now<br>";

    // 方案二：更改設定檔：
    // XAMPP>control penal>Apache的Config>點選PHP(php.ini)>[Date]date.timezone=Asia/Taipei，這裡做更改>重開Apache
    // $today = date("Y-m-d H:i:s");
    // echo $today;


    //  設定下個月(30天以後)
    $now = date("Y-m-d H:i:s");
    $after30 = date("Y-m-d", time() + 30 * 24 * 60 * 60);
    echo "now: $now<br>";
    echo "after30: $after30<br>";


    // 拿到字串怎麼辦?
    // strtotime()，會把字串轉換成timestap
    $date1 = date("Y-m-d H:i:s", strtotime('2020-07-21'));
    echo "now: $now<br>";
    echo "after30: $after30<br>";
    echo "date1: $date1<br>";


?>
</div>