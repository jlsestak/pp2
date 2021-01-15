<?php
/*
 * Jessica Sestak and Aaron Utterback
 * 01/14/2021
 * http://jsestak.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 */

// turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

echo "PHP Array Practice <br>";

$numbers = array (7,9,8,9,8,8,6);

function printArray($numbers) {
    foreach($numbers as $value) {
        echo "$value<br>";
    }
}
printArray($numbers);
