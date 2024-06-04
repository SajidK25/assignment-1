<?php
function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }
        // Print stars
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "\n";
    }
}

$n = 25;
printPattern($n);
?>
