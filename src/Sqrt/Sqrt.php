<?php

namespace Sqrt;

class Sqrt {

	public function pierwiastek($num, $mpp)
    {
        if ($num < 0) {
            return NAN;
        } else {
            for ($i = 0; $i <= $num; $i++) {
                if ($i * $i == $num) {
                    return $i;
                } elseif (($i + 1) * ($i + 1) > $num) {
                    $po_kropce = 0;
                    for ($a = 0; $a <= $mpp; $a++) {
                        $po_kropce += $this->dokladnosc($a, $i, $num, $po_kropce);
                    }
                    $do_zaokraglenia = $this->dokladnosc($mpp+1, $i, $num, $po_kropce) * (10**($mpp+1));
                    
                    if ($do_zaokraglenia >= 5) {
                        return $i + $po_kropce + (10**(-$mpp));
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