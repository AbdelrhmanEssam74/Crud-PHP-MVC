<?php


class product extends DB
{
    private string $table = 'products';
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllProduct(): MysqliDb|array|string|null
    {
        return $this->conn->get($this->table);
    }
}