class Solution {

    /**
    * @param String $s
    * @return Boolean
    */
    function isValid($s) {
    if (strlen($s) % 2 != 0) return false;

        $array = str_split($s);
        for ($i=0; $i < strlen($s); $i++) {
            if(current($array) == '(' || current($array) == '[' || current($array) == '{') {
                array_push($array, current($array));
                array_shift($array);
            } else if (current($array) == ')' && end($array) == '(' && !empty($array)) {
                array_shift($array);
                array_pop($array);
            } else if (current($array) == ']' && end($array) == '[' && !empty($array)) {
                array_shift($array);
                array_pop($array);
            } else if (current($array) == '}' && end($array) == '{' && !empty($array)) {
                array_shift($array);
                array_pop($array);
            } else {
                return false; 
            }
        }

        return empty($array);
    }
}
