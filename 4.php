<?php
//4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
function outp($dir)
{
return scandir($dir);
}
print_r(outp(__DIR__));
?>