<?php
interface Bird {
    function fly();//PTTT
    function sing();//PTTT
}
interface Fish {
    function swimning();
}
interface GiaCam extends Bird {
    function gay();//PTTT
}

/*
- Trong IT chi co hang so va PTTT
- Khong the khoi tao doi tuong
- Interface không thể chứa các phương thức không PTTT
- Lop trien khai tu IT thi phai khai bao lai cac PT do CO PHAN THAN
- Bo sung viec PHP ko ho tro da ke thua
- Khong duoc khai bao ACMDF protected, private cho PTTT trong IT
*/
class GaCon implements GiaCam {
   function gay(){ }
   function fly(){ }
   function sing(){ }
}


class Animal {
    public function say(){
        echo 'Giao Tiep';
    }
}

class ConMeo extends Animal implements Bird{
    public function say(){
        echo 'Meo Meo';
    }

    function fly(){

    }

    function sing(){

    }
}