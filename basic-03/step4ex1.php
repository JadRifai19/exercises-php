<?php
function sumOfDigits($num) {
  $sum = 0;
  $numLength = strlen($num);

  for($i = 0; $i < $numLength; $i++) {
    $sum += $num[$i];
  }

  return $sum;
}

// Example usage
echo sumOfDigits("12345"); // Outputs: 15
echo sumOfDigits("9999"); // Outputs: 36
?>