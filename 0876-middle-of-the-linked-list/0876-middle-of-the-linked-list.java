/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode() {}
 *     ListNode(int val) { this.val = val; }
 *     ListNode(int val, ListNode next) { this.val = val; this.next = next; }
 * }
 */
class Solution {
    public ListNode middleNode(ListNode head) {
        int size = 1;
        
        // count nodes
        ListNode startHead = head;
        while(startHead.next != null){
            startHead = startHead.next;
            size++;
        }
        
        // traverse through ListNode
        
        int middleNodeIndex = size/2;
        ListNode finalNode = head;
        
        for(int i = 0; i < middleNodeIndex; i++){
            finalNode = finalNode.next;
        }
        
        return finalNode;
    }
}