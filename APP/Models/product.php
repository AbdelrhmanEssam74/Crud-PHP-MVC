<?php


class product extends DB
{
    private  string $table = 'product';
    private $conn;
    public function __construct(){
        $this->conn = $this->connect();
    }
    public function getAllProduct(){
        return $this->conn->get('products');
    }
}