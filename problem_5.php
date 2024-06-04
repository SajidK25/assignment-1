<?php
function findSumOfDigits($n){
  $str=strval($n);
  $sum=0;
  for ($i=0; $i <= strlen($str); $i++) {
    $sum+=intval($str[$i]);
  }
  return $sum;
}

echo "Enter a integer: ";
$input=trim(fgets(STDIN));

echo "Output: ".findSumOfDigits($input);
?>