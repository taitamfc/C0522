<?php
    // $books      = array('Văn','Sử','Địa');
    $books    = ['Văn','Sử','Địa'];

    //in ra mảng
    echo '<pre>';
    print_r($books);
    echo '</pre>';

    //độ dài
    //echo count($books);

    //duyệt mảng
    for ($i=0; $i < count($books); $i++) { 
        echo $books[$i].'<br>';
    }

    //thêm
    $books[count($books)] = 'Sinh';
    array_push( $books, 'Lý' );
    $books[] = 'Anh';
   
    //sửa
    $books[0] = 'Văn Học';
    $books[1] = 'Sử Học';

    //xóa
    unset( $books[3] );

    // //xóa phần tử đầu tiên
    // array_shift( $books );

    // //xóa phần tử cuối
    // array_pop( $books );
    echo '<hr>';

    echo '<pre>';
    print_r($books);
    echo '</pre>';

    // for ($i=0; $i < count($books); $i++) { 
    //     if( isset($books[$i]) ){
    //         echo $books[$i].'<br>';
    //     }
    // }

    foreach( $books as $key => $book ){
        echo 'Key: '.$key.' - Value: '.$book.'<br>';
    }


    
