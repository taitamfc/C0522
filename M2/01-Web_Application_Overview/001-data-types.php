<?php
$name           = 'Nguyen Van A';           //String
$age            = 18;                       //Interger
$stk            = 10.5;                     //Float
$hasWife        = true;                     //Boolean
$favorites      = ['Thể Thao','Ca Nhạc'];   //Array
$hasSecondWife  = null;                     //Null
//Object        
//Resource      
//khai báo hằng số
define("PI_1", 3.14);
const PI_2 = 3.14;
//output
/*
- echo      :  String, Interger, Float
- print     :  String, Interger, Float 
- print_r   :  String, Interger, Float , Array
- var_dump  :  String, Interger, Float , Array, Boolean, Null
=> https://cafedev.vn/tu-hoc-php-so-sanh-print-va-echo-trong-php/
*/
// print $name . '<br>';
// print $stk;
// var_dump( $hasSecondWife );

echo '<pre>';
print_r($favorites);
echo '</pre>';


