<?php

function bubblesort($arrtosort, $arrcount){
    $root = 0;
    for($x = 0; $x < $arrcount; $x += 1){
        for($i = 1; $i < $arrcount; $i += 1){
            if($arrtosort[$root] > $arrtosort[$root + 1]){
                $mem = $arrtosort[$root + 1];
                $arrtosort[$root+1] = $arrtosort[$root];
                $arrtosort[$root] = $mem;
            }
            $root += 1;
        }
        $root = 0;
    }
    return $arrtosort;
}