<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User Extends DataLayer 
{
    public function __construct()
    {
        // Tabela,
        parent::__construct('users',["first_name","last_name"]);
    }

    public function addresses()
    {
        return (new Address())->find("user_id = :uid","uid={$this->id}")->fetch(true);
    }
}