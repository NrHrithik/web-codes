<?php
$str = "Mississippi Alabama Texas Massachusetts Kansas";
$words = preg_split("/\s+/", $str);
$statesList = array();
echo "<h3>HARSHARAJ B - 4JK20IS019</h3>";
foreach ($words as $word) {
    if (preg_match("/xas$/i", $word))
        $statesList[0] = $word;
    if (preg_match("/^k[A-Z]*s$/i", $word))
        $statesList[1] = $word;
    if (preg_match("/^M[A-Z]*s$/i", $word))
        $statesList[2] = $word;
    if (preg_match("/^[A-Z]*a$/i", $word))
        $statesList[3] = $word;
}

for ($i = 0; $i <= 3; $i++) {
    echo "<br>states List[$i]: " . $statesList[$i];
}
?>
