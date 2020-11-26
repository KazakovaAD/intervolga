<?php
$array = [];
$permittedСhars = '0123456789abcdefghijklmnopqrstuvwxyz';
for($i = 0; $i<100; $i++)
{
    $array[$i] =  substr(str_shuffle($permittedСhars), 0, 1);
}
$count = 0;
for ($i = 0; $i<99; $i++)
{
    if ($array[$i] === $array[$i+1])
    {
        $count++;
    }
}
foreach ($array as $value)
    echo $value;
echo "<br/>Количество пар: ", $count;