<?php
class CustomException extends Exception {
    public function hienThiLoi(){
        $error = '';
        $error = '' . '<br> Loi: '.$this->getMessage() . '<br> Code: '.$this->getCode();
        // $error .= '<br> Code: '.$this->getCode();
        // $error .= '<br> File: '.$this->getFile();
        // $error .= '<br> Line: '.$this->getLine();
        return $error;

        $x = 5;
        $y = 6;
        $y += $x;//11

        $y = $y + $x;//11

        $ten = 'Phi';
        $ho = 'Phung Va';
        $ho .= $ten;
        $ho = $ho . $ten;//
        
    }
}

function sum($a,$b){
    if( $b == 0 ){
        throw new CustomException('So chia = 0');
        echo 123;die();
    }

    $c = $a / $b;
    echo 'Ket qua la:'. $c;
}

try {
    sum(5,0);
} catch (\Exception $e) {
    echo $e->hienThiLoi();
} finally {
    // echo 'Vao khoi finally';
}