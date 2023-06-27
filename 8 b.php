<?php
$cars=array (
array(1,2,3),
array(4,5,6),
array(7,8,9)
);
echo "<h3>HARSHARAJ B - 4JK20IS019</h3>";
echo "Original Matrix";
for($i=0;$i<=2;$i++)
{
echo "<br>";
for ($j=0;$j<=2;$j++) 
printf("%4d", $cars[$i][$j]);
}
echo "<br><br>Transpose of the Matrix";
for ($i=0;$i<=2;$i++)
{
echo "<br>";
for ($j=0;$j<=2;$j++) printf("%4d", $cars [$j][$i]);
}
?>