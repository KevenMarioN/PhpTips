<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(2);
$user->first_name = "Thaleco";
$user->save();
var_dump($user);