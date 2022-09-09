<?php
$objSplQueue = new SplQueue();
$objSplQueue->enqueue('Phi');
$objSplQueue->enqueue('Cuong');
$objSplQueue->enqueue('Tan');
$objSplQueue->enqueue('Tam');


echo $objSplQueue->dequeue();//Phi
// echo $objSplQueue->pop();

echo '<hr>';

//Duyệt
$objSplQueue->rewind();
while ($objSplQueue->valid()) {
    echo $objSplQueue->current().'<br>';
    $objSplQueue->next();
}

echo '<pre>';
print_r($objSplQueue);
die();

