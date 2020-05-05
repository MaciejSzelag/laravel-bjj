<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdmin(){
        $title = 'Admin | Hello Ian';
        return view('pages/admin', compact('title'));
    }
}
