
<?php require __DIR__ . '/parts/__html_head.php'; ?>
<?php include __DIR__ . '/parts/__navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=">
                            <i class="fas fa-arrow-circle-left"></i>
                        </a>
                    </li>
                 
                        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>


    <table class="table table-striped">
        <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">電郵</th>
                <th scope="col">手機</th>
                <th scope="col">生日</th>
                <th scope="col">地址</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<?php include __DIR__ . '/parts/__scripts.php'; ?>
<script>
    const tableRowTpl = (obj) => {
        returntr `
        <tr>
        <td>${obj.sid}</td>
        <td>${obj.name}</td>
        <td>${obj.}</td>
        <td>${obj.}</td>
        <td>${obj.}</td>
        <td>${obj.}</td>
        </tr>
    }
    fetch()
</script>
<?php include __DIR__ . '/parts/__html_foot.php'; ?>