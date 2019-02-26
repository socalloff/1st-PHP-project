<?php
/**
 * Created by PhpStorm.
 * User: gilli
 * Date: 25/02/2019
 * Time: 10:33
 */

namespace PHPInitiation\Controller\NotFound;


class NotFoundController
{
    public function new(){

    }

    public function read(){

        $title = "Page Not Found";
        include __DIR__ . "/../../../template/not-found/not-found.html.php" ;


    }

    public function update(){

    }

    public function delete(){

    }
}