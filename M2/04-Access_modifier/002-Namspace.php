<?php
include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';

use DongHa\Tam;
use GioLinh\Tam as TamGioLinh;

$taiTam = new Tam();
$phongTam = new TamGioLinh();

$tam_1 = new DongHa\Tam();
$tam_2 = new GioLinh\Tam();

















































if( $tam_1 instanceof DongHa\Tam ){
    $tam_1->nghiatrangduong9();
}
if( $tam_1 instanceof GioLinh\Tam ){
    $tam_1->docmieu();
}