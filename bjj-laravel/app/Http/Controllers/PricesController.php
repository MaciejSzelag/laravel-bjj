<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlans;

class PricesController extends Controller
{
    public function __construct(PricingPlans $PricingPlans){
        $this->PricingPlans = $PricingPlans; 
    }
    public function prices(){
        $title = 'Prices | Students | Kids | Adults ';
        $privates = $this->PricingPlans->getPriceByTypeId('private');
        $adults = $this->PricingPlans->getPriceByTypeId('adult');
        $kids = $this->PricingPlans->getPriceByTypeId('kid');
        return view('pages/prices', compact('title','privates','adults','kids'));
    }
}
