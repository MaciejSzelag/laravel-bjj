<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return view('welcome');
    }
    public function showPage($newTab) {
           $pages = [
            'about'=>view('pages/about'),
            'gallery'=>view('pages/gallery')
           ];
        return $pages[$newTab];
    }
}
