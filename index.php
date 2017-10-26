<?php
$x = rand(0,100);
$x1=1;
$x2=1;
choice:
switch ($x1)
    {
    case ($x1>$x):
    echo "задуманное число НЕ входит в числовой ряд";
    break;
    
    case ($x1=$x):
    echo "задуманное число (" . $x . ") входит в числовой ряд. <br>";
    break;
    
    case ($x1<x):
    $x3=$x1;
    $x1=$x1+$x2;
    $x2=$x3;
    goto choice;
    }

?>

