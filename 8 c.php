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
// Matrix multiplication
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $q; $j++) {
        $c[$i][$j] = 0;
        for ($k = 0; $k < $n; $k++) {
            $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
        }
    }
}

echo "Matrix 1:<br>";
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        printf("%6d", $a[$i][$j]);
    }
    echo "<br>";
}

echo "<br>Matrix 2:<br>";
for ($i = 0; $i < $p; $i++) {
    for ($j = 0; $j < $q; $j++) {
        printf("%6d", $b[$i][$j]);
    }
    echo "<br>";
}

echo "<br><br>Multiplication of the Matrix:<br>";
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $q; $j++) {
        printf("%6d", $c[$i][$j]);
    }
    echo "<br>";
}
?>
