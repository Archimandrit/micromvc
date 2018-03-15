<?php

$string = '9(911)7-77-2234 tetya sraka';
$result = preg_replace('/[^0-9]/u','', $string);
$result2 = preg_replace('/(\d)(\d{3})(\d{3})(\d{4})/u','+$1 ($2) $3-$4', $result);
echo $string.PHP_EOL;
echo $result. PHP_EOL;
echo $result2.PHP_EOL;
