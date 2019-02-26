<?php
/**
 * Created by PhpStorm.
 * User: gilli
 * Date: 25/02/2019
 * Time: 14:31
 */

namespace PHPInitiation\Controller\Error;


class ErrorController
{
    public function new(){

    }

    public function read(){

        $title = "Error";
        include __DIR__ . "/../../../template/error/error.html.php" ;

    }

    public function update(){

    }

    public function delete(){

    }
}