<?php

class numbersBejvlMatyas {

    /**
     *  zaokrouhlý cislo podle presnosti
     * @param float $num
     * @param int $pr
     * @return float
     */
    public static function round(float $num, int $pr = 0): float {
        return round($num, $pr);
    }

    /**
     * vynasobii
     * @param float $a
     * @param float $b
     * @return float
     */
    public static function vynasob(float $a, float $b): float {
        return $a * $b;
    }

    public static function abs(float $number): float {
        return self :: abs($number);
    }

    public static function floor(float $number): float {
        return floor($number);
    }

    public static function ceil(float $num): float {
        return ceil($num);
    }

    public static function fmod(float $cislo1, float $cislo2): float {
        return fmod($cislo2, $cislo1);
    }

    public static function sqrt(float $cislo): float {
        return sqrt($cislo);
    }

    public static function pow(float $cislo1, float $cislo2): float {
        return pow($cislo1, $cislo2);
    }

    public static function sin(float $cislo1, float $cislo2, float $cislo3): float {
        return sin($this->sin($cislo1, $cislo2, $cislo3));
    }

    public static function asin(float $cislo1, float $cislo2, float $cislo3): float {
        return asin($this->asin($cislo1, $cislo2, $cislo3));
    }

    public static function max(int $min, int $max): array {
        $numbers = [];
        for ($i = $min; $i <= $max; $i++) {
            $numbers[] = $i;
        }

        return $numbers;
    }

    public static function odecte(float $a, float $b): float {
        return $a - $b;
    }

    public static function secte(float $a, float $b): float {
        return $a + $b;
    }

    public static function deleni(float $a, float $b): float {
        return $a / $b;
    }

}

dump(numbersBejvlMatyas::deleni(50, 10));
dump(numbersBejvlMatyas::secte(5, 9));
dump(numbersBejvlMatyas::odecte(5, 3));
dump(numbersBejvlMatyas::sqrt(5));
dump(numbersBejvlMatyas::vynasob(5, 9));
dump(numbersBejvlMatyas::ceil(14));
dump(numbersBejvlMatyas::floor(15));
dump(numbersBejvlMatyas::fmod(2, 15));
dump(numbersBejvlMatyas:: pow(8, 4, 2, 3));
dump(numbersBejvlMatyas::max(10, 5));

echo "<br>";
echo numbersBejvlMatyas:: round(325454.5464, 2);
echo "<br>";
echo numbersBejvlMatyas:: ceil(15.1);
echo "<br>";
echo numbersBejvlMatyas:: floor(15, 18);
echo "<br>";
echo numbersBejvlMatyas::fmod(2, 15);
echo "<br>";
 
