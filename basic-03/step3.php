<?php
function countWord($text, $word) {
  $count = 0;
  $words = explode(" ", $text);
  
  $i = 0;
  while ($i < count($words)) {
    if ($words[$i] == $word) {
      $count++;
    }
    $i++;
  }
  
  return $count;
}