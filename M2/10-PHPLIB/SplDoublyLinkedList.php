<?php
$queue = new SplDoublyLinkedList();
$queue->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

$queue->push('Phi');
$queue->push('Cuong');
$queue->push('Tan');
$queue->push('Tam');


$queue->rewind();
while( $queue->valid() ){
    //lấy ra phần tử đầu tiên
    echo $queue->current().'<br>';
    //con trỏ nhảy thêm một vị trí
    $queue->next();
}