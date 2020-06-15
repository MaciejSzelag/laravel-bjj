<?php
namespace App\Models;
use App\User;

class users 
{
    public function getAllUsers(){
        return User::all();
    }
}