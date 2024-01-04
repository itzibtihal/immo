<?php
namespace MyApp\Controllers;

use MyApp\Model\PropertyModel;
use MyApp\Model\UserModel;

require  '../../View/admin/admin.php';

class AdminController
{
    public function displayAdminPage()
    {
        $propertyModel = new PropertyModel();
        $userModel = new UserModel();

        try {
            $propertyCount = $propertyModel->countProperties();
            $userCountWithRoleId2 = $userModel->countUsersWithRoleId(2);
            $userCountWithRoleId3 = $userModel->countUsersWithRoleId(3);
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }

       
        include '../../View/admin/admin.php';
    }
}