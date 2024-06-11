/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {
    
    function mergeTwoLists($list1, $list2) {
        $list = new ListNode();
        $pointer = $list;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val < $list2->val) {
                $pointer->next = $list1;
                $list1 = $list1->next;
            } else {
                $pointer->next = $list2;
                $list2 = $list2->next;
            }
            $pointer = $pointer->next;
        }

        if ($list1 !== null) {
            $pointer->next = $list1;
        } elseif ($list2 !== null) {
            $pointer->next = $list2;
        }
        return $list->next;
    }
}