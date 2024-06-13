class Solution {

    /**
    * @param Integer[] $seats
    * @param Integer[] $students
    * @return Integer
    */
    function minMovesToSeat($seats, $students) {
        // ordenar os arrays
        sort($seats);
        sort($students);
        $result = 0;

        for ($i = 0; $i < count($seats); $i++) {
            // pegando o numero absoluto e fazendo a soma
            $result += abs($seats[$i] - $students[$i]);
        }
        return $result;
    }
}