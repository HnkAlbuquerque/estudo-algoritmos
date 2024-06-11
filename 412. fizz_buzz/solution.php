class Solution {
    /**
    * @param Integer $n
    * @return String[]
    */
    function fizzBuzz($n) {
        $array = [];  
        for ($i = 1; $i <= $n; $i++) {
            $str = "";
            if ($i % 3 == 0) {
                $str = "Fizz";
            } 
            if ($i % 5 == 0) {
                $str = $str . "Buzz";
            }
            ($str != "") ? array_push($array, $str) : array_push($array, strval($i));
        }
        return $array;
    }
}