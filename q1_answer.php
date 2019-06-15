<?php
/**
 * Created by PhpStorm.
 * User: tausif
 * Date: 15/06/19
 * Time: 20:32
 */


function printDepth($arr, $depth)
{
    foreach ($arr as $key => $value) {
        echo $key . ' ' . $depth . PHP_EOL;
        if (is_array($value)) {
            printDepth($value, $depth + 1);
        }
    }
}


$a = array(
    "key1" => 1,
    "key2" => array(
        "key3" => 1,
        "key4" => array(
            "key5" => 4
        ),
    ),
);

print_r(printDepth($a, 1));