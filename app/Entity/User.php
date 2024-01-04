<?php

namespace MyApp\Entity;

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $phone;
    private $image;
    private $status;
    private $role_id;
    private $address;
    private $city;


    public function setId($id): void
    {
        $this->id = $id;
    }

    private  $unique_id;

    public function __construct(array $data = []) {
        if (!empty($data)) {
            $this->fromArray($data);
        }
        $this->unique_id = $data['unique_id'] ?? $this->generateUniqueId();

    }

    public function fromArray(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            if (method_exists($this, $method)) {
                call_user_func([$this, $method], $value);
            }
        }
    }

   
    public function toArray() {
        return get_object_vars($this);
    }

    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        // var_dump($email);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new \InvalidArgumentException("Invalid email address.");
        }
    }

   
    public function setPassword($password) {
        $this->password =$password;

    }

    
    public function getPassword() {
        return $this->password;
    }



   
    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

  
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    
    public function getRoleId() {
        return $this->role_id;
    }

    public function setRoleId($role_id) {
        $this->role_id = $role_id;
    }

    
    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }
    private function generateUniqueId()
    {
        
        return uniqid('', true);
    }
    public function getUniqueId() {
        return $this->unique_id;
    }
    public function setUniqueId($unique_id) {
    $this->unique_id = $unique_id;
}
}