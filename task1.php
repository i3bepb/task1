<?php

class test {
    public $next;
}

$a = new test();
$b = new test();
$c = new test();
$a->next = $b;
$b->next = $c;
$c->next = null;

function reverse($a) {
    $newTree = null;
    $current = $a;
    do {
        $next = $current->next;
        $current->next = $newTree;
        $newTree = $current;
        $current = $next;
    } while ($next !== null);
    return $newTree;
}
$ob1 = reverse($a);
var_dump($ob1);
