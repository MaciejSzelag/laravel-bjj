<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdatePrice;
use App\UpdatePrivatePrices;
use App\UpdateKidsPrice;

class PricesController extends Controller
{
    public function prices(){
        $title = 'Prices | Students | Kids | Adults ';
        $prices = UpdatePrice::all()->toArray();
        $privatePrices = UpdatePrivatePrices::all()->toArray();
        $kidsPrice = UpdateKidsPrice::all()->toArray();
        return view('pages/prices', compact('title','prices','privatePrices','kidsPrice'));
    }
}
