class Solution {

/**
 * @param Integer $num
 * @return Integer
 */
function addDigits($num) {
    // implementação da "prova dos nove" ou "noves fora" como é conhecido no Brasil
    // se numero é = 0 retorna 0
    if ($num == 0) {
        return 0;
    }

    // se o resto da divisão por 9 for 0, retorna 9 ex: 27 % 9 =
    if ($num % 9 == 0) {
        return 9;
    }

    // retorna o resto da divisão por 9
    return $num % 9;
}
}