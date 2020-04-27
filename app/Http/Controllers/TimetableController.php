<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function timetable(){
        $title = 'Timetable | Students | Kids | Adults ';
        return view('pages/timetable', compact('title'));
    }
}
