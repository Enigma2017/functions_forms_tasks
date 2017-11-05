<?php
/*2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.*/
include '2.html';
$a=$_POST['a'];
function leght_top_three($a)
{
    $a = explode(' ', $a);
    // print_r($a);
    for ($i = 0; $i < count($a); $i++) 
    {
        for ($j = 0; $j < count($a)-1; $j++) 
        {
            if (mb_strlen($a[$j])>mb_strlen($a[$j+1]))
            {
                $b=$a[$j];
                $a[$j]=$a[$j+1];
                $a[$j+1]=$b;
            }
        }
    }
    return (array_slice($a, 0, 3));
}
print_r(leght_top_three($a));
?>