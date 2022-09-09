<?php
    class GiaCam {
        public $name = 'GiaCam';
        public static function fly(){
            echo __METHOD__.'<br>';
            // echo $this->name.'<br>';
        }
    }

    class Duck extends GiaCam{
        public function khaNang(){
            echo __METHOD__.'<br>';
            GiaCam::fly();
        }

        public static function fly(){
            echo __METHOD__.'<br>';
        }
    }

    $Duck = new Duck();
    $Duck->khaNang();