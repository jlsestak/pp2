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

function removeDups($array){
    $makeUnique = array_unique($array);
    $array = array_values($makeUnique);
    return $array;
}

function distribution($array){
    print_r(array_count_values($array));
}

