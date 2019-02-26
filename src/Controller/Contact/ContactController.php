<?php
/**
 * Created by PhpStorm.
 * User: gilli
 * Date: 25/02/2019
 * Time: 10:28
 */

namespace PHPInitiation\Controller\Contact;


class ContactController
{
    public function new(){

    }

    public function read(){

        $title = "Contact";
        include __DIR__ . "/../../../template/contact/contact.html.php" ;

    }

    public function update(){

    }

    public function delete(){

    }
}