<?php

use Sqrt\Sqrt;

test('example', function ($value) {
    $r = ((new Sqrt)->pierwiastek($value, 10));

    expect($r)->toEqual(round(sqrt($value), 10));
})->with([
    1,3,4,5,7,9,231,526,-1, 9572.384
]);
