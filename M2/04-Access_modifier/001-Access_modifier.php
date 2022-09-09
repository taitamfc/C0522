<?php
    class Man {
        public      $name;
        private     $salary;
        protected     $wife;

        //thuoc tinh cua lop
        private static $info = 'Hello 123';
        public function __construct( $ts_name, $ts_salary, $ts_wife ){
            $this->name = $ts_name;
            $this->salary = $ts_salary;
            $this->wife = $ts_wife;

            //
            self::$info = 'Hello';
        }
        public function getWife(){
            return $this->wife;
        }

        public function hi(){
            echo __METHOD__;
        } 

        public static function showInfo(){
            self::hi();
            return self::$info;
        }
    }

    echo Man::showInfo();
   

    // $phongTam = new Man( 'Tam',20000000, 'chua vo' );
    // echo $phongTam->getWife();

    // echo '<pre>';
    // print_r($phongTam);
    // die();