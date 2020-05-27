<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdatePrice;

class PricesController extends Controller
{
    public function prices(){
        $title = 'Prices | Students | Kids | Adults ';
        $prices = UpdatePrice::all()->toArray();
        return view('pages/prices', compact('title','prices'));
    }
}
