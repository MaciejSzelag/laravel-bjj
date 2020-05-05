<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index() {
        $title = 'Bjj Plymouth | Bjj | Brazilian jiu jitsu | Students | Adults | Kids';
        return view('welcome',compact('title'));
    }
}
