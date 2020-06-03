<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timetable;

class TimetableController extends Controller
{
    public function __construct(Timetable $Timetables){
        $this->Timetable = $Timetables;

        }
    public function timetable(){
        $title = 'Timetable | Students | Kids | Adults ';
        $mondays = $this->Timetable->getByDay('Monday');
        $tuesdays = $this->Timetable->getByDay('Tuesday');
        $wednesdays = $this->Timetable->getByDay('Wednesday');
        $thursdays = $this->Timetable->getByDay('Thursday');
        $fridays = $this->Timetable->getByDay('Friday');
        $saturdays = $this->Timetable->getByDay('Saturday');

        return view('pages/timetable', compact(
            'title',
            'mondays',
            'tuesdays',
            'wednesdays',
            'thursdays',
            'fridays',
            'saturdays'
        ));
    }
}
