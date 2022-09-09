<?php
    $tusach = [
        ['Toan','Ly','Hoa'], //0
        //0      1    2
        ['Van','Su','Dia']   //1
        //0     1     2
    ];


    //xuaats
    echo $tusach[0][1];

    //ly -> vat ly
    $tusach[0][1] = 'Vat ly';

    //xoa dia
    // $tusach[1][2]
    unset( $tusach[1][2] );

    // for ($i=0; $i < count($tusach); $i++) { 
    //     for ($j=0; $j < count($tusach[$i])  ; $j++) { 
            
    //     }
    // }
    echo '<pre>';
    print_r($tusach);
    echo '</pre>';
    echo '<hr>';
    foreach( $tusach as $key => $books ){
        foreach( $books as $book ){
            echo $book.'<br>';
        }
    }

