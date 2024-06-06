class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function romanToInt($s) {
        $value = 0;
        $roman = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        for($i = 0; $i < strlen($s); $i++) {
            if($roman[$s[$i]] < $roman[$s[$i+1]]) {
                $value -= $roman[$s[$i]];
            } else {
                $value += $roman[$s[$i]];
            }
        }

        return $value;
    }
}