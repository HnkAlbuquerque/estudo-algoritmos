class Solution {

    /**
    * @param Integer[] $nums
    * @return Integer
    */
    function singleNumber($nums) {
        $result = 0;
        foreach($nums as $num) {
            // xor operator irá anular os numeros iguais
            $result ^= $num;
        }
        return $result;
    }
}