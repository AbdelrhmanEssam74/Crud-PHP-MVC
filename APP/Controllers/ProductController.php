<?php

class ProductController
{
    public function index(): void
    {
        $db = new product();
        $data['products'] = $db->getAllProduct();
        View::load('Product/index' , $data);
    }
}