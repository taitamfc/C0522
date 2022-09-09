<?php
final class Uncle {
    public function money(){

    }
}

class Parents {
    public $name    = 'Cha me';
    protected $stk     = '12345678';
    public function makeMoney(){
        echo 'Ba me kiem tien <br>';
    }
    public function car($xe): String{
        return $this->name;
    }
    public final function house(){
        echo 'Nha cua ba me'.'<br>';
    }
}
class Child extends Parents{
    public function car($xe): String{
        //goi phuong thuc makeMoney();
        return $this->name;
    }

    public function makeMoney($money = ''){
        if($money){
            echo 'Kiem duoc tien :'. $money;
        }else{
            parent::makeMoney();
        }
    }


    
}
$child1 = new Child();
$child1->car('Vinfast');
$child1->makeMoney(1000);
// echo $child1->stk;