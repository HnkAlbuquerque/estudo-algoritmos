class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */

    function twoSum($nums, $target) {
        $map = [];
        for($i = 0; $i < count($nums); $i++) {
            $save = $target - $nums[$i];
            if(array_key_exists($save, $map)) {
                return [$map[$save], $i];
            }
        $map[$nums[$i]] = $i;
        }              
        return null;
    }
}