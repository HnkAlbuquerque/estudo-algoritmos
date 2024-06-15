class Solution {
    /**
    * @param String $s
    * @return Integer
    */
    function lengthOfLastWord($s) {
        $explode = explode(' ', $s);

        for($i = count($explode)-1; $i < count($explode); $i--) {
            if (strlen($explode[$i]) !== 0) {
                return strlen($explode[$i]);
            }
        }
    }
}