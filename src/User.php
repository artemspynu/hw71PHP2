<?php

namespace src;

class User {

    public $email;

    public function setEmail($dirtyEmail) {
        $this->email = Sanitizer::email($dirtyEmail);
    }

}

$user = new User();
$user->setEmail('te st@123.ru');

var_dump($user->email);
