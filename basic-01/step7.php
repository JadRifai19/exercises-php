<?php
$birth_year = 2020;
$current_year = date('Y');

$difference = $current_year - $birth_year;

if ($difference > 18) {
    echo "You can drive";
} else {
    echo "You are still a kid, go and play GTA";
}

?>