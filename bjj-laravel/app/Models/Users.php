<?php
namespace App\Models;
use App\User;

class Users 
{
    public function getAllUsers(){
        return User::all();
    }
}