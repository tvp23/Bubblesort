<?php include "Bubble.include.php";
$arrtosort = explode(' ', $_POST["arrtosort"]); 
$arrcount = count($arrtosort);

echo "<H2>Before sort:</H2><br>";
$i = 0;
foreach($arrtosort as &$v){
    echo "$arrtosort[$i] ";
    $i++;
}

$microt_start = microtime(true);

$arrsorted = bubblesort($arrtosort, $arrcount);

$microt_end = microtime(true);
$time = $microt_end - $microt_start;

echo "<br><br><H2>After sort:</H2><br>";
$i = 0;
foreach($arrsorted as &$v){
    echo "$arrsorted[$i] ";
    $i++;
}

echo "<br><br>It took: $time to sort your array.";