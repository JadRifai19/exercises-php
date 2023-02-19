<?php
function isPowerOfTwo($n)
{
    if ($n == 0) {
        echo $num . "it is a power of 2";
    }

    while ($n != 1) {
        if ($n % 2 != 0) {
            echo $num . "it is not a power of 2";
        }
        $n = $n / 2;
    }

    return true;
}