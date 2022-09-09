<?php
$name = 'Nguyen Van A';

function showName(){
    // global $name;
    // echo $name;

    $age = 18;


    echo '<pre>';
    print_r($GLOBALS);
    echo '</pre>';

    echo $GLOBALS['name'];


}

function showAge(){
    echo $GLOBALS['age'];

}

showName();
showAge();