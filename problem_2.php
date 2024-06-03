<?php

function wordCountInFile($filename){
  if (!file_exists($filename)){
    die("File not found");
  }

  $file_content=file_get_contents($filename);
  // print_r($file_content);
  $word_count=str_word_count($file_content);
  return $word_count;
}


echo "Enter file name with extension: ";
$input=trim(fgets(STDIN));

echo "The file contain words: ". wordCountInFile($input)."\n";

?>