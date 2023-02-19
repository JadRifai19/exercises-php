<?php
$var1 = 32;
$var2 = 45;

echo "Before swapping:<br>";
echo "var1 = $var1<br>";
echo "var2 = $var2<br>";


$swap = $var1;
$var1 = $var2;
$var2 = $swap;

echo "After swapping:<br>";
echo "var1 = $var1<br>";
echo "var2 = $var2<br>";
?>