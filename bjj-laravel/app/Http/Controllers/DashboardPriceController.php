<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlans;

class DashboardPriceController extends Controller
{    public function __construct(PricingPlans $PricingPlans){
    $this->PricingPlans = $PricingPlans; 
}
    public function updateAdultPrice($id){
        $findIdMember = $this->PricingPlans->getAllPrices()->find($id);
              return view("/pages/admin/updatePrices")->with('findIdMember',$findIdMember);
    }
    public function saveUpdatePlan(Request $request, $id){
        $findIdMember = $this->PricingPlans->getAllPrices()->find($id);
        $findIdMember->plan_name = $request->plan_name;
        $findIdMember->description = $request->description;
        $findIdMember->price = $request->price;
        $findIdMember->frenquency = $request->frenquency;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','Plan has been changed');
    }
}
