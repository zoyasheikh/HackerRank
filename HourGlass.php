<?php

// Complete the hourglassSum function below.
function hourglassSum($arr) {

    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 4; $j++) {
            $result = 0;
            $sum = 0;
            for ($m=0; $m < 3; $m++) { 
                for ($n=0; $n < 3; $n++) { 
                    $sum += $arr[($m+$i)][($n+$j)];
                }
            }
            $sum = $sum - ($arr[1+$i][0+$j]+$arr[1+$i][2+$j]);
            echo $sum;
            echo "\n";
            if($sum > $result){
                $result = $sum;
            }
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = hourglassSum($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
