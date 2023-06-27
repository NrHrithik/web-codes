<?php
$a = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$b = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$c = array();
$m = 3;
$n = 3;
$p = 3;
$q = 3;
echo "<h3>HARSHARAJ B - 4JK20IS019</h3>";
if ($m == $p && $n == $q) {
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
        }
    }

    echo "<br> Matrix 1";
    for ($i = 0; $i < $m; $i++) {
        echo "<br>";
        for ($j = 0; $j < $n; $j++) {
            printf("%6d", $a[$i][$j]);
        }
    }

    echo "<br><br> Matrix 2";
    for ($i = 0; $i < $p; $i++) {
        echo "<br>";
        for ($j = 0; $j < $q; $j++) {
            printf("%6d", $b[$i][$j]);
        }
    }

    echo "<br><br>Addition of the Matrix<br>";
    for ($i = 0; $i < $m; $i++) {
        echo "<br>";
        for ($j = 0; $j < $q; $j++) {
            printf("%6d", $c[$i][$j]);
        }
    }
} else {
    echo "Matrix Addition is not possible";
}
?>
