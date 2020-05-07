<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardTimetableController extends Controller
{
    public function getTimetableBoard() {
        $title = 'Dashboard | Update Timetable';
        return view('pages/admin/dashboard/d-timetable',compact('title'));
    }
}
