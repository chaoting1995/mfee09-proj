<?php

$a = 10;

$f = function () use ($a) {
    // global $a;
    echo $a;  //直接用，用不了外面變數
}
// ？？？？？？

<?php

$a = 10;

$f = function () use ($a) {
    echo $a;
};

$f();

?>
