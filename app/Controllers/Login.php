<?php

namespace MyApp\Controllers;

use MyApp\Core\HandyFunctions;
use MyApp\Core\Session;
use MyApp\Model\UserModel;

class LoginController
{
    private $userDao;

    public function __construct()
    {
        $this->userDao = new UserModel();
    }

    public function showLoginForm()
    {
        require '../../View/auth/login.php';

    }

    public function processLogin()
    {
        echo 'enter';
        try {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

           
            $user = $this->userDao->getUserByEmail($email);
            var_dump($user);
            if ($user) {
                echo 'User ID: ' . $user->getId();
            }
            if ($user && password_verify($password, $user->getPassword())) {
               
                Session::start();

                Session::put('user_id', $user->getId());
                Session::put('username', $user->getUsername());
                Session::put('email', $user->getEmail());
                Session::put('phone', $user->getPhone());
                Session::put('image', $user->getImage());
                Session::put('status', $user->getStatus());
                Session::put('role_id', $user->getRoleId());
                Session::put('address', $user->getAddress());
                Session::put('city', $user->getCity());
                Session::put('unique_id', $user->getUniqueId());

             
                header('Location: /immo/home');
               
            } else {
             
                echo 'Authentication failed<br>';
                Session::flash('errors', 'Invalid email or password.');
                HandyFunctions::redirect('/immo/login');
                if ($user) {
                    echo 'User ID: ' . $user->getId();
                }
            }
        } catch (\Exception $e) {
            Session::flash('errors', $e->getMessage());
            HandyFunctions::redirect('/immo/login');
            if ($user) {
                echo 'User ID: ' . $user->getId();
            }
        }
    }
}