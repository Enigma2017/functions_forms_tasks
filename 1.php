<?php
/*1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.*/
include '1.html';
$a = $_POST ['a'];
$b = $_POST ['b'];
function getCommonWords($a, $b){
    $a=explode(' ',$a);
    $b=explode(' ',$b);
    for ($i = 0; $i < count($a); $i++) 
    {
        $test=false;
        for ($j = 0; $j < count($b); $j++)
         {
            if($a[$i]===$b[$j]){
                $result[]=$a[$i];
                $test=true;
                break;
            }
        }
        if($test==false)
        {
           echo "Строка а(".$a[$i].") не совпала\n";
        }
    }return $result;
}
print_r(getCommonWords($a,$b));
?>
