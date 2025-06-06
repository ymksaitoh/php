<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);

function outputHello()
{
    echo "Hello world";
}

outputHello(); //①

function text($number1, $number2)
{
 $value = $number1 + $number2;
 return $value;
}

$total = text(2, 4);
echo $total;

function quest($number1, $number2)
{
    $value2 = $number1 - $number2;
    return $value2;
}

$total2 = quest(6, 1);
echo $total2;

function question($score1,$score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total >210)  {
        echo $total . "点なので合格です";
    } else {
        echo $total . "点なので不合格です";
    }
}
echo (question(80, 60, 90));

function area($upper, $bottom, $height)
{
    $triangle = ($bottom + $upper) / 2;
      echo $triangle = "三角形の面積は" . $triangle . "m2です";
    $square = $bottom + $upper;
      echo $square = "四角形の面積は" . $square . "m2です";
    $trapezoid = ($upper + $bottom) * $height / 2;
      echo $trapezoid ="台形の面積は" . $trapezoid . "m2です";
}
echo area(10, 20, 10);

function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);