<?php

function reverseEveryWordsInSentence($input){

  $word_array=explode(' ',$input);
  $strrev_callback= fn (string $word)=>strrev($word);
  $reverse_words_Array= array_map($strrev_callback,$word_array);
  // var_dump($reverse_words_Array);
  $reverse_words_sentence=implode(' ',$reverse_words_Array);
  return $reverse_words_sentence;
}

$input='';
while (!$input) {
  echo "Enter a sentence: ";
  $input=trim(fgets(STDIN));
}

echo "Reverse word sentence: ". reverseEveryWordsInSentence($input)."\n";

?>