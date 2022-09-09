<?php
$string = '2,5,8,12,16,23,38,56,72,91';
$arr    = explode(',',$string);
$find   = 23;

echo '<pre>';
print_r($arr);

$L = 0;
$R = count($arr) - 1;

while( $L <= $R ){
    $M = ceil( ( $L + $R ) / 2 );
    if( $arr[$M] > $find ){
        $R = $M - 1;
    }elseif( $arr[$M] < $find ){
        $L = $M + 1;
    }else{
        echo 'Số cần tìm tại vị trí '. $M;
        break;
    }
}
