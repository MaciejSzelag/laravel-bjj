<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdatePrice;
use App\UpdateKidsPrice;
use App\UpdatePrivatePrices;

class DashboardPriceController extends Controller
{
    public function updateAdultPrice($id){
        $findIdMember = UpdatePrice::find($id);
              return view("/pages/admin/updatePrices")->with('findIdMember',$findIdMember);
    }
    public function saveUpdatePlan(Request $request, $id){
        $findIdMember = UpdatePrice::find($id);
        $findIdMember->planName = $request->planName;
        $findIdMember->description = $request->description;
        $findIdMember->price = $request->price;
        $findIdMember->frenquency = $request->frenquency;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','Plan has been changed');
    }


    public function updatePrivatePrice($id){
        $findIdMember = UpdatePrivatePrices::find($id);
              return view("/pages/admin/updatePrivatePlan")->with('findIdMember',$findIdMember);
    }
    public function saveUpdatePrivatePlan(Request $request, $id){
        $findIdMember = UpdatePrivatePrices::find($id);
        $findIdMember->planName = $request->planName ;
        $findIdMember->description = $request->description ;
        $findIdMember->price = $request->price ;
        $findIdMember->frenquency = $request->frenquency ;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','Private plan has been changed');
    }
    public function updateKidsPrice($id){
        $findIdMember = UpdateKidsPrice::find($id);
              return view("/pages/admin/updateKidsPlan")->with('findIdMember',$findIdMember);
    }
    public function saveUpdateKidsPlan(Request $request, $id){
        $findIdMember = UpdateKidsPrice::find($id);
        $findIdMember->planName = $request->planName ;
        $findIdMember->description = $request->description ;
        $findIdMember->price = $request->price ;
        $findIdMember->frenquency = $request->frenquency ;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','Kids plan has been changed');
    }
    
}
