<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.02.18
 * Time: 7:51
 */

echo $GLOBALS["\x80\x81"] = 100;

echo PHP_EOL;

$a = "\x80\x81";
echo $$a;

echo PHP_EOL;


function typeValues(float ...$a) {
    foreach($a as $b) {
        echo $b . PHP_EOL;
    }
}

typeValues(...[1,2, 2.3]);

function compareS(string $s1, string $s2) {
    $i = (int)$s1;
    $j = (int)$s2;

    return ($i > $j) ? 1 : (($i == $j)? 0 : -1);
}

$data = [1,4,6,-2];
$newData = usort($data, "compareS");
var_dump($data);
echo compareS((string)1,(string)4) . PHP_EOL;