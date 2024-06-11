class Solution {

/**
 * @param Integer[] $arr1
 * @param Integer[] $arr2
 * @return Integer[]
 */
function relativeSortArray($arr1, $arr2) {
    // declarar um array vazio
    $resultArray = [];
    // iterar sobre o array2 que  contém todos os valores contidos no array1
    foreach($arr2 as $key2 => $item2) {
        // iterar sobre o array 1 para cara item presente no array 2
        foreach($arr1 as $key1 => $item1) {
            // comparar o valor atual do array 2 com todos os valores do array 1
            if($item2 == $item1) {
                // se verdadeiro resultArray recebe o valor de $item1
                $resultArray[] = $item1;
                // remove valor na chave correspondente
                unset($arr1[$key1]);
            }
        }
    }
    // ordernar os valores restantes  que estão dentro do array1
    sort($arr1);
    // retornar o array de resultado + os valores que sobram no array 1
    return array_merge($resultArray, $arr1);
}
}