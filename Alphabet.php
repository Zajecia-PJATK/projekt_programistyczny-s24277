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


function codeAffine(int $a,int $b,$string)
{
    global $affine, $eniffa;
    if ($a == 0 || gmp_intval(gmp_invert($a,26)) == false) {
        exit("impossible to decipher (change first number)");
    }
    $string = str_split(strtolower($string));
    foreach ($string as $i => $value) {
        if($value == " "){
            $code[$i] = " ";
        }
        else{
            $code[$i] = $eniffa[$value];
        }
    }
    foreach ($code as $i => $value) {
        if($value == " "){
            $decode[$i] = " ";
        }else{
            $decode[$i] = ($a * $value + $b) % 26;
        }
    }
    $result = array();
    foreach ($decode as $value) {
        if($value == " "){
            $result =  " ";
        }else{
            $result =  $affine[$value];
        }
    }
    return $result;
}


function decodeAffine(int $a, int $b,$string){
    global $affine,$eniffa;
    if($a == 0){
        exit("impossible to decipher");
    }
    $gmp = gmp_intval(gmp_invert($a,26));
    $string = str_split(strtolower($string));
    foreach ($string as $i => $value){
        if($value == " "){
            $code[$i] = " ";
        }else{
            $code[$i] = $eniffa[$value];
        }
    }
    foreach ($code as $i => $value){
        if($value == " "){
            $decode[$i] = " ";
        }else{
            $decode[$i] = abs(($gmp*($value - $b))%26)  ;
        }
    }
    foreach ($decode as $value) {
        if($value == " "){
            echo " ";
        }else{
            echo $affine[$value];
        }
    }
}