<?php
    $info = [
        'name' => 'Nguyen Van A',
        'age'  => 18
    ];
    echo '<pre>';
    print_r($info);
    echo '</pre>';

    //độ dài
    //echo count($info);//2
    //duyệt mảng
    foreach( $info as $key => $value ){
        echo 'Key: '.$key.' - Value: '.$value.'<br>';
    }
    //thêm gender:Male
    $info['gender'] = 'Male';
    $info[] = 'Abc';
    $info[] = 'Def';

    //sửa Nguyen Van A => B
    $info['name'] = 'Nguyen Van B';

    //xóa
    unset ($info['gender']);


    echo '<pre>';
    print_r($info);
    echo '</pre>';
