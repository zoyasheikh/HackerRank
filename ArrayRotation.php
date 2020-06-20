<?php

// Complete the minimumBribes function below.
function minimumBribes($q) {
    $arr = $q;
    sort($arr);
    $size = sizeof($q);
    $result = 0;
    $terminate = 0;
    for ($i=0; $i < $size; $i++) { 
        $ele = $q[$i];
        $original_pos = array_search($ele, $arr);
        $temp = abs($original_pos - $i);
        $result += $temp;
        if($temp > 2){
            $x = 1;
        }
    }
    if($x == 1){
        echo "Too chaotic";
    }
    else{
        echo $result/2;
    }
    echo "\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $q_temp);

    $q = array_map('intval', preg_split('/ /', $q_temp, -1, PREG_SPLIT_NO_EMPTY));

    minimumBribes($q);
}

fclose($stdin);
