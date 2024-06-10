class Solution {

    /**
    * @param Integer[] $nums
    * @return Integer
    */
    function removeDuplicates(&$nums) {
        $count = count($nums);

        for($i = 0; $i < $count; $i++) {
            if($nums[$i] === $nums[$i+1]) {
                unset($nums[$i]);
            }
        }

        return $i;
    }
}
