<?php 

namespace MyApp\Model\Dao;

use MyApp\Model\Entity\User;

class UserDao extends DaoImplementation
{
    public function __construct()
    {
        parent::__construct('user');
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE email = :email";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $userData = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$userData) {
            return null; // User not found
        }

        // Instantiate User entity and set its properties
        $user = new User();
        $user->setUsername($userData['username']);
        $user->setEmail($userData['email']);
        $user->setPhone($userData['phone']);
        $user->setImage($userData['image']);
        $user->setStatus($userData['status']);
        $user->setRole($userData['role']);
        $user->setLocation($userData['location']);
        $user->setCity($userData['city']);

        return $user;
    }
    // public function getUserByEmail($email)
    // {
    //     // Example method to retrieve a user by email
    //     $query = "SELECT * FROM {$this->tableName} WHERE email = :email";
    //     $params = [':email' => $email];

    //     return $this->fetch($query, $params);
    // }
}
