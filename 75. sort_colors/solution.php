class Solution {
    /**
    * @param Integer[] $nums
    * @return NULL
    */
    function sortColors(&$nums) {

        $red = [];
        $white = [];
        $blue = [];

        foreach($nums as $key => $value) {
            if($value == 0) $red[] = $nums[$key];
            elseif($value == 1) $white[] = $nums[$key];
            elseif($value == 2) $blue[] = $nums[$key];
        }

        $nums = [...$red, ...$white, ...$blue];
        return $nums;
        
    }
}