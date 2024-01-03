<?php

namespace MyApp\Dao\DaoImpl;

use MyApp\Config\DbConnection;
use MyApp\Dao\DaoInterface;
use PDO;

class   DaoImplementation implements DaoInterface
{
    protected $db;
    protected $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->db = DbConnection::getInstance()->getConnection();
    }

    protected function getConnection()
    {
        return $this->db;
    }

    public function getById($id)
    {
        // Implement logic to fetch an entity by ID from the database
    }

    public function getAll(): array
    {
        $query = "SELECT * FROM $this->tableName";
        $statement = $this->db->query($query);

        // Check if the query was successful
        if ($statement) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Handle the error or return an empty array
            return [];
        }
    }

    public function save($entity): void
    {
        // Implement logic to save an entity to the database
    }

    public function update($entity): void
    {
        // Implement logic to update an entity in the database
    }

    public function delete($entity): void
    {
        // Implement logic to delete an entity from the database
    }

    /**
     
@return mixed*/
    public function getTableName()
    {
        return $this->tableName;
    }
}
