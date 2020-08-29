<div>
    <?php
    // 設定時區有兩種方案

    // 方案一：用function設定，就限定這支檔案使用
    // date_default_timezone_set('Asia/Taipei');
    // $today = date("Y-m-d H:i:s");
    // echo $today;

    // 方案二：更改設定檔：
    // XAMPP>control penal>Apache的Config>點選PHP(php.ini)>[Date]date.timezone=Asia/Taipei
    // $today = date("Y-m-d H:i:s");
    // echo $today;

    //  設定下個月(30天以後)
    // $now = date("Y-m-d H:i:s");
    // $after30 = date("Y-m-d", time() + 30 * 24 * 60 * 60);
    // echo "now: $now<br>";
    // echo "after30: $after30<br>";


    // $now = date("Y-m-d H:i:s");


    // echo $today;

    // echo "now: $now<br>";


    ?>
</div>
<!-- //？？？？？？？？？？？？？？？？？？？？？？？？？？？？？？？？ -->