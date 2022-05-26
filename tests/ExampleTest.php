<?php

use Sqrt\Sqrt;

it('square root corectly', function ($value) {
    $r = ((new Sqrt)->pierwiastek($value, 10));

    expect($r)->toEqual(round(sqrt($value), 10));
})->with([
    0, 0.000025,1,3,4,5,7,9,231,526, 9572.384
]);

it('square root negatives', function($value) {
    $r = ((new Sqrt)->pierwiastek($value, 10));

    expect($r)->toBeNan();
})->with([
    -1,-2
]);
