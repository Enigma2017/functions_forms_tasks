<?php
/*3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.*/
include '3.html';
$lenght_world=$_POST['lenght'];
$file=file_get_contents('3.textile');
$arr=(explode(' ',$file));
print_r($arr);
for ($i = 0; $i < count($arr); $i++)
 {
    echo mb_strlen($arr[$i])." =  $arr[$i]\n ";
     if (mb_strlen($arr[$i])==$lenght_world){
         unset($arr[$i]);
     }
}
file_put_contents('3_new.txt',implode(" ", $arr));

?>