class Solution {

    /**
    * @param String $s
    * @param String $t
    * @return Boolean
    */
    function isAnagram($s, $t) {
        $sLen = strlen($s);
        $tLen = strlen($t);

        if ($sLen !== $tLen) {
            return false;
        }

        $mapS = [];
        $mapT = [];

        for ($i = 0; $i < $sLen; $i++) {
            $mapS[$s[$i]]++;
            $mapT[$t[$i]]++; 
        }

        if($mapS != $mapT) {
            return false;
        }
        
        return true;
    }
}