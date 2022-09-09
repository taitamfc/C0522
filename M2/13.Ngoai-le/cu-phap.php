<?php
    function sum($a,$b){
        if( $b == 0 ){
            throw new Exception('So chia = 0');
        }
        $c = $a / $b;
        echo 'Ket qua la:'. $c;
    }

    try {
        sum(5,0);
    } catch (\Exception $e) {
        echo $e->getMessage();
    } finally {
        // echo 'Vao khoi finally';
    }

