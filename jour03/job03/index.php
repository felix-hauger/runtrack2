<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$vowels = 'aeiouyAEIOUY';
$vowel_str = '';

$i = 0;


while (isset($str[$i])) {
    $char = $str[$i];

    for ($v = 0; $v < 11; $v++) {
        if ($str[$i] === $vowels[$v]) {
            $vowel_str .= $char;
            break;
        }
    }
    $i++;
}

echo $vowel_str;

