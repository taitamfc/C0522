<?php
/*
CamelCase: NguyenVanA, PhongTam, VanPhi
pascalCase: nguyenVanA, phongTam, vanPhi
snake_case: nguyen_van_A, phong_tam, van_phi 
*/
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
}

$meo = new Animal('Miu Le','Trang');
// $meo->say();
// $meo->go();
// $meo->setName('Miu Le 1');
// $meo->getName();
// $meo->setColor('Den');
// $meo->getColor();
// echo $meo->name;
// echo '<br>';
// echo $meo->color;

// echo '<pre>';
// print_r($meo);
// echo '</pre>';

$cun = new Animal('Lu','Den');//__construct
//gọi phuong thức thay đổi name và color
$cun->setName('Lu 1');//setName
$cun->setColor('Den 1');//setColor
//__destruct


//gọi phương thức để in ra giá trị name và color

echo '<pre>';
print_r($cun);
echo '</pre>';

