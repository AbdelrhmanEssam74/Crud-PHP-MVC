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

    /**
     * @throws Exception
     */
    public function getProductByID($id): MysqliDb|array|string|null
    {
        $this->conn->where("id", $id);
        return $this->conn->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function insert($data): bool
    {
        return $this->conn->insert($this->table, $data);
    }

    /**
     * @throws Exception
     */
    public function delete($id): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->delete($this->table);
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, $data);
    }
}