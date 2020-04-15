<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        $title = 'Gallery | Students | Adults';
        return view('pages/gallery', compact('title'));
    }
}
