<?php
$page_title = '資料列表';
$page_name = 'data-list';
require __DIR__ . '/parts/__connect_db.php';

$perPage = 5; // 每頁有幾筆資料
//寫死，不給用戶決定

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
// 用戶要看第幾頁，如何設定？
// 用($_GET['page']傳進來
// 有設定就用$_GET['page']+轉成整數intval()
// 沒設定就用第1頁
// 用戶給的

$t_sql = "SELECT COUNT(1) FROM `address_book`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
// 索引式陣列裡面的第一筆資料
// 若設定「PDO::FETCH_NUM」，代表php讀取出，為索引式陣列(無欄位名稱)
// die('~~~'); //exit; // 結束程式
$totalPages = ceil($totalRows / $perPage);
// 無條件進位，ceil(總筆數/每頁筆數)

$rows = []; 
// 「$rows = $pdo->query($sql)->fetchAll()」，是個array
    // 取資料
if ($totalRows > 0) {
    // 如果總筆數是0，不要找(會出錯)
    // 如果總筆數大於0，才找資料
    if ($page < 1) {
        // 如果頁數<1，設值為1
        //如果用戶亂輸入，把頁碼拉回正常範圍：
        // if($page < 1) $page=1;
        // if($page > $totalPages) $page=$totalPages;
        // 換個寫法
        header('Location: data-list.php');
        // 不要決定他看哪頁，寫錯了就讓他轉向
        exit;
        // 你不讓它結束他會執行，多送東西浪費頻寬
    }
    if ($page > $totalPages) {
        header('Location: data-list.php?page=' . $totalPages);
        exit;
    };

        $sql = sprintf("SELECT * FROM `address_book` ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
        // 順序，流水號較大的在前面

        $stmt = $pdo->query($sql);
        $rows = $stmt->fetchAll();
    //「%s, %s"」，從第幾筆，取幾筆
    
 
}
# 正規表示式
// https://developer.mozilla.org/zh-TW/docs/Web/JavaScript/Guide/Regular_Expressions

// 拿資料(controllor)，處理邏輯的程式，全部寫在html的前面
// 下面html只做資料呈現(veiw)(MVC設計模式)
?>
<?php require __DIR__ . '/parts/__html_head.php'; ?>
<?php include __DIR__ . '/parts/__navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <!-- 引用bootstrap> components> pagenation 分頁按鈕-->
            <!-- Bootstrap> components> utilities> flex，靠左或靠右 -->

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                    <!-- 「$page == 1 ? 'disabled' : ''」，在第一頁時，按鈕功能失效  -->
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                        <!-- 「$page - 1」去上頁 -->
                            <i class="fas fa-arrow-circle-left"></i>
                            <!-- 左箭頭 -->
                        </a>
                    </li>
                    <?php for ($i = $page - 3; $i <= $page + 3; $i++) :
                    // 改用迴圈
                    // 本來是for ($i = $page; $i <=$totalPages; $i++)
                    // 「$page - 3」、「$page + 3」，可調整往前、往後展示出幾頁
                        if ($i < 1) continue;
                        // 如過$i值<1，跳過
                        if ($i > $totalPages) break;
                        // 如過$i值>$totalPages，跳過或離開都可
                    ?>

                        <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                        <!-- class="active"，反白效果-->
                        <!-- 問題：所有頁碼都會反白 -->
                        <!-- 解決：三原運算子 -->
                        <!-- 頁數值會進入$page -->
                        <!-- 「$i == $page ? 'active' : ''」 -->
                        <!-- $i == $page，秀'active' -->
                        <!-- $i !== $page，不秀'active' -->
                        
                        <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>

                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            <!-- $i值秀於此 -->
                            <!-- 連結：問號(?)，代表同頁面給不同參數 -->
                            
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                        <!-- 「$page + 1」去上頁 -->
                        <!-- 問題：跳到超過頁數範圍，會重新導向，要讓其功能失效 -->
                        <!-- 解決：「$page == $totalPages ? 'disabled' : ''」，在第一頁時，按鈕功能失效  -->
                            <i class="fas fa-arrow-circle-right"></i>
                            <!-- 右箭頭 -->
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <!-- bootstrap，套表格樣式 -->
    <table class="table table-striped">
        <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
        <!-- 拷貝欄位名稱，放這裡取用 -->
        <thead>
            <tr>
                <th scope="col"><i class="fas fa-trash-alt"></i></th>
                <th scope="col"><i class="fas fa-user-times"></i></th>
                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">電郵</th>
                <th scope="col">手機</th>
                <th scope="col">生日</th>
                <th scope="col">地址</th>
                <!-- 建立時間 -->
                <th scope="col"><i class="fas fa-edit"></i></th>
            </tr>
        </thead>
        <tbody>
            <!-- php foreach在這裡開始 -->
            <!-- 用foreach輸出陣列$rows 到<td> -->
            <!-- $rows這一個個項目，會丟到這裡$r -->
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><a href="data-delete.php?sid=<?= $r['sid'] ?>" onclick="ifDel(event)" data-sid="<?= $r['sid'] ?>">
                            <i class="fas fa-trash-alt"></i>
                            <!-- 放一個垃圾桶icon -->
                        </a></td>
                    <td><a href="javascript:delete_it(<?= $r['sid'] ?>)">
                            <i class="fas fa-user-times"></i>
                        </a></td>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <!-- 為什麼是$r[]，不是$rows[]?????????????????????????????????????????? -->
                    <!--<td><?= strip_tags($r['address']) ?></td>-->
                    <td><?= htmlentities($r['address']) ?></td>
                    <td><a href="#"><i class="fas fa-edit"></i></a></td>
                </tr>
                <!-- php foreach結束在這裡 -->
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include __DIR__ . '/parts/__scripts.php'; ?>
<script>
    function ifDel(event) {
        const a = event.currentTarget;
        console.log(event.target, event.currentTarget);
        const sid = a.getAttribute('data-sid');
        if (!confirm(`是否要刪除編號為 ${sid} 的資料?`)) {
            event.preventDefault(); // 取消連往 href 的設定
        }
    }

    function delete_it(sid) {
        if (confirm(`是否要刪除編號為 ${sid} 的資料???`)) {
            location.href = 'data-delete.php?sid=' + sid;
        }
    }
</script>
<?php include __DIR__ . '/parts/__html_foot.php'; ?>