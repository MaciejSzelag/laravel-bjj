<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mondayTimetables;

class TimetableController extends Controller
{
    public function timetable(){
        $title = 'Timetable | Students | Kids | Adults ';
        $mondays = mondayTimetables::all()->toArray();
        return view('pages/timetable', compact('title','mondays'));
    }
}
