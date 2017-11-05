<?php
//10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы
function unique($str){
    $x=explode(' ',mb_strtolower($str));
    echo 'In generally words - '.count($x);
    $x=array_unique($x);
    echo ', Unique words - '.count($x);
}
include '10.html';
unique($_POST['text']);
?>