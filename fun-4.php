<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/22
 * Time: 23:19
 */
function main($a, $b) {
    $c = min($a, $b);
    for ($p = 1; $p <= $a; $p++) {
        if ($a % $p == 0 && $b % $p == 0)
            $q = $p;
    }
    echo "最大公约数是：" . $q . "<br />";
    echo "最小公倍数是：" . $a * $b / $q;
}
main(24, 36);
?>