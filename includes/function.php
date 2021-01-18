<?php
function printArray($array) {
    foreach($array as $value) {
        echo "$value<br>";
    }
}

function largest($array) {
    $maxValue = 0;
    for($i = 0; $i <= sizeof($array); $i++) {
        if($array[$i] > $maxValue) {
            $maxValue = $array[$i];
        }
    }
    echo $maxValue;
}


