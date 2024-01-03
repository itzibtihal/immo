<?php 

namespace MyApp\Model;

use MyApp\Dao\DaoImpl\DaoImplementation;
use MyApp\Entity\User;

class UserModel extends DaoImplementation
{
    
    public function __construct()
    {
        parent::__construct("user");
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE email = :email";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_CLASS, 'User');

        if (!$user) {
            return null; 
        }

        return $user;
    }}