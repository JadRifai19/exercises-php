<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $n = strlen((string)$num);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit ** $n;
        $temp = (int)($temp / 10);
    }

    if ($num == $sum) {
        return true;
    } else {
        return false;
    }
}

// Example usage

$num1 = 153;
if (isArmstrong($num1)) {
    echo $num1 . " is an Armstrong number.";
} else {
    echo $num1 . " is not an Armstrong number.";
}

$num2 = 357;
if (isArmstrong($num2)) {
    echo $num2 . " is an Armstrong number.";
} else {
    echo $num2 . " is not an Armstrong number.";
}

?>