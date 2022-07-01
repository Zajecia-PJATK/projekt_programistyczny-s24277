<?php
$morse = array(
    'A' => ".-" ,
    'B' => "-...",
    'C' => "-.-.",
    'D' => "-..",
    'E' => ".",
    'F' => "..-.",
    'G' => "--.",
    'H' => "....",
    'I' => "..",
    'J' => ".---",
    'K' => "-.-",
    'L' => ".-..",
    'M' => "--",
    'N' => "-.",
    'O' => "---",
    'P' => ".--.",
    'Q' => "--.-",
    'R' => ".-.",
    'S' => "...",
    'T' => "-",
    'U' => "..-",
    'V' => "...-",
    'W' => ".--",
    'X' => "-..-",
    'Y' => "-.--",
    'Z' => "--..",
    '1' => ".----",
    '2' => "..---",
    '3' => "...--",
    '4' => "....-",
    '5' => ".....",
    '6' => "-....",
    '7' => "--...",
    '8' => "---..",
    '9' => "----.",
    '0' => "-----",
    "."=>".-.-.-",
    ","=>"--..--",
    "?"=>"..--..",
    "/"=>"-..-.",
    ' ' => "   "
);

// Morse to alphabet
$esrom = array_flip($morse);

function codeMorse($string)
{
    global $morse;
    $chars = array();
// Checking if character is uppercase or lowercase and adding that information to that character
    foreach (str_split($string) as $value) {
        $chars[] = array("upper" => ctype_upper($value));
    }
    $STRING = strtoupper($string);
    foreach (str_split($STRING) as $i => $value) {
        $chars[$i][] = $morse[$value];
    }
    return $chars;
}
function Printmorse(array $chars){
    foreach ($chars as $char){
        echo $chars[0];
    }
}

function decodingMorse(array $chars){
    global $esrom;

// Decoding my morse
    $srahc = array();
    foreach ($chars as $char) {
        $srahc[] = $esrom[$char[0]];
    }
    // Checking if uppercase or lowercase and printing in alphabet
$i =0;
foreach ($chars as $char) {
    if($char["upper"] == true){
        $srahc[$i] =  $srahc[$i];
    }
    else{
        $srahc[$i] = strtolower($srahc[$i]);
    }
    $i++;
}
return $srahc;
}

function DecodingNormalMorse($input)
{
    global $esrom;
//Decoding normal morse
    $decode = explode(' ', preg_replace('/ {5}/', ' | ', $input));
    foreach ($decode as $value) {
        if ($value == "|") {
            echo " ";
        } else {
            echo $esrom[$value];
        }

    }
}
