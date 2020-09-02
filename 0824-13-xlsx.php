<!-- 拷貝官網範例 -->
<?php
// 引用php檔
// 後面引用到的任何檔案，會自己去找那隻檔案，自己放進來
require './vendor/autoload.php';

// 套件路徑//按ctrl鍵，可以找到路徑
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// 用new建立
// xlsx檔下有好幾個分頁sheet
// ActiveSheet，即是，你要用哪個
// setCellValue(哪格，填什麼)
// ->setCellValue可以練狀串接
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !')
    ->setCellValue('E8', '您好');

// 包裝成可以寫成檔案的
// 存檔
$writer = new Xlsx($spreadsheet);
$writer->save('hello.xlsx');


// 透過Apache執行，頁面會是空白，檔案會存進專案資料夾
