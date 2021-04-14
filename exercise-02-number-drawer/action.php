<?php

//allow special characters
header('Content-Type: text/html; charset=UTF-8');

$numbers = array('?', '?', '?', '?', '?', '?');
$draw = $_POST['drawButton'] ?? '';

if ($draw == 'draw') {

  for ($i = 0; $i < 6; $i++) {

    //random number
    $randomNumber = rand(0, 6);

    foreach ($numbers as $n) {
      while (in_array($randomNumber, $numbers)) {
        $randomNumber = rand(0, 6);
      }
    }
    $numbers[$i] = $randomNumber;
  }
}
