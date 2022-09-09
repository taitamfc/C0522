<?php
include_once 'models/ProductModel.php';
class UserController {
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