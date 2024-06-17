class Solution {
    /**
    * @param String $haystack
    * @param String $needle
    * @return Integer
    */
    function strStr($haystack, $needle) {
        $length = (strlen($haystack) - strlen($needle)) + 1;
        for ($i=0; $i < $length; $i++) { 
            $newStr = substr($haystack,$i,strlen($needle));
            if ($needle == $newStr) {
                return $i;
            }
        }
        return -1;
    }
}