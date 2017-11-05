<?php
//9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
function reverse($str)
{
    $b='';
    for ($i = strlen($str) - 1; $i >= 0; $i--) 
    {
         $b .= $str[$i];
    }
    return $b;
}
include '9.html';
echo reverse($_POST['texts']);
?>
