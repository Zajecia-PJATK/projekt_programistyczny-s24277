<?php
require 'Morse.php';
$string = readline("Write your message to convert to Morse!");
$chars = array();
// Checking if character is uppercase or lowercase and adding that information to that character
foreach (str_split($string) as $value){
    array_push($chars,array("upper" => ctype_upper($value)));
}
$STRING = strtoupper($string);
foreach (str_split($STRING) as $i => $value){
    array_push($chars[$i],$morse[$value]);
}
// Printing on screen in Morse code
foreach($chars as $char) {
    echo $char[0];
}
























?>