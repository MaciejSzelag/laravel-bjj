<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricesController extends Controller
{
    public function prices(){
        $title = 'Prices | Students | Kids | Adults ';
        return view('pages/prices', compact('title'));
    }
}
