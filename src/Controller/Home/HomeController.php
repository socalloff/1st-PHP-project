<?php
/**
 * Created by PhpStorm.
 * User: gilli
 * Date: 25/02/2019
 * Time: 10:25
 */

namespace PHPInitiation\Controller\Home;


class HomeController
{
    public function new(){

    }

    public function read(){

        $title = "Home";
        include __DIR__ . "/../../../template/home/home.html.php" ;

    }

    public function update(){

    }

    public function delete(){

    }
}