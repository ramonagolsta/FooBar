<?php

function generateFooBar($input) {
    $result = '';

    for ($i = 1; $i <= $input; $i++) {
        if ($i % 3 === 0) {
            $result .= "Foo\n";
        } elseif ($i % 5 === 0) {
            $result .= "Bar\n";
        } else {
            $result .= "$i\n";
        }
    }

    return $result;
}

echo "Please enter a positive integer:";
$input = strtolower(trim(fgets(STDIN)));

if (!ctype_digit($input) || $input <= 0) {
    echo "Invalid input. Please enter a positive integer." . PHP_EOL;
    exit;
}

echo generateFooBar($input);
