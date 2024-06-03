<?php

function findMinAbsoluteValue($input){
  $arr=explode(' ',$input);
  $absCallback= fn (int $num)=>abs($num);
  $newArr= array_map($absCallback,$arr);
  $minValue=min($newArr);
  return $minValue;
}

// $input1="10 12 15 189 22 2 34";
// $input2="10 -12 34 12 -3 123";
echo "Enter array of integer: ";
$input=trim(fgets(STDIN));

echo "Sample output: ". findMinAbsoluteValue($input)."\n";
// echo "Sample output2: ". findMinAbsoluteValue($input2)."\n";

?>