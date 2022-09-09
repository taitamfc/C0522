<?php

$firsName = 'Phi';
$lastName = 'Phung Van';
$string = 'Toi ten la ' . $lastName . ' ' . $firsName;

$string     = '(+84)-943.612.567';
$pattern    = '/\(\+84\)\-[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if (preg_match($pattern, $string)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}

$ip = "192.168.1.1";

// // $arr = explode('.',$ip);
// $pattern = '/\./';
// $arr = preg_split($pattern,$ip);
// echo '<pre>';
// print_r($arr);


// $ip = str_replace('.','-',$ip);
// $pattern = '/\./';
// $ip = preg_replace($pattern,'-',$ip);
// echo $ip;


$string = '123abd6565hhh789sss';
$pattern = '/[a-z]+/';
$string = preg_replace($pattern,'-',$string);

echo $string;