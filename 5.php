<?php
/*5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.*/
function search_dir($file,$word)
{
    $arr=(scandir($file));
    for ($i = 0; $i < count($arr); $i++)
     {
        $par=strpos($arr[$i],$word);
        if($par!==false)
        {
            $result[]=$arr[$i];
        }
    }
    return $arr;
}
print_r(search_dir(__DIR__,'mag'));
?>