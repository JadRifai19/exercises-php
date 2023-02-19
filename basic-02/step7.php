<?php
$input_string = "Python is a great language. I learned Python in school, but now I use PHP for work.";

$output_string = str_replace("Python", "PHP", $input_string);

$output_string = str_replace("Python ", "PHP ", $output_string);

echo $output_string;
?>