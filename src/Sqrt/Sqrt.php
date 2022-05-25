<?php

namespace Sqrt;

class Sqrt {

	public function pierwiastek($num, $mpp)
    {
        if ($num < 1) {
            return 'liczba musi byc wieksza od zera';
        } else {
            for ($i = 1; $i <= $num; $i++) {
                if ($i * $i == $num) {
                    return $i;
                } elseif (($i + 1) * ($i + 1) > $num) {
                    $po_kropce = 0;
                    for ($a = 0; $a <= $mpp; $a++) {
                        $po_kropce += $this->dokladnosc($a, $i, $num, $po_kropce);
                    }
                    return $i + $po_kropce;
                }
            }
        }
    }


    private function dokladnosc ($pp, $calkowita, $num, $po_kropce) {
        for ($a = 0; $a <= 9; $a++) {
            $decimal = $a / 10**$pp;
            $next_decimal = $decimal + (10**(-$pp));
            $wynik = 0;
            if (($calkowita + $next_decimal + $po_kropce) * ($calkowita + $next_decimal + $po_kropce) > $num) {
                return $decimal; 
            }
        }
    }
}