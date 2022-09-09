<?php
include_once 'db.php';

// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id'];
// echo $id;
$sql = "DELETE FROM `c10_mat_hang` WHERE `c10_mat_hang`.`MAHANG` = $id ";
// echo $sql;
$conn->exec($sql);

//chuyen huong ve trang list.php
header("Location: list.php");