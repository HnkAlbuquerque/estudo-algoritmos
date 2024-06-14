class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target) { 
    // quando a posção 0 for maior que o alvo| ex se o alvo for 0
    if($nums[0] > $target){
        return 0;
    }

    // quando a ultima posição do array for menor que o alvo, retorna a ultima posição+1
    if ($nums[count($nums)-1] < $target) {
        return count($nums);
    }

    foreach($nums as $key => $value) {
        // se o valor for igual ao alvo
        if ($value == $target) {
            return $key;
        } 
        // se o valor for maior que o valor e menor que o proximo
        elseif ($target > $value && $target < $nums[$key+1]) {
            return $key+1;
        }
    }
}
}