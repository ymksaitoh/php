<?php
 $count = 0;
 while ($count <= 100) {
    if ($count == 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count ."<br />";
    $count++;
}

$i = 0;
do {
    echo $i . "<br />";
    $i++;
} while ($i < 5);

$num = 0;
do {
    echo "num =" . $num . "<br />";
    $num++;
} while ($num <3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($a = 01; $a <= 50; $a++) {
    if ($a % 15 == 0) {
        echo $FizzBuzz . "<br />";
    }else if ($a % 3 == 0) {
        echo $Fizz . "<br />";
    }else if ($a % 5 == 0){
        echo $Buzz . "<br />";
    }else {
        echo $a . "<br />";
    }
}

for ($b = 1; $b < 6; $b++) {
    for ($c = 1; $c < 6; $c++) {
        echo "●";
    }
    echo "<br />";
}