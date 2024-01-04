<?php 

namespace MyApp\Model;

use MyApp\Dao\DaoImpl\DaoImplementation;
use MyApp\Entity\User;

class UserModel extends DaoImplementation
{
    public function __construct() {
        parent::__construct('user');
    }

    public function getUserByEmail($email) {
        $sql = "SELECT * FROM {$this->tableName} WHERE email = :email";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $userData = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $userData ? new User($userData) : null;
    }

    
    public function save($entity): void {
        
        if ($entity instanceof User && empty($entity->getUniqueId())) {
            $uniqueId = $this->generateUniqueId();
            $entity->setUniqueId($uniqueId);
        }

        
        parent::save($entity);
    }

    private function generateUniqueId() {
        return uniqid(rand(), true);
    }

    public function getUserById($userId)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = :id";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $userId);
        $stmt->execute();
        $userData = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $userData ? new User($userData) : null;
    }
}