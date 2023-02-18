<?php
$name = "Jad Rifai";
$position = "Web Developer";
$github_url = "https://github.com/JadRifai19";

// Method 1: Using double quotation " and the .
echo "Hello, I'm $name, I'm a $position. Please check my github link $github_url. <br>";

// Method 2: Using double quotation " and without using the .
echo "Hello, I'm ".$name.", I'm a ".$position.". Please check my github link ".$github_url.". <br>";

// Method 3: Without using the double quotation ".
echo 'Hello, I\'m '.$name.', I\'m a '.$position.'. Please check my github link '.$github_url.'. <br>';
?>