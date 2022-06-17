<?php
$affine = array(
    "0" => 'a',
    "1" => 'b',
    "2" => 'c',
    "3" => 'd',
    "4" => 'e',
    "5" => 'f',
    "6" => 'g',
    "7" => 'h',
    "8" => 'i',
    "9" => 'j',
    "10" => 'k',
    "11" => 'l',
    "12" => 'm',
    "13" => 'n',
    "14" => 'o',
    "15" => 'p',
    "16" => 'q',
    "17" => 'r',
    "18" => 's',
    "19" => 't',
    "20" => 'u',
    "21" => 'v',
    "22" => 'w',
    "23" => 'x',
    "24" => 'y',
    "25" => 'z'
);
$eniffa = array_flip($affine);


function codeAffine($a,$b,$string){
    global $affine,$eniffa;
if($a == 0){
    echo "impossible to decipher";
    exit;
}
$string = str_split(strtolower($string));
foreach ($string as $i => $value){
    $code[$i] = $eniffa[$value];
}
var_dump($code);
foreach ($code as $i => $value){
    $decode[$i] = $a * $value + ($b%6);
}
var_dump($decode);
    foreach ($decode as $value) {
        echo $affine[$value%26];
}

}


function decodeAffine(){


}

