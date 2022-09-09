<?php
include_once 'db.php';

// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `c10_mat_hang` WHERE `MAHANG` = $id";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();

/*
stdClass Object
(
    [MAHANG] => 6
    [TENHANG] => Macbook
    [MACONGTY] => 3
    [MALOAIHANG] => 2
    [SOLUONG] => 1
    [DONVITINH] => chi?c
    [GIAHANG] => 4000000
)
*/
// Macbook
?>
<table border="1">
    <tr>
        <td> MAHANG </td>
        <td> <?php echo $row->MAHANG;?> </td>
    </tr>
    <tr>
        <td> TENHANG </td>
        <td>  <?php echo $row->TENHANG;?> </td>
    </tr>
    <tr>
        <td> MACONGTY </td>
        <td> <?php echo $row->MACONGTY;?> </td>
    </tr>
</table>