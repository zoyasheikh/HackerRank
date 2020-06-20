<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr) {
    $size = sizeof($arr);
    $swap = 0;
    for ($i=0; $i < $size; $i++) {
        while($arr[$i] != ($i+1)){
            $t = $arr[$i];
            $arr[$i] = $arr[$t-1];
            $arr[$t-1] = $t;
            $swap++;
        }
    }
    return $swap;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);
