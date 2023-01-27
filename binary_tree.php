<?php

class Node {
    public $value;
    public $left;
    public $right;

    public function __construct($value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function preOrderTraversal() {
        $this->preOrder($this->root);
    }

    public function inOrderTraversal() {
        $this->inOrder($this->root);
    }

    public function postOrderTraversal() {
        $this->postOrder($this->root);
    }

    public function preOrder($node) {
        if ($node !== null) {
            echo $node->value . " ";
            $this->preOrder($node->left);
            $this->preOrder($node->right);
        }
    }

    public function inOrder($node) {
        if ($node !== null) {
            $this->inOrder($node->left);
            echo $node->value . " ";
            $this->inOrder($node->right);
        }
    }

    public function postOrder($node) {
        if ($node !== null) {
            $this->postOrder($node->left);
            $this->postOrder($node->right);
            echo $node->value . " ";
        }
    }
}

$bt = new BinaryTree();
$bt->root = new Node(1);
$bt->root->left = new Node(2);
$bt->root->right = new Node(3);
$bt->root->left->left = new Node(4);
$bt->root->left->right = new Node(5);

echo "Preorder traversal of binary tree is \n";
$bt->preOrderTraversal();

echo "\nInorder traversal of binary tree is \n";
$bt->inOrderTraversal();

echo "\nPostorder traversal of binary tree is \n";
$bt->postOrderTraversal();

?>