<?php
/**
 * Created by PhpStorm.
 * User: tausif
 * Date: 15/06/19
 * Time: 20:43
 */

class Node
{
    public $value;
    public $parent;

    public function __construct($val, $parent = null)
    {
        $this->value = $val;
        $this->parent = $parent;
    }
}

$node1 = new Node(1);
$node2 = new Node(2, $node1);
$node3 = new Node(3, $node1);
$node6 = new Node(6, $node3);
$node7 = new Node(7, $node3);
$node4 = new Node(4, $node2);
$node5 = new Node(5, $node2);
$node8 = new Node(8, $node4);
$node9 = new Node(9, $node4);

function lcaInner($node, &$arr)
{
    $arr[] = $node->value;
    if (!empty($node->parent)) {
        lcaInner($node->parent, $arr);
    }
}

function lca($n1, $n2)
{
    $lcasForN1 = [];
    $lcasForN2 = [];

    lcaInner($n1, $lcasForN1);
    lcaInner($n2, $lcasForN2);

    $commonAncestors = array_values(array_intersect($lcasForN1, $lcasForN2));

    if (!empty($commonAncestors)) {
        return $commonAncestors[0];
    }
}

echo lca($node8, $node9);
