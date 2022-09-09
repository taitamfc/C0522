<?php
abstract class HinhHoc {
    public $name;
    public abstract function chuvi();
    public abstract function dientich();

    public function getName(){

    }
}

// $objHinhHoc = new HinhHoc();


class HinhChuNhat extends HinhHoc{
    
    public function chuvi(){
    
    }
    public function dientich(){

    }
}

/*
- Khong the khoi tao doi tuong
- khi ke thua can phai khai bao lai cac phuong thuc co phan than

*/