<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPricesController extends Controller
{
    public function getPriceBoard() {
        $title = 'Dashboard | Update Price';

        return view('pages/admin/dashboard/d-prices',compact('title'));
    }
}
