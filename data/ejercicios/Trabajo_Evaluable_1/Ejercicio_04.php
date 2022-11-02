<?php
$num1 = 0;
$num2 = 1;

echo $num1 . " ";
for ($i = 0; $i < 10; $i++) {
    $numTemp = $num1;
    $num1 = $num2;
    $num2 = $numTemp + $num1;
    echo $num1 . " ";
}