<?php

// Rectangle
// Triangle
// Pyramid
// Fizz Buzz
// pola
// polimorphism

function rectangle($height, $width) {
    for ($i=0; $i < $height; $i++) { 
        for ($j=0; $j < $width; $j++) { 
            echo " *";
        }
        echo PHP_EOL;
    }
}

function triangle($size) {
    for ($i = 1; $i < $size; $i++) { 
        for ($j = 1; $j < $i; $j++) {
            echo " *"; 
        }
        echo PHP_EOL;
    }
}

function pyramid($size) {
    for ($i=0; $i < $size; $i++) {
        for ($j=0; $j < $size - $i; $j++) { 
            echo " ";
        }
        for ($k=0; $k < $i; $k++) { 
            echo " *";
        }
        echo PHP_EOL;
    }
}

function fizzBuzz($input)
{
    for ($i = 1; $i < $input + 1; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            print('FizzBuzz ');
        } else if ($i % 3 === 0) {
            print('Fizz ');
        } else if ($i % 5 === 0) {
            print('Buzz ');
        } else {
            print($i . ' ');
        }
    }
}

// Pola (2)
function pola($input)
{
    for ($i = 1; $i < $input + 1; $i++) {
        if ($i % 5 === 1 || $i % 5 === 0) {
            print('* ');
        } else {
            print($i . ' ');
        }
    }
}

// polymorphism
function polimorfismWord($input)
{
    $output = '';
    for ($i = strlen($input) - 1; $i >= 0; $i--) {
        $output .= $input[$i];
    }

    if ($input === $output) {
        print('polimorfism');
    } else {
        print('not-polimorfism');
    }
}


// print(rectangle(10, 10));
// print(triangle(10));
print(pyramid(10));
// print(fizzBuzz(15));
// print(pola(15));
// print(polimorfismWord('assa'))
