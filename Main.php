<?php

class Number

{
    public function numb(int $numb_a = 3, int $numb_b = 4):array
    {
        $sum = $numb_a + $numb_b;
        $sub = $numb_a - $numb_b;
        $mul = $numb_a * $numb_b;
        $div = $numb_a / $numb_b;

        return [$sum, $sub, $mul, $div];
    }
}

$number = new Number;

$numb = $number->numb(numb_a: 3, numb_b: 4);

echo $numb[2];