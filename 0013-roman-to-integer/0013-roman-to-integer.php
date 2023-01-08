class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $specialSymbols = array("IV" => 4, "IX" => 9,
                              "XL" => 40, "XC" => 90,
                              "CD" => 400, "CM" => 900);
        
        $standardSymbols = array("I" => 1, "V" => 5, "X" => 10, "L" => 50,
                                 "C" => 100, "D" => 500, "M" => 1000);

        $length = strlen($s);
        $pointer = 0;
        $number = 0;
        
        while($pointer != $length){
            $specialChars = substr($s, $pointer, 2);
            $standardChar = substr($s, $pointer, 1);

            if(in_array($specialChars, array_keys($specialSymbols))){
                $number += $specialSymbols[$specialChars];
                $pointer += 2;
            } else if(in_array($standardChar, array_keys($standardSymbols))){
                $number += $standardSymbols[$standardChar];
                $pointer += 1;
            }
        }

        return $number;
    }
}