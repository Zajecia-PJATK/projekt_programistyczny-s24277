<?php
require 'Morse.php';
$chars = array();
foreach (str_split("TeXt") as $value){
    array_push($chars,array("is_big" => ctype_upper($value)));
}
foreach (str_split("TEXT") as $i => $value){
    array_push($chars[$i],$morse[$value]);
}
print_r($chars);
























?>