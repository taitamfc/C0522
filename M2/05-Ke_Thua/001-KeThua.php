<?php
class Animal {
    public $name;
    public $color;

    //phuong thuc khoi tao
    public function __construct($ts_name,$ts_color){
        $this->name = $ts_name;
        $this->color = $ts_color;
    }

    public function say(){
        echo __METHOD__.'<br>';
    }
    public function go(){
        echo __METHOD__.'<br>';
    }
    public function setName( $ts_name ){
        $this->name = $ts_name;
    }
    public function getName(){
        return $this->name;
    }
    public function setColor( $ts_color ){
        $this->color = $ts_color;
    }
    public function getColor(){
        return $this->color;
    }

    public function __destruct(){
        echo __METHOD__;
    }

    public function xehoi(){
        echo 'Xe cua ba me';
    }
}

class ConMeo extends Animal {
    public function xehoi(){
        echo 'Xe cua con';
    }
}

$meo = new ConMeo('Milu','Red');
$meo->xehoi();

