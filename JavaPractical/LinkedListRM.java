package com.code;

public class LinkedListRM {
    //linked list node
    static class Node {
        int data;
        Node next;
    }

    //remove 1st node on linked list
    static Node RemoveNode(Node head) {
        // head is first number of element nodes
        if (head == null)
            return null;
        // move the head pointer to next node
        Node temp = head;
        head = head.next;
        return head;
    }

    //insert element
    static Node Insert(Node head_ref, int new_data) {
        Node new_node = new Node();
        new_node.data = new_data;
        new_node.next=(head_ref);
        (head_ref) = new_node;
        return head_ref;
    }

    //main
    public static void main(String args[]) {
        //start with empty list
        Node head = null;
        //insert element in list
        //input 1 ,2, 3, 4, 5;
        head = Insert(head, 5); // number 5
        head = Insert(head, 4);//4
        head = Insert(head, 3);//3
        head = Insert(head, 2);//2
        head = Insert(head, 1);//1

        head = RemoveNode(head);
        for (Node temp = head; temp != null; temp = temp.next)
            System.out.print(temp.data + " ");
    }
}

