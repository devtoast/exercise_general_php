<?php

// Tolle Array-Sortiermaschine
$toolArr = array(
    "Hammer",
    "Amboss",
    "Schraubenzieher",
    "Hammer",
    "Schraubzwinge",
    "Stemmeisen",
    "Säge",
    "Hobel"
);

//
echo "<pre>";
print_r($toolArr);
echo "</pre>";
//


// Tolle Array-Sortiermaschine
function arraySorter($arrayContent)
{
    $arraySorted = array_unique($arrayContent); // Mehrfach Werte?
    asort($arraySorted); // A-Z
    sort($arraySorted); // A-Z, 0-x

    return $arraySorted;
}
// 

//
echo "<pre>";
print_r(arraySorter($toolArr));
echo "</pre>";
//


foreach (arraySorter($toolArr) as $tool) {
    echo $tool;
    echo "<br>";
}

echo "<br>";

foreach (arraySorter($toolArr) as $index => $tool) {
    echo $index . " " . $tool;
    echo "<br>";
}
// Tolle Array-Sortiermaschine END

echo "<br>";
echo "<br>";
