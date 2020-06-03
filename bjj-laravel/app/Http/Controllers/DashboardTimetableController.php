<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mondayTimetables;
use App\Models\Timetable;

class DashboardTimetableController extends Controller
{
    public function __construct(Timetable $timetable)
    {
        $this->Timetable = $timetable;
      }
    public function addNewClass(Request $request){
      $request->validate([
        "day_of_the_week" => 'required',
        "start_hours" => 'required',
        "start_minutes" => 'required',
        "end_hours" => 'required',
        "end_minutes" => 'required',
        "class_name" => 'required',
        "text_color" => 'required',
        "background_color" => 'required'
      ]);
        $this->Timetable->createNewClass($request);
        return redirect("/dashboard")->with('status-mamber','The new class has been added!');
    }
}
