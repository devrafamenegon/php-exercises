<?php

//allow special characters
header('Content-Type: text/html; charset=UTF-8');

$weight = null;
$date = null;
$canDonate = null;
$operation = $_POST['operation'] ?? "";

if ($operation == "verify") {
  //recover the user input value and send to DateTime object
  $date = new DateTime($_POST['birth-date']);

  //function to calculate the user years
  $years = yearsCalculate($date);

  //recover the user input value
  $weight = $_POST['weight'];

  if ($weight <= 50 || $years < 16 || $years > 69) {
    $canDonate = "cant";
  } else if ($weight > 50 && $years >= 16 || $years <= 69) {
    $canDonate = "can";
  }
} else if ($operation == "clear") {
  $weight = null;
  $date = null;
  $now = null;
  $years = null;
  $canDonate = null;
}


function yearsCalculate($date)
{
  //DateTime object for actual date
  $now = new DateTime();

  //calculating the difference between date now and birth date
  $years = $now->diff($date);

  //recover only the years off difference
  $years = $years->y;

  return $years;
}
