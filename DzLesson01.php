<?php
// 1. С помощью цикла for вывести на экран числа фибоначи до $n
function fib($index)
{
    if ($index < 2) {
        return $index;
    }
    return fib($index - 1) + fib($index - 2);
}
echo fib(10).PHP_EOL;

// 2. Перебрать массив чисел [1, 2, 3, 4, 5] и все нечетные числа умножить на 3
$arr = [1, 2, 3, 4, 5];
foreach ($arr as &$value)
{
    if ($value % 2 !=0)
    {
        $value = $value * 3;
    }
}
unset($value);
print_r($arr).PHP_EOL;

// 3. Вывести первые $n числа, и вывести если простое.

function simple($num):bool
{
    $result = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0)
        {
            $result = false;
        }
    }
    return $result;
}

$n = 10;
for ($i = 1; $i <= $n; $i++) {
    echo $i;
    if (simple($i))
    {
        echo " - простое";
    }
    echo PHP_EOL;
}
