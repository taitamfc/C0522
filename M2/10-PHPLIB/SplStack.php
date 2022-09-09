<?php
/*
SplStack
    push: them phan tu
    top: lay phan tu trên cùng
    pop: xóa phần tử trên cùng

*/

$objSplStack = new SplStack();
$objSplStack->push('Phi');
$objSplStack->push('Cuong');
$objSplStack->push('Tan');
$objSplStack->push('Tam');

// echo $objSplStack->top();//Tam
// echo $objSplStack->pop();

echo '<pre>';
print_r($objSplStack);
echo '</pre>';

//Duyet toan bo phan tu trong stack

//dua con tro toi vi tri dau tien
$objSplStack->rewind();

//kiem tra danh sach còn dữ liệu hay ko: $objSplStack->valid()

while( $objSplStack->valid() ){

    //lấy ra phần tử đầu tiên
    echo $objSplStack->current().'<br>';

    //con trỏ nhảy thêm một vị trí
    $objSplStack->next();
}