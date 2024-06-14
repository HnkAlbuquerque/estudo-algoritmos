class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function minIncrementForUnique($nums) {
    
    // primeiro passo, deixando os valores do array ordenados
    sort($nums);

    // declarando variaveis
    $count = count($nums);
    $moves = 0;
    $temp = 0;
    
    // iterar sobre as posições do array
    for($i = 0; $i < $count; $i++) {
        // se $temp (current 0) menor que 1 (current on case 1) temp recebe nums current
        if ($temp < $nums[$i]) {
            $temp = $nums[$i];
        }

        $moves += $temp - $nums[$i];
        // incrementando temp até ele ser maior e acontecer a subtração da linha 23 que não seja 0
        $temp++;
    }

    return $moves;
}
}