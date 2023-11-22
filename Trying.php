<?php

function generatePattern($n)
{
    $output = '';
    $counter = 1;

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 === 0) {
            // $output .= '* ';
        } else {
            $output .= $counter . ' ';
            $counter++;
        }
    }

    return trim($output);
}

// Test cases
echo "Deret 1  => '" . generatePattern(1) . "'" . PHP_EOL;
echo "Deret 2  => '" . generatePattern(2) . "'" . PHP_EOL;
echo "Deret 5  => '" . generatePattern(5) . "'" . PHP_EOL;
echo "Deret 14 => '" . generatePattern(14) . "'" . PHP_EOL;