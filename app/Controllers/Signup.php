<?php

namespace MyApp\Controllers;

use MyApp\Core\Session;
use MyApp\Entity\User;
use MyApp\Model\UserModel;


class SignupController
{
    private $userDao;

    public function __construct()
    {
        $this->userDao = new UserModel();
    }
    public function showSignupForm()
    {
        
        require '../../View/auth/signup.php';
    }


    public function postSignup()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->validateSignupInput();

                $role_id = $this->getRoleId($_POST['role'] ?? 'Buyer'); 
                $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $userData = [
                    'username' => $_POST['username'] ?? '',
                    'email' => $_POST['email'] ?? '',
                    'password' => $hashed_pass,
                    'phone' => $_POST['phone'] ?? '',
                    'address' => $_POST['address'] ?? '',
                    'city' => $_POST['city'] ?? '',
                    'image' => null, 
                    'status' => 'active',
                    'role_id' => $role_id
                ];

                $user = new User($userData);
                $this->userDao->save($user);

                header("Location: /immo/login");
                exit;
            } catch (\Exception $e) {
                Session::flash('errors', $e->getMessage());
                header("Location: signup");
                exit;
            }
        } else {
            
            require '../../View/auth/signup.php';
        }
    }

    private function validateSignupInput()
    {
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->handleValidationFailure('Invalid email address.');
        }
     
    }

    private function handleExistingEmail($email)
    {
        if ($this->userDao->getUserByEmail($email)) {
            $this->handleValidationFailure('Email already exists.');
        }
    }

    private function handleValidationFailure($errorMessage)
    {
        Session::flash('errors', $errorMessage);
        header("Location: signup");
        exit;
    }

    private function handleRegistrationError($errorMessage)
    {
        Session::flash('errors', 'An error occurred while registering: ' . $errorMessage);
        header("Location: signup");
        exit;
    }

    private function getRoleId($roleString)
    {
        
        return ($roleString === 'Seller') ? 3 : 2;
    }
}