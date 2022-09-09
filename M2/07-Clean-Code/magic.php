<?php
    const LIGHT = '#ccc';
    const DARK  = 'blue';

    $name   = 'Nguyen Van A';
    $age    = 18;
    $email  = '123@aam';   
    $sadasd = '';

    $i = '';
    $l = '';
    $I = '';

    /*
    Student, Aninmal, Human
    Add, Them
    - HoVaTen   : PascalCase    : Class 
    - hoVaTen   : camelCase     : Methods,Variable
    - ho_va_ten : snake_case    : Methods,Variable
    */

    const JAN = 1;
    const FEB = 2;
    const MAR = 3;
    const APR = 4;
    const MAY = 5;
    const JUN = 6;
    const JUL = 7;
    const AUG = 8;
    const SEP = 9;
    const OCT = 10;
    const NOV = 11;
    const DEC = 12;

    $month = 1;

    switch ($month) {
        case JAN:
        case MAR:
        case MAY:
        case JUL:
        case AUG:
        case OCT:
        case DEC:
            echo "Tháng ".$month." Có 31 ngày";
            break;
        case APR:
        case JUN:
        case SEP:
        case NOV:
            echo "Tháng ".$month." Có 30 ngày";
            break;
        case FEB:
            echo "Tháng ".$month." Có 28 or 29 ngày";
            break;
    
        default:
            echo "Tháng ".$month." không tồn tại ";
            break;
    }

    function kiemtrathang2($month){
        if( $month == FEB ){
            if($dk){
                if($dk){
                    if($dk){

                    }
                }
            }
        }

        if( $month == FEB ){
            
        }
    }

    function kiemtrathang4($month){
        if( $month == APR ){

        }

        if( $month == APR ){
            
        }
    }