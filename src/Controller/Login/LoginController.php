<?php
/**
 * Created by PhpStorm.
 * User: gilli
 * Date: 25/02/2019
 * Time: 15:00
 */

namespace PHPInitiation\Controller\Login;


class LoginController
{
    public function login(){
        $title = "LogIn";
        include __DIR__ . "/../../../template/login/login.html.php" ;

    }

    public function logout(){
        $title = "LogOut";
        include __DIR__ . "/../../../template/login/login.html.php" ;


    }

}