<?php

// Complete the arrayManipulation function below.
function arrayManipulation($n, $queries) {
    $my_array = array_fill(0, $n+1, 0);
    for ($i=0; $i < sizeof($queries); $i++) { 
        $start = $queries[$i][0]-1;
        $end = $queries[$i][1]-1;
        $val = $queries[$i][2];
        $my_array[$start] += $val;
        $my_array[$end+1] -= $val;
    }
    for ($i=0; $i < sizeof($my_array); $i++) { 
        if($i > 0){
            $res[$i] = $my_array[$i] + $res[$i-1];
        }
        else{
            $res[$i] = $my_array[$i];
        }
    }
    return max($res);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries = array();

for ($i = 0; $i < $m; $i++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
