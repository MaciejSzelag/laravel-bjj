<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamMember;
use App\UpdatePrice;

class DashboardController extends Controller
{
     public function dashboardPanel(){
        $title = 'Content Management System';
        $member = TeamMember::all()->toArray();
        $length = TeamMember::count();
        $whiteBelts = TeamMember::where('level','white')->count();;
        $blueBelts = TeamMember::where('level','blue')->count();;
        $purpleBelts = TeamMember::where('level','purple')->count();;
        $brownBelts = TeamMember::where('level','brown')->count();;
        $blackBelts = TeamMember::where('level','black')->count();;
        $prices = UpdatePrice::all()->toArray();
        return view('pages.admin.dashboard', compact('title','member','length','whiteBelts','blueBelts','purpleBelts','brownBelts','blackBelts','prices'));
    }

     public function addMember(Request $request){

        $request->validate([
            "name"=> 'required',
            "lastName"=> 'required',
            "level"=> 'required',
            "DateOfBirth"=> 'required',
            "DateOfStart"=> 'required',
        ]);
        TeamMember::create($request->all());

          return redirect("/dashboard")->with('status-mamber','A new member has been added!');;
    }
    public function deleteMember($id){
  
       $findIdMember =  TeamMember::find($id);
       $findIdMember->delete();
       return redirect("/dashboard")->with('status-mamber','A  member has been deleted!');

    }

    public function updateMember($id){
        $findIdMember = TeamMember::find($id);
      
        return view("/pages/admin/updateMember")->with('findIdMember',$findIdMember);
    }
    public function saveUpdate(Request $request, $id){
        $findIdMember = TeamMember::find($id);
        $findIdMember->name = $request->name ;
        $findIdMember->lastName = $request->lastName ;
        $findIdMember->DateOfBirth = $request->DateOfBirth ;
        $findIdMember->level = $request->level ;
        $findIdMember->DateOfStart = $request->DateOfStart ;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','A  member has been updated!');
    }
    public function updateAdultPrice($id){
        $findIdMember = UpdatePrice::find($id);
      
        return view("/pages/admin/updatePrices")->with('findIdMember',$findIdMember);
    }
    public function saveUpdatePlan(Request $request, $id){
        $findIdMember = UpdatePrice::find($id);
        $findIdMember->planName = $request->planName ;
        $findIdMember->description = $request->description ;
        $findIdMember->price = $request->price ;
        $findIdMember->frenquency = $request->frenquency ;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','Plan has been changed');
    }
}