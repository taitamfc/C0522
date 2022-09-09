<?php
include_once 'db.php';

// echo '<pre>';
// print_r($_REQUEST);
// die();

$id = $_REQUEST['id'];
// echo $id;

$TENHANG    = $_REQUEST['TENHANG'];
$MACONGTY   = 1;
$MALOAIHANG = 1;
$SOLUONG    = 100;
$DONVITINH  = 'chiec';
$GIAHANG    = 10000;

$sql = "UPDATE `c10_mat_hang` SET 
    `TENHANG` = '$TENHANG', 
    `MACONGTY` = $MACONGTY, 
    `MALOAIHANG` = $MALOAIHANG, 
    `SOLUONG` = $SOLUONG, 
    `DONVITINH` = '$DONVITINH', 
    `GIAHANG` = $GIAHANG 
WHERE `c10_mat_hang`.`MAHANG` = $id";

// echo $sql;

$conn->exec($sql);