<?php

// Persegi
// Segitaiga
// Piramida
// Fizz Buzz
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



// print(fizzBuzz(15));
// print(pola(15));
// print(polimorfismWord('assa'))
