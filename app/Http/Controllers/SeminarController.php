<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function seminars(){


        $guestName = "Adam Wardzinski";
        $title = 'Seminars | '. $guestName .'| Brasilian Jiu Jitsu';
        return view('pages/seminar', compact('title'));
    }

}
