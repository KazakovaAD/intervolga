<?php
$a = "Текст новости";
$linkB = "";
$b = "";
$encoding='utf-8';
$limit = 180;
if (mb_strlen($a, $encoding) > $limit)
{
    $shortA = mb_substr($a,0, $limit, $encoding);
    $textArray = explode(' ', $shortA);
    $linkB = $textArray[count($textArray)-2].' '.$textArray[count($textArray)-1].'...';
    $lengthB = mb_strlen($textArray[count($textArray)-2], $encoding) + mb_strlen($textArray[count($textArray)-1], $encoding) + 1;
    $b = mb_substr($shortA,0,$limit - $lengthB, $encoding);
}
else
    $b = $a;
