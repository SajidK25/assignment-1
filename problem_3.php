<?php

function reverseEveryWordsInSentence($input){
  $word_array=explode(' ',$input);
  $abs_callback= fn (string $word)=>strrev($word);
  $reverse_words_Array= array_map($abs_callback,$word_array);
  // var_dump($reverse_words_Array);
  $reverse_words_sentence=implode(' ',$reverse_words_Array);
  return $reverse_words_sentence;
}

echo "Enter a sentence: ";
$input=trim(fgets(STDIN));

echo "Reverse word sentence: ". reverseEveryWordsInSentence($input)."\n";

?>