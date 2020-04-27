<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partners(){
        $title = 'Partners | Bjjplymouth';
        return view('pages/partners', compact('title'));
    }
}
