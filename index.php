<?php
require 'Morse.php';
$string = readline("Write your message to convert to Morse!");
$chars = array();
// Checking if character is uppercase or lowercase and adding that information to that character
foreach (str_split($string) as $value){
    $chars[] = array("upper" => ctype_upper($value));
}
$STRING = strtoupper($string);
foreach (str_split($STRING) as $i => $value){
    $chars[$i][] = $morse[$value];
}
// Printing on screen in Morse code
foreach($chars as $char) {
    echo $char[0] . ' ';
}
// Morse to alphabet and decoding
$esrom = array_flip($morse);
$srahc = array();
foreach ($chars as $char){
    $srahc[] = $esrom[$char[0]];
}
// Checking if uppercase or lowercase and printing in alphabet
$i =0;
foreach ($chars as $char) {
    if($char["upper"] == true){
        echo $srahc[$i];
    }
    else{
        echo strtolower($srahc[$i]);
    }
    $i++;
}

$decode = explode(' ',preg_replace('/ {5}/',' | ',readline()));
var_dump($decode);
foreach ($decode as $value){
    if($value == "|"){
        echo " ";
    }
    else {
        echo $esrom[$value];
    }
}
























?>