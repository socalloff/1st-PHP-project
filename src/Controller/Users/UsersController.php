<?php

namespace PHPInitiation\Controller\Users;

use PHPInitiation\Model\User\User;
use PHPInitiation\Model\User\UserInfo;
use PHPInitiation\Model\User\UserAvatar;

class UsersController
{

    public function new(){

        $error = [];
        if (filter_input_array(INPUT_POST)) {
            if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
                $error["email"] = "You should check your email, it seems like it's not a real one.";
            }

            if (!filter_input(INPUT_POST, "password")) {
                $error["password"] = "You should check your password, it seems like it's empty.";
            }

            if (filter_input(INPUT_POST, "confirm") !== filter_input(INPUT_POST, "password")) {
                $error["confirm"] = "You should check your confirmation, it seems like it's not a match with you password.";
            }
        }

        $title = 'SignUp';
        include __DIR__ . "/../../../template/users/users_new.html.php";

    }

    public function read(){

        $avatar = new UserAvatar();

        $user1 = new User();
        $user2 = new User();
        $user3 = new User();

        $info1 = new UserInfo();
        $info2 = new UserInfo();
        $info3 = new UserInfo();

        $info1->setFirstName("Kelly");
        $info2->setFirstName("Bob");
        $info3->setFirstName("John");

        $user1->setInfo($info1);
        $user2->setInfo($info2);
        $user3->setInfo($info3);

        $userArray = [
            $user1,
            $user2,
            $user3
        ];

        $title = "Users";

        include __DIR__ . "/../../../template/users/users.html.php";

    }

    public function update(){

    }

    public function delete(){

    }
}


