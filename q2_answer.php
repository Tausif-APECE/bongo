<?php
/**
 * Created by PhpStorm.
 * User: tausif
 * Date: 15/06/19
 * Time: 20:40
 */

class Person
{
    public function __construct($first_name, $last_name, $father)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->father = $father;
    }
}

function printDepth($arr, $depth)
{
    foreach ($arr as $key => $value) {
        echo $key . ' ' . $depth . PHP_EOL;
        if (is_array($value) || is_object($value)) {
            printDepth($value, $depth + 1);
        }
    }
}

$person_a = new Person('User', 1, NULL);
$person_b = new Person('User', 2, $person_a);
$a = array(
    "key1" => 1,
    "key2" => array(
        "key3" => 1,
        "key4" => array(
            "key5" => 4,
            'User' => $person_b,
        ),
    ),
);

print_r(printDepth($a, 1));

