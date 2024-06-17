class Solution {

    /**
    * @param String $s
    * @return Boolean
    */
    function isPalindrome($s) {
    
        $new = strtolower(preg_replace("/[^a-zA-Z0-9]/",'',$s));
        $count = strlen($new);

        for($i = 0, $j = $count-1; $i < $count; $i++, $j--) {
            if ($new[$i] !== $new[$j]) {
                return false;
            }
        }
        return true;
    }
}