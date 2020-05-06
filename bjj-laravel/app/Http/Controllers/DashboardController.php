<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPanel(){
        $title = 'Dashboard |  Ian';
        return view('pages/admin/dashboard', compact('title'));
    }
}
