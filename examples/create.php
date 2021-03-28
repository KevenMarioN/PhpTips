<?php 

require __DIR__."/../vendor/autoload.php";

use Source\Models\Address;
use Source\Models\User;

$user = new User();
$user->first_name = "Thales";
$user->last_name = "Luigi";
$user->genre = "M";
$user->save();

$addr = new Address();
$addr->add($user,"Rua joaquim","252");
$addr->save();

var_dump($user);