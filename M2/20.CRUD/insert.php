<?php
include_once 'db.php';

$TENHANG    = 'Quan Ao 123';
$MACONGTY   = 1;
$MALOAIHANG = 1;
$SOLUONG    = 100;
$DONVITINH  = 'chiec';
$GIAHANG    = 10000;

$sql = "INSERT INTO `c10_mat_hang` 
        (`TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) 
        VALUES 
        ('$TENHANG', $MACONGTY, $MALOAIHANG, $SOLUONG, '$DONVITINH', $GIAHANG)";

// echo $sql;

$conn->exec($sql);