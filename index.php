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
//includes
include ("includes/function.php");

echo "PHP Array Practice <br>";

$numbers = array (7,9,8,9,8,8,6);


printArray($numbers);

echo "<br> Largest number: <br>";
largest($numbers);

echo"<br> <br> Array without Duplicates: <br>";

printArray(removeDups($numbers));


