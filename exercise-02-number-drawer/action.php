<?php

//allow special characters
header('Content-Type: text/html; charset=UTF-8');

//ambient variables
$numbers = array('?', '?', '?', '?', '?', '?');
$draw = $_POST['drawButton'] ?? '';

if ($draw == 'draw') {
  for ($i = 0; $i < 6; $i++) {
    $randomNumber = rand(0, 60);
    foreach ($numbers as $n) {
      while ($n == $randomNumber) {
        $randomNumber = rand(0, 60);
      }
      $numbers[$i] = $randomNumber;
    }
  }
}
