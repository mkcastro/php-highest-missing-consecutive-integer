<?php

function solution($A)
{
    $A = array_unique($A, SORT_NUMERIC);
    sort($A, SORT_NUMERIC);

    foreach ($A as $key => $current_number) {
        if ($current_number < 1) {
            dump('current number:' . $current_number . ' is less than 1');
            continue;
        }

        if (array_key_last($A) == $key) {
            dump('end of array reached');
            return $current_number + 1;
        }

        if (($A[$key + 1] - $current_number) != 1) {
            dump('difference is not equal to 1');

            return $current_number + 1;
        }
    }
    return 1;
}

var_dump('the answer is:' . solution([5, 6, 7, 8]));
var_dump('the answer is:' . solution([1, 3, 6, 4, 1, 2]));
var_dump('the answer is:' . solution([1, 2, 3]));
var_dump('the answer is:' . solution([-1, -3]));

function dump($any)
{
    var_dump($any);
}
