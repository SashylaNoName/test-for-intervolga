<?php
Function fill ($array, $n){//Fill the array
    for ($i = 0; $i < $n+1; $i++) {
        $array[$i] = rand(-30, 30);
    }
    return $array;
}
Function longest_increasing_sequence($input){//find the longest increasing sequence in array
    $trial = array();
    foreach ($input as $key => $value)
    {
        $trial[$key][0] = $value; // Create a new trial for each starting point
        echo "Trial $key started<br>\n";
        for ($i = $key-1; $i >= 0; $i--) //Process all prior trials
        {
            echo "Looking at trial $i ";
            $last = count($trial[$i]) - 1;
            $lastval = $trial[$i][$last];
            if ( $value > $lastval )
            {
                $trial[$i][] = $value;
                echo "** added $value";
            }
            echo "<br>\n";
        }
        echo "<br>\n";
    }
    $longest = 0;
    foreach ($trial as $key => $list) // Find first longest trial
    {
        if ( count($list) > count($trial[$longest]) )
            $longest = $key;
    }
    echo "All trials:<br>\n";
    print_r($trial);
    echo "<br><br>\n";
    echo "First longest sequence:<br>\n";
    print_r($trial[$longest]);
}
$n = 100;
$arr = array();
$arr = fill($arr, $n);
echo "Input: ";
print_r($arr);
echo "<br><br>\n";
longest_increasing_sequence($arr);