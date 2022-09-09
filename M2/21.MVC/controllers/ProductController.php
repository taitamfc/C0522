<?php
include_once 'models/ProductModel.php';
class ProductController {
    //trang danh sach
    public function index(){
        echo __METHOD__;
        $productModel = new ProductModel();
        $items = $productModel->getAll();

    

        //truyen xuong view
        include_once 'views/products/index.php';
    }

    //trang chi tiet
    public function show(){
        echo __METHOD__;

    }

    //trang them moi
    public function create(){
        echo __METHOD__;
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            $data = [
                'TENHANG' => $_REQUEST['TENHANG'],
                'MACONGTY' => $_REQUEST['MACONGTY'],
            ];
            $productModel = new ProductModel();
            $productModel->save($data);

            //chuyển hướng
            header("Location: index.php?controller=Product&page=index");

        }

        include_once 'views/products/create.php';

    }

    //trang cap nhat
    public function edit(){
        echo __METHOD__;

    }

    //xoa
    public function destroy(){
        echo __METHOD__;

    }
}