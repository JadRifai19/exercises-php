<?php

function greaterFn($num) {
  if ($num > 30) {
    return "$num is greater than 30";
  } else if ($num > 20) {
    return "$num is greater than 20";
  } else if ($num > 10) {
    return "$num is greater than 10";
  } else {
    return "$num is less than or equal to 10";
  }
}

echo greaterFn(40); // 40 is greater than 30
echo "\n";
echo greaterFn(21); // 21 is greater than 20
echo "\n";
echo greaterFn(12); // 12 is greater than 10
echo "\n";
echo greaterFn(8);  // 8 is less than 10
echo "\n";

?>